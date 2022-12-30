<?php
class siteSettings extends model
{
    public function add($data)
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
    public function getSettingsWLang($id)
    {
        $this->db->where("langID", $id);
        return $this->db->getOne("settings");
    }
    public function update($data, $id)
    {
        $this->db->where("id", $id);
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
