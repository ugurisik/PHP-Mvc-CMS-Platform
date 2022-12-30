<?php
class blogs extends model
{
    public function getAll()
    {
        $this->db->where("is_deleted", "0");
        return $this->db->get("blogs");
    }
    public function getData($id)
    {
        $this->db->where("ID", $id);
        return $this->db->getOne("blogs");
    }
    public function addData($data)
    {
        return $this->db->insert("blogs", $data);
    }
    public function getWhereConditions($where = [])
    {
        foreach ($where as $key => $value) {
            $this->db->where($key, $value);
        }
        return $this->db->get("blogs");
    }
    public function updateData($data, $id)
    {
        $this->db->where("ID", $id);
        return $this->db->update("blogs", $data);
    }
    public function deleteData($id)
    {
        $this->db->where("ID", $id);
        return $this->db->delete("blogs");
    }
    public function getDataSlug($slug, $langID)
    {
        return $this->db->rawQuery('SELECT * FROM imer_blogs WHERE JSON_EXTRACT(slug, "$.' . $langID . '") = ?', [$slug]);
    }
    public function rawQuery($query){
        return $this->db->rawQuery($query);
    }
}
