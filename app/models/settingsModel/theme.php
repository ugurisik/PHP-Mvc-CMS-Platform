<?php
class themeModel extends model
{
    public function getAll()
    {
        $this->db->where("is_deleted", "0");
        return $this->db->get("themes");
    }
    public function getData($id)
    {
        $this->db->where("ID", $id);
        return $this->db->getOne("themes");
    }
    public function addData($data)
    {
        return $this->db->insert("themes", $data);
    }
    public function updateData($data, $id)
    {
        $this->db->where("ID", $id);
        return $this->db->update("themes", $data);
    }
    public function deleteData($id)
    {
        $this->db->where("ID", $id);
        return $this->db->delete("themes");
    }
    public function getWhereConditions($where = [])
    {
        foreach ($where as $key => $value) {
            $this->db->where($key, $value);
        }
        return $this->db->get("themes");
    }
    public function rawQuery($query){
        return $this->db->rawQuery($query);
    }
}
