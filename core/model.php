<?php
class model
{
    public $db;
    public function __construct()
    {
        $this->db = new MysqliDb(
            array(
                'host' =>       DB_HOST,
                'username' =>   DB_USERNAME,
                'password' =>   DB_PASSWORD,
                'db' =>          DB_NAME,
                'port' =>       DB_PORT,
                'prefix' =>     DB_PREFIX,
                'charset' =>    'utf8'
            )
        );
    }
}
