<?php
class announcements extends model
{
    public function getAll()
    {
        return $this->db->get("duyuru");
    }
    public function getData($id)
    {
        $this->db->where("ID", $id);
        return $this->db->getOne("duyuru");
    }
    public function addData($data)
    {
        return $this->db->insert("duyuru", $data);
    }
    public function updateData($data, $id)
    {
        $this->db->where("ID", $id);
        return $this->db->update("duyuru", $data);
    }
    public function deleteData($id)
    {
        $this->db->where("ID", $id);
        return $this->db->delete("duyuru");
    }
    public function getWhereConditions($where = [])
    {
        foreach ($where as $key => $value) {
            $this->db->where($key, $value);
        }
        return $this->db->get("duyuru");
    }
    public function rawQuery($query){
        return $this->db->rawQuery($query);
    }
}
