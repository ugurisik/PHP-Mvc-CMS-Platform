<?php
class slider extends model
{
    public function getAll()
    {
        $this->db->orderBy("sira", "ASC");
        return $this->db->get("slider");
    }
    public function getData($id)
    {
        $this->db->where("ID", $id);
        return $this->db->getOne("slider");
    }
    public function addData($data)
    {
        return $this->db->insert("slider", $data);
    }
    public function updateData($data, $id)
    {
        $this->db->where("ID", $id);
        return $this->db->update("slider", $data);
    }
    public function deleteData($id)
    {
        $this->db->where("ID", $id);
        return $this->db->delete("slider");
    }
    public function getWhereConditions($where = [])
    {
        foreach ($where as $key => $value) {
            $this->db->where($key, $value);
        }
        return $this->db->get("slider");
    }
    public function rawQuery($query){
        return $this->db->rawQuery($query);
    }
}
