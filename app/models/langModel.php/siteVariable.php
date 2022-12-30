<?php

class siteVariable extends model
{
    public function getAll()
    {
        return $this->db->get("langs_meta");
    }
    public function addData($data)
    {
        return $this->db->insert("langs_meta", $data);
    }
    public function updateData($data, $type)
    {
        $this->db->where("type", $type);
        return $this->db->update("langs_meta", $data);
    }
    public function deleteData($type)
    {
        $this->db->where("type", $type);
        return $this->db->delete("langs_meta");
    }
    public function getDataWithType($type)
    {
        $this->db->where("type", $type);
        return $this->db->get("langs_meta");
    }
    public function getWhereConditions($where = [])
    {
        foreach ($where as $key => $value) {
            $this->db->where($key, $value);
        }
        return $this->db->get("langs_meta");
    }
    public function rawQuery($query){
        return $this->db->rawQuery($query);
    }
}
