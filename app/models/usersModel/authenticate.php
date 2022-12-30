<?php 
class authenticate extends model
{
    public function mailControl($mail){
        $this->db->where("email", $mail);
        return $this->db->get("users");
    }
}
