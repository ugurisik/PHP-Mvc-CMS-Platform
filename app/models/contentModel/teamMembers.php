<?php
class teamMembers extends model
{
    public function getAll()
    {
        return $this->db->get("teams");
    }
    public function getData($id)
    {
        $this->db->where("ID", $id);
        return $this->db->getOne("teams");
    }
    public function addData($data)
    {
        return $this->db->insert("teams", $data);
    }
    public function updateData($data, $id)
    {
        $this->db->where("ID", $id);
        return $this->db->update("teams", $data);
    }
    public function deleteData($id)
    {
        $this->db->where("ID", $id);
        return $this->db->delete("teams");
    }
    public function getWhereConditions($where = [])
    {
        foreach ($where as $key => $value) {
            $this->db->where($key, $value);
        }
        return $this->db->get("teams");
    }
    public function rawQuery($query){
        return $this->db->rawQuery($query);
    }
}
