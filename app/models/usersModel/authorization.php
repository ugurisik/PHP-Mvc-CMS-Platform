<?php
class authorization extends model
{
    public function addData($data)
    {
        return $this->db->insert("users_meta", $data);
    }
    public function deleteData($userID)
    {
        $this->db->where("userID", $userID);
        return $this->db->delete("users_meta");
    }
    public function authorizationControl($userID)
    {
        $this->db->where("userID", $userID);
        $this->db->where("type", "yetki");
        return $this->db->getOne("users_meta");
    }
    public function getWhereConditions($where = [])
    {
        foreach ($where as $key => $value) {
            $this->db->where($key, $value);
        }
        return $this->db->get("users_meta");
    }
    public function rawQuery($query){
        return $this->db->rawQuery($query);
    }
}
