<?php
class logs extends model
{
    public function getAll()
    {
        $this->db->orderBy("TransactionDate", "DESC");
        return $this->db->get("log");
    }
    public function getData($id)
    {
        $this->db->where("ID", $id);
        return $this->db->getOne("log");
    }
    public function addData($data)
    {
        return $this->db->insert("log", $data);
    }
    public function updateData($data, $id)
    {
        $this->db->where("ID", $id);
        return $this->db->update("log", $data);
    }
    public function deleteData($id)
    {
        $this->db->where("ID", $id);
        return $this->db->delete("log");
    }
    public function getWhereConditions($where = [])
    {
        foreach ($where as $key => $value) {
            $this->db->where($key, $value);
        }
        return $this->db->get("log");
    }
    public function rawQuery($query){
        return $this->db->rawQuery($query);
    }
}
