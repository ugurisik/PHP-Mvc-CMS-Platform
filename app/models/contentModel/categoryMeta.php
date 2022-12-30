<?php
class categoryMeta extends model
{
    public function addData($data)
    {
        return $this->db->insert("categories_meta", $data);
    }
    public function deleteData($id, $type)
    {
        $this->db->where("content_id", $id);
        $this->db->where("type", $type);
        return $this->db->delete("categories_meta");
    }
    public function getWhereConditions($where = [])
    {
        foreach ($where as $key => $value) {
            $this->db->where($key, $value);
        }
        return $this->db->get("categories_meta");
    }
    public function rawQuery($query){
        return $this->db->rawQuery($query);
    }
}
