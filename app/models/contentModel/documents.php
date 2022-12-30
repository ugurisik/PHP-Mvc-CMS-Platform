<?php
class documents extends model
{
    public function getAll()
    {
        return $this->db->get("documents");
    }
    public function getData($id)
    {
        $this->db->where("ID", $id);
        return $this->db->getOne("documents");
    }
    public function addData($data)
    {
        return $this->db->insert("documents", $data);
    }
    public function updateData($data, $id)
    {
        $this->db->where("ID", $id);
        return $this->db->update("documents", $data);
    }
    public function deleteData($id)
    {
        $this->db->where("ID", $id);
        return $this->db->delete("documents");
    }
    public function getWhereConditions($where = [])
    {
        foreach ($where as $key => $value) {
            $this->db->where($key, $value);
        }
        return $this->db->get("documents");
    }
    public function rawQuery($query){
        return $this->db->rawQuery($query);
    }
}
