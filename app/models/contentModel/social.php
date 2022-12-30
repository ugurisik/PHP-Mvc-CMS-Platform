<?php
class social extends model
{
    public function getAll()
    {
        return $this->db->get("social");
    }
    public function getData($id)
    {
        $this->db->where("id", $id);
        return $this->db->getOne("social");
    }
    public function updateData($data, $id)
    {
        $this->db->where("id", $id);
        return $this->db->update("social", $data);
    }
    public function addData($data)
    {
        return $this->db->insert("social", $data);
    }
    public function deleteData($id)
    {
        $this->db->where("id", $id);
        return $this->db->delete("social");
    }
    public function getWhereConditions($where = [])
    {
        foreach ($where as $key => $value) {
            $this->db->where($key, $value);
        }
        return $this->db->get("social");
    }
    public function rawQuery($query){
        return $this->db->rawQuery($query);
    }
}
