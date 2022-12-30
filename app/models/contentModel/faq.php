<?php
class faq extends model
{
    public function getAll()
    {
        return $this->db->get("faq");
    }
    public function getData($id)
    {
        $this->db->where("ID", $id);
        return $this->db->getOne("faq");
    }
    public function addData($data)
    {
        return $this->db->insert("faq", $data);
    }
    public function updateData($data, $id)
    {
        $this->db->where("ID", $id);
        return $this->db->update("faq", $data);
    }
    public function deleteData($id)
    {
        $this->db->where("ID", $id);
        return $this->db->delete("faq");
    }
    public function getWhereConditions($where = [])
    {
        foreach ($where as $key => $value) {
            $this->db->where($key, $value);
        }
        return $this->db->get("faq");
    }
    public function rawQuery($query){
        return $this->db->rawQuery($query);
    }
}
