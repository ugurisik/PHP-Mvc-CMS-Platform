<?php
class photos extends model
{
    public function getAll()
    {
        return $this->db->get("photos");
    }
    public function getData($id)
    {
        $this->db->where("ID", $id);
        return $this->db->getOne("photos");
    }
    public function addData($data)
    {
        return $this->db->insert("photos", $data);
    }
    public function updateData($data, $id)
    {
        $this->db->where("ID", $id);
        return $this->db->update("photos", $data);
    }
    public function deleteData($id)
    {
        $this->db->where("ID", $id);
        return $this->db->delete("photos");
    }
    public function getWhereConditions($where = [])
    {
        foreach ($where as $key => $value) {
            $this->db->where($key, $value);
        }
        return $this->db->get("photos");
    }
    public function rawQuery($query){
        return $this->db->rawQuery($query);
    }
}
