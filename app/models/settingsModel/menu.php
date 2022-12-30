<?php
class menu extends model
{
    public function getAll()
    {
        return $this->db->get("menu");
    }
    public function getData($id)
    {
        $this->db->where("id", $id);
        return $this->db->getOne("menu");
    }
    public function getWhereConditions($where = [])
    {
        foreach ($where as $key => $value) {
            $this->db->where($key, $value);
        }
        return $this->db->get("menu");
    }
    public function addData($data)
    {
        return $this->db->insert("menu", $data);
    }
    public function updateData($where = [], $data)
    {
        foreach ($where as $key => $value) {
            $this->db->where($key, $value);
        }
        return $this->db->update("menu", $data);
    }
    public function rawQuery($query){
        return $this->db->rawQuery($query);
    }
}
