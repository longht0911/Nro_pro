<?php
require_once 'database.php';
class DB{
    public $conn;
    function __construct()
    {
        $this->connect();
    }
    function connect()
    {
        $this->conn=new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        if($this->conn->connect_error)
        {
            die("Error".$this->conn->connect_error);
        }
        else
        {
            echo "Connection Successful";
        }
    }

}


?>