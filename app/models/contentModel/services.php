<?php
class services extends model
{
    public function getAll()
    {
        $this->db->where("is_deleted", "0");
        return $this->db->get("services");
    }
    public function getData($id)
    {
        $this->db->where("ID", $id);
        return $this->db->getOne("services");
    }
    public function addData($data)
    {
        return $this->db->insert("services", $data);
    }
    public function updateData($data, $id)
    {
        $this->db->where("ID", $id);
        return $this->db->update("services", $data);
    }
    public function deleteData($id)
    {
        $this->db->where("ID", $id);
        return $this->db->delete("services");
    }
    public function getWhereConditions($where = [])
    {
        foreach ($where as $key => $value) {
            $this->db->where($key, $value);
        }
        return $this->db->get("services");
    }
    public function getDataSlug($slug, $langID)
    {
        return $this->db->rawQuery('SELECT * FROM imer_services WHERE JSON_EXTRACT(slug, "$.' . $langID . '") = ?', [$slug]);
    }
    public function rawQuery($query){
        return $this->db->rawQuery($query);
    }
}
