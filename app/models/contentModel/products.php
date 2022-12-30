<?php
class products extends model
{
    public function getAll()
    {
        $this->db->where("is_deleted", "0");
        return $this->db->get("products");
    }
    public function getData($id)
    {
        $this->db->where("ID", $id);
        return $this->db->getOne("products");
    }
    public function addData($data)
    {
        return $this->db->insert("products", $data);
    }
    public function updateData($data, $id)
    {
        $this->db->where("ID", $id);
        return $this->db->update("products", $data);
    }
    public function deleteData($id)
    {
        $this->db->where("ID", $id);
        return $this->db->delete("products");
    }
    public function getWhereConditions($where = [])
    {
        foreach ($where as $key => $value) {
            $this->db->where($key, $value);
        }
        return $this->db->get("products");
    }
    public function getDataSlug($slug, $langID)
    {
        return $this->db->rawQuery('SELECT * FROM imer_products WHERE JSON_EXTRACT(slug, "$.' . $langID . '") = ?', [$slug]);
    }
    public function getDataWSearchQuery($query)
    {
        // SQL INJECTION OLABİLİR
        return $this->db->rawQuery("SELECT * FROM imer_products WHERE title LIKE '%$query%' or content LIKE '%$query%' or slug LIKE '%$query%' or summary LIKE '%$query%' or keywords LIKE '%$query%' or properties LIKE '%$query%' and is_deleted = 0 and status = 1");
    }
    public function rawQuery($query){
        return $this->db->rawQuery($query);
    }
}
