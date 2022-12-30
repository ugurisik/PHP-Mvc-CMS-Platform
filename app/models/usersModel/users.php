<?php
class users extends model
{
    public function addData($data)
    {
        return $this->db->insert("users", $data);
    }
    public function getData($userID)
    {
        $this->db->where("ID", $userID);
        return $this->db->getOne("users");
    }
    public function getAll()
    {
        return $this->db->get("users");
    }
    public function getWhereConditions($where = [])
    {
        foreach ($where as $key => $value) {
            $this->db->where($key, $value);
        }
        return $this->db->get("users");
    }
    public function deleteData($userID)
    {
        $this->db->where("ID", $userID);
        return $this->db->delete("users");
    }
    public function updateData($data, $userID)
    {
        $this->db->where("ID", $userID);
        return $this->db->update("users", $data);
    }
    public function rawQuery($query)
    {
        return $this->db->rawQuery($query);
    }
}
