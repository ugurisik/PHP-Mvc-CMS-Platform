<?php
class visitors extends model
{
    public function getAll()
    {
        return $this->db->get("visitors");
    }
    public function getData($id)
    {
        $this->db->where("ID", $id);
        return $this->db->getOne("visitors");
    }
    public function addData($data)
    {
        return $this->db->insert("visitors", $data);
    }
    public function updateData($data, $id)
    {
        $this->db->where("ID", $id);
        return $this->db->update("visitors", $data);
    }
    public function deleteData($id)
    {
        $this->db->where("ID", $id);
        return $this->db->delete("visitors");
    }
    public function getWhereConditions($where = [])
    {
        foreach ($where as $key => $value) {
            $this->db->where($key, $value);
        }
        return $this->db->get("visitors");
    }
    public function rawQuery($query){
        return $this->db->rawQuery($query);
    }
    public function getonemonth()
    {
        return $this->db->rawQuery("SELECT * FROM imer_visitors WHERE visit_date < Now() and visit_date > DATE_ADD(Now(), INTERVAL- 1 MONTH);");
    }
    public function getlasttenm()
    {
        return $this->db->rawQuery("SELECT * FROM imer_visitors WHERE DATE_ADD(visit_date, INTERVAL 10 MINUTE) >= NOW();");
    }
    public function getlastvisitors($count)
    {
        return $this->db->rawQuery("SELECT * FROM `imer_visitors` ORDER BY `imer_visitors`.`visit_date` DESC LIMIT " . $count . ";");
    }
    public function gettodayvisitors()
    {
        return $this->db->rawQuery("SELECT * FROM imer_visitors WHERE DATE(visit_date) = CURDATE();");
    }
    public function getlastday()
    {
        return $this->db->rawQuery("SELECT * FROM imer_visitors WHERE DATE(visit_date)= DATE(NOW() - INTERVAL 1 DAY);");
    }
    public function getcurrentyeardatas()
    {
        return $this->db->rawQuery(" select date_format(visit_date,'%M') as month,count(visit_date) as visitcount from imer_visitors where YEAR(visit_date) = YEAR(CURDATE()) group by year(visit_date),month(visit_date) order by year(visit_date),month(visit_date);");
    }
}
