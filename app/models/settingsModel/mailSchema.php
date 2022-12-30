<?php
class mailSchema extends model
{
    public function getAll()
    {
        return $this->db->get("mail_schema");
    }
    public function getData($id)
    {
        $this->db->where("ID", $id);
        return $this->db->getOne("mail_schema");
    }
    public function addData($data)
    {
        return $this->db->insert("mail_schema", $data);
    }
    public function updateData($data, $id)
    {
        $this->db->where("ID", $id);
        return $this->db->update("mail_schema", $data);
    }
    public function getWhereConditions($where = [])
    {
        foreach ($where as $key => $value) {
            $this->db->where($key, $value);
        }
        return $this->db->get("mail_schema");
    }
    public function rawQuery($query){
        return $this->db->rawQuery($query);
    }
}
