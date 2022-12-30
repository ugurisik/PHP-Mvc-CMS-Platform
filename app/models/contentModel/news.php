<?php
class news extends model
{
    public function getAll()
    {
        $this->db->where("is_deleted", "0");
        return $this->db->get("news");
    }
    public function getData($id)
    {
        $this->db->where("ID", $id);
        return $this->db->getOne("news");
    }
    public function getWhereConditions($where = [])
    {
        foreach ($where as $key => $value) {
            $this->db->where($key, $value);
        }
        return $this->db->get("news");
    }
    public function addData($data)
    {
        return $this->db->insert("news", $data);
    }
    public function updateData($data, $id)
    {
        $this->db->where("ID", $id);
        return $this->db->update("news", $data);
    }
    public function deleteData($id)
    {
        $this->db->where("ID", $id);
        return $this->db->delete("news");
    }
    public function getDataSlug($slug, $langID)
    {
        return $this->db->rawQuery('SELECT * FROM imer_news WHERE JSON_EXTRACT(slug, "$.' . $langID . '") = ?', [$slug]);
    }
    public function rawQuery($query){
        return $this->db->rawQuery($query);
    }
}
