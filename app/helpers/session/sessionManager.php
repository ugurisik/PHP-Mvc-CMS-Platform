<?php
class sessionManager extends model
{
    public function createSession($array = [])
    {
        foreach ($array as $key => $value) {
            $_SESSION[$key] = $value;
        }
    }
    public function deleteSession($key)
    {
        unset($_SESSION["".$key.""]);
    }
    public function allSessionDelete()
    {
        session_unset();
        session_destroy();
    }
    public function getSession($key)
    {
        return $_SESSION['' . $key . ''];
    }
    public function getAll()
    {
        if(empty($_SESSION)){
            $_SESSION['null'] = "null";
        }
        return $_SESSION;
    }
    public function isAdminLogged(){
        if(empty($this->getSession("adminMail"))){
            header("Location: " . SITE_URL . "admincp/auth/login");
            exit;
        }else{
            if($this->getWhereConditions(["email" => $this->getSession("adminMail")])[0]['loginID'] == $this->getSession("adminToken")){
                return true;
            }else{
                $this->allSessionDelete();
                header("Location: " . SITE_URL . "admincp/auth/login");
                exit;
            }
        }
    }
    public function getWhereConditions($where = [])
    {
        foreach ($where as $key => $value) {
            $this->db->where($key, $value);
        }
        return $this->db->get("users");
    }
}
