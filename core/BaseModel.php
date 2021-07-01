<?php

include_once 'DBConnect.php';
class BaseModel
{
    public $dbConnect;
    public function __construct()
    {
        $this->dbConnect = new DBConnect();
    }

    public function getAllCustomer()
    {
        $sql = "SELECT * FROM employees where actived = 1";
        $stmt = $this->dbConnect->connect()->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $stmt->execute();
        $arr = $stmt->fetchAll();
//        echo "<pre>";
        return $arr;
    }

    public function deleteCustomer($id)
    {
        $sql = "UPDATE `employees` SET `actived`= 0 where employeeNumber = $id";
        $stmt = $this->dbConnect->connect()->query($sql);
        $stmt->execute();
    }

    public function getEmployeeById($id)
    {
        $sql = "SELECT * FROM employees where employeeNumber=".$id;
        $stmt = $this->dbConnect->connect()->query($sql);
//        $stmt->bindParam(1, $id);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $stmt->execute();
        $e = $stmt->fetch();
//        echo "<pre>";
        return $e;
    }

    public function updateById($id)
    {

    }
}