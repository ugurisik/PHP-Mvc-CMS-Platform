<?php
class authenticate extends model
{
    public function mailControl($mail)
    {
        $this->db->where("email", $mail);
        return $this->db->get("users");
    }
    public function lastLogin($userid)
    {
        $this->db->where("userID", $userid);
        $this->db->orderBy("id", "DESC");
        return $this->db->getOne("login_info");
    }
    public function getLoginInfo($userid)
    {
        $this->db->where("userID", $userid);
        $this->db->orderBy("id", "DESC");
        return $this->db->getOne("login_info");
    }
    public function addLoginError($data)
    {
        return $this->db->insert("login_error", $data);
    }
    public function addLoginBan($data)
    {
        return $this->db->insert("login_ban", $data);
    }
    public function addLoginInfo($data)
    {
        return $this->db->insert("login_info", $data);
    }
    public function rawQuery($query){
        return $this->db->rawQuery($query);
    }
}
