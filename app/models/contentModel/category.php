<?php
class category extends model
{
    public function getAll($type)
    {
        $this->db->where("type", $type);
        return $this->db->get("categories");
    }
    public function getData($id)
    {
        $this->db->where("ID", $id);
        return $this->db->getOne("categories");
    }
    public function addData($data)
    {
        return $this->db->insert("categories", $data);
    }
    public function updateData($data, $id)
    {
        $this->db->where("ID", $id);
        return $this->db->update("categories", $data);
    }
    public function deleteData($id)
    {
        $this->db->where("ID", $id);
        return $this->db->delete("categories");
    }
    public function getWhereConditions($where = [])
    {
        foreach ($where as $key => $value) {
            $this->db->where($key, $value);
        }
        return $this->db->get("categories");
    }
    public function getDataSlug($slug,$langID)
    {
        return $this->db->rawQuery('SELECT * FROM imer_categories WHERE JSON_EXTRACT(slug, "$.' . $langID . '") = ?', [$slug]);
    }
    public function rawQuery($query){
        return $this->db->rawQuery($query);
    }
}
