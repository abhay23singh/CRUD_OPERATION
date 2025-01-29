<?php
include 'connect.php';
$id = $_GET['deleteid'];
// echo $id;
$sql = "delete from `crudopt` where id = $id";
$result = mysqli_query($conn, $sql);
if($result){
    header('location:read.php');
    }
    else{
        die(mysqli_error($conn));
    }
?>