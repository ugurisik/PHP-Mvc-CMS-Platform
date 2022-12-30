<?php
class page extends model
{
    public function getAll()
    {
        $this->db->where("is_deleted", "0");
        return $this->db->get("pages");
    }
    public function getData($id)
    {
        $this->db->where("ID", $id);
        return $this->db->getOne("pages");
    }
    public function addData($data)
    {
        return $this->db->insert("pages", $data);
    }
    public function updateData($data, $id)
    {
        $this->db->where("ID", $id);
        return $this->db->update("pages", $data);
    }
    public function deleteData($id)
    {
        $this->db->where("ID", $id);
        return $this->db->delete("pages");
    }
    public function getDataSlug($slug, $langID)
    {
        return $this->db->rawQuery('SELECT * FROM imer_pages WHERE JSON_EXTRACT(slug, "$.' . $langID . '") = ?', [$slug]);
    }
    public function getWhereConditions($where = [])
    {
        foreach ($where as $key => $value) {
            $this->db->where($key, $value);
        }
        return $this->db->get("pages");
    }
    public function rawQuery($query){
        return $this->db->rawQuery($query);
    }
}
