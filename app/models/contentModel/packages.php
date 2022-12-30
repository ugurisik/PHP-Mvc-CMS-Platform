<?php
class packages extends model
{
    public function getAll()
    {
        $this->db->where("is_deleted", "0");
        return $this->db->get("packages");
    }
    public function getData($id)
    {
        $this->db->where("ID", $id);
        return $this->db->getOne("packages");
    }
    public function addData($data)
    {
        return $this->db->insert("packages", $data);
    }
    public function updateData($data, $id)
    {
        $this->db->where("ID", $id);
        return $this->db->update("packages", $data);
    }
    public function deleteData($id)
    {
        $this->db->where("ID", $id);
        return $this->db->delete("packages");
    }
    public function getWhereConditions($where = [])
    {
        foreach ($where as $key => $value) {
            $this->db->where($key, $value);
        }
        return $this->db->get("packages");
    }
    public function getDataSlug($slug,$langID)
    {
        return $this->db->rawQuery('SELECT * FROM imer_packages WHERE JSON_EXTRACT(slug, "$.' . $langID . '") = ?', [$slug]);
    }
    public function rawQuery($query){
        return $this->db->rawQuery($query);
    }
}
