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
    public function getLoginError($userid)
    {
        $this->db->where("userID", $userid);
        $this->db->orderBy("id", "DESC");
        return $this->db->getOne("login_info");
    }
    public function rawQuery($query){
        return $this->db->rawQuery($query);
    }
}
