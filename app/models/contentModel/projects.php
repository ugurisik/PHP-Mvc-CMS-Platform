<?php
class projects extends model
{
    public function getAll()
    {
        $this->db->where("is_deleted", "0");
        return $this->db->get("projects");
    }
    public function getData($id)
    {
        $this->db->where("ID", $id);
        return $this->db->getOne("projects");
    }
    public function addData($data)
    {
        return $this->db->insert("projects", $data);
    }
    public function updateData($data, $id)
    {
        $this->db->where("ID", $id);
        return $this->db->update("projects", $data);
    }
    public function deleteData($id)
    {
        $this->db->where("ID", $id);
        return $this->db->delete("projects");
    }
    public function getWhereConditions($where = [])
    {
        foreach ($where as $key => $value) {
            $this->db->where($key, $value);
        }
        return $this->db->get("projects");
    }
    public function getDataSlug($slug, $langID)
    {
        return $this->db->rawQuery('SELECT * FROM imer_projects WHERE JSON_EXTRACT(slug, "$.' . $langID . '") = ?', [$slug]);
    }
    public function rawQuery($query){
        return $this->db->rawQuery($query);
    }
}
