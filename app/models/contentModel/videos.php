<?php
class videos extends model
{
    public function getAll()
    {
		return $this->db->get("videos");
    }
    public function getData($id){
        $this->db->where("ID",$id);
        return $this->db->getOne("videos");
    }
    public function addData($data){
        return $this->db->insert("videos",$data);
    }
    public function updateData($data,$id){
        $this->db->where("ID",$id);
        return $this->db->update("videos",$data);
    }
    public function deleteData($id){
        $this->db->where("ID",$id);
       return $this->db->delete("videos");
    }
    public function getWhereConditions($where = [])
    {
        foreach ($where as $key => $value) {
            $this->db->where($key, $value);
        }
        return $this->db->get("videos");
    }
    public function rawQuery($query){
        return $this->db->rawQuery($query);
    }
}