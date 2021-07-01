<?php
include_once 'Data.php';
include_once 'Student.php';
include_once 'core/BaseModel.php';
//$result = Data::loadData();
$base = new BaseModel();
$result = $base->getAllCustomer();
//echo "<pre>";
//print_r($result);
//die();
if(isset($_REQUEST['page'])){
    if ($_REQUEST['page'] == 'delete'){
        $id = $_REQUEST['id'];
//        array_splice($result,$id,1);
//        Data::saveData($result);
        $base->deleteCustomer($id);
        header("location:index.php");
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="add-student.php">Add</a>
<table border="1px">
    <tr>
        <th>ID</th>
        <th>Name</th>
    </tr>
    <?php foreach ($result as $key => $student): ?>
        <tr>
            <td><?php echo $student->firstName ?></td>
            <td><?php echo $student->email ?></td>
            <td><a href="index.php?page=delete&id=<?php echo $student->employeeNumber ?>">Delete</a></td>
            <td><a href="edit-student.php?id=<?php echo $student->employeeNumber?>">Edit</a></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
