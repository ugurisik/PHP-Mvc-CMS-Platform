<?php

class lang extends model
{
    public function getAll()
    {
        return $this->db->get("langs");
    }
    public function getData($id)
    {
        $this->db->where("id", $id);
        return $this->db->getOne("langs");
    }
    public function addData($data)
    {
        return $this->db->insert("langs", $data);
    }
    public function updateData($data, $id)
    {
        $this->db->where("id", $id);
        return $this->db->update("langs", $data);
    }
    public function deleteData($id)
    {
        $this->db->where("id", $id);
        return $this->db->delete("langs");
    }
    public function getWhereConditions($where = [])
    {
        foreach ($where as $key => $value) {
            $this->db->where($key, $value);
        }
        return $this->db->get("langs");
    }
    public function rawQuery($query){
        return $this->db->rawQuery($query);
    }
}
