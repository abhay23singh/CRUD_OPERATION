<?php
include 'connect.php';
$id = $_GET['updateid'];
$sql = "select * from `crudopt` where id=$id";
$result = mysqli_query($conn, $sql); 


// $sql = "Select * from `crudopt` where id=$id";
// $result = mysqli_query($conn, $sql);
 $row = mysqli_fetch_assoc($result);
 
$fname = $row['fname'];
$lname = $row['lname'];
$email = $row['email'];
$mobile = $row['mobile'];
if(isset($_POST['update'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    $sql = "update `crudopt` set fname='$fname', lname='$lname', email='$email', mobile='$mobile' where id=$id";
    $result = mysqli_query($conn, $sql);
    if($result){
        header('location:read.php');
    }else{
        die(mysqli_error($conn));
    }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" >
  </head>
  <body>
    <div class="container my-5">
    <form method="post">
    <form>
        <div class="mb-3">
         <label>First Name</label>
         <input type="text" class="form-control" name="fname" autocomplete="off">
        </div>
        <div class="mb-3">
         <label>Last Name</label>
         <input type="text" class="form-control" name="lname" autocomplete="off">
        </div>
        <div class="mb-3">
         <label>Email</label>
         <input type="email" class="form-control" name="email" autocomplete="off">
        </div>
        <div class="mb-3">
         <label>Mobile</label>
         <input type="text" class="form-control" name="mobile" autocomplete="off">
        </div>

  <button type="submit" class="btn btn-dark btn-lg"  name="update">Update</button>

</form>
</from>
</body>
</html>