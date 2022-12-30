<?php
class customerComments extends model
{
    public function getAll()
    {
        return $this->db->get("customer_comments");
    }
    public function getData($id)
    {
        $this->db->where("ID", $id);
        return $this->db->getOne("customer_comments");
    }
    public function addData($data)
    {
        return $this->db->insert("customer_comments", $data);
    }
    public function updateData($data, $id)
    {
        $this->db->where("ID", $id);
        return $this->db->update("customer_comments", $data);
    }
    public function deleteData($id)
    {
        $this->db->where("ID", $id);
        return $this->db->delete("customer_comments");
    }
    public function getWhereConditions($where = [])
    {
        foreach ($where as $key => $value) {
            $this->db->where($key, $value);
        }
        return $this->db->get("customer_comments");
    }
    public function rawQuery($query){
        return $this->db->rawQuery($query);
    }
}
