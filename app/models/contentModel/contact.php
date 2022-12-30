<?php
class contact extends model
{
    public function getAll()
    {
        return $this->db->get("contacts");
    }
    public function getData($id)
    {
        $this->db->where("ID", $id);
        return $this->db->getOne("contacts");
    }
    public function addData($data)
    {
        return $this->db->insert("contacts", $data);
    }
    public function updateData($data, $id)
    {
        $this->db->where("ID", $id);
        return $this->db->update("contacts", $data);
    }
    public function deleteData($id)
    {
        $this->db->where("ID", $id);
        return $this->db->delete("contacts");
    }
    public function getWhereConditions($where = [])
    {
        foreach ($where as $key => $value) {
            $this->db->where($key, $value);
        }
        return $this->db->get("contacts");
    }
    public function rawQuery($query){
        return $this->db->rawQuery($query);
    }
}
