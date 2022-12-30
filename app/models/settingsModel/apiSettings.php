<?php
class apiSettings extends model
{
    public function getAll()
    {
        return $this->db->get("api_settings");
    }
    public function getData($id)
    {
        $this->db->where("ID", $id);
        return $this->db->getOne("api_settings");
    }
    public function addData($data)
    {
        return $this->db->insert("api_settings", $data);
    }
    public function updateData($data, $id)
    {
        $this->db->where("ID", $id);
        return $this->db->update("api_settings", $data);
    }
    public function deleteData($id)
    {
        $this->db->where("ID", $id);
        return $this->db->delete("api_settings");
    }
    public function rawQuery($query){
        return $this->db->rawQuery($query);
    }
}
