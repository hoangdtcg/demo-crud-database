<?php
include_once 'Student.php';
//include_once 'Data.php';
include_once 'core/BaseModel.php';
//$result = Data::loadData();
$base = new BaseModel();
//$result = $base->getAllCustomer();
var_dump($_REQUEST['id']);
if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $student = $base->getEmployeeById($id);
//    var_dump($student);
//    die();
}

?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Add Student</title>
    </head>
    <body>
    <form method="post">
        <input type="text" name="id" placeholder="Input Id" value="<?php echo $student->firstName?>">
        <input type="text" name="name" placeholder="Input Name"  value="<?php echo $student->email?>">
        <button type="submit">Add</button>
    </form>
    </body>
    </html>
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_REQUEST['id'];
    $name = $_REQUEST['name'];
    $student = new Student($id, $name);
    Data::editStudentById($id,$student);
    header('location:../index.php');
}