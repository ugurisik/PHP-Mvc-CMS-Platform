<?php
class siteSettings extends model
{
    public function addData($data)
    {
        return $this->db->insert("settings", $data);
    }
    public function getAll()
    {
        return $this->db->get("settings");
    }
    public function getData($id)
    {
        $this->db->where("id", $id);
        return $this->db->getOne("settings");
    }
    public function getWhereConditions($where = [])
    {
        foreach ($where as $key => $value) {
            $this->db->where($key, $value);
        }
        return $this->db->get("settings");
    }
    public function updateData($data, $langID)
    {
        $this->db->where("langID", $langID);
        return $this->db->update("settings", $data);
    }
    public function deleteData($langid)
    {
        $this->db->where("langID", $langid);
        return $this->db->delete("settings");
    }
    public function rawQuery($query){
        return $this->db->rawQuery($query);
    }
}
