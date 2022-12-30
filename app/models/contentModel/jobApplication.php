<?php
class jobApplication extends model
{
    public function getAll()
    {
        return $this->db->get("jobs");
    }
    public function getData($id)
    {
        $this->db->where("ID", $id);
        return $this->db->getOne("jobs");
    }
    public function addData($data)
    {
        return $this->db->insert("jobs", $data);
    }
    public function updateData($data, $id)
    {
        $this->db->where("ID", $id);
        return $this->db->update("jobs", $data);
    }
    public function deleteData($id)
    {
        $this->db->where("ID", $id);
        return $this->db->delete("jobs");
    }
    public function getWhereConditions($where = [])
    {
        foreach ($where as $key => $value) {
            $this->db->where($key, $value);
        }
        return $this->db->get("jobs");
    }
    public function rawQuery($query){
        return $this->db->rawQuery($query);
    }
}
