<?php
class references extends model
{
    public function getAll()
    {
        return $this->db->get("references");
    }
    public function getData($id)
    {
        $this->db->where("ID", $id);
        return $this->db->getOne("references");
    }
    public function addData($data)
    {
        return $this->db->insert("references", $data);
    }
    public function updateData($data, $id)
    {
        $this->db->where("ID", $id);
        return $this->db->update("references", $data);
    }
    public function getWhereConditions($where = [])
    {
        foreach ($where as $key => $value) {
            $this->db->where($key, $value);
        }
        return $this->db->get("references");
    }
    public function deleteData($id)
    {
        $this->db->where("ID", $id);
        return $this->db->delete("references");
    }
    public function getDataWSearchQuery($query)
    {
        return $this->db->rawQuery("SELECT * FROM imer_references WHERE title LIKE '%$query%' or content LIKE '%$query%' and status = 1");
    }
    public function rawQuery($query){
        return $this->db->rawQuery($query);
    }
}
