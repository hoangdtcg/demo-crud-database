<?php


class DBConnect
{
    //data source name

    public $dsn;
    public $username;
    public $password;
    public function __construct()
    {
        $this->dsn = "mysql:host=localhost;dbname=db_shop;charset=utf8";
        $this->username = "root";
        $this->password = "root";
    }

    public function connect()
    {
        try{
            $conn = new PDO($this->dsn,$this->username,$this->password);
            return $conn;
        }catch (PDOException $e){
            echo $e->getMessage();
            die();
        }
    }
}

//$dbConnect = new DBConnect();


