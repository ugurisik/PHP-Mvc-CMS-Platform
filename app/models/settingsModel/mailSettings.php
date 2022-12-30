<?php
class mailSettings extends model
{
    public function getData()
    {
        return $this->db->getOne("mailsetting");
    }
    public function updateData($data)
    {
        $this->db->where("id", 1);
        return $this->db->update("mailsetting", $data);
    }
    public function getWhereConditions($where = [])
    {
        foreach ($where as $key => $value) {
            $this->db->where($key, $value);
        }
        return $this->db->get("mailsetting");
    }
    public function rawQuery($query){
        return $this->db->rawQuery($query);
    }
}
