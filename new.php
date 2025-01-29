<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    //insert querry

    $sql = "insert into `crudopt`(fname, lname, email, mobile) 
    values ('$fname','$lname','$email','$mobile')";

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
    <title>PHP Crud Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" >
  </head>
  <body>


    <div class="container my-5">
      <form method="post">
      <div class="mb-3">
          <label class="form-label">First Name</label>
            <input type="text" class="form-control" 
            placeholder="Enter your First Name" name="fname" autocomplete="off">
      </div>
      <div class="mb-3">
          <label class="form-label">Last Name</label>
            <input type="text" class="form-control" 
            placeholder="Enter your Last Name" name="lname" autocomplete="off">
      </div>
      <div class="mb-3">
          <label class="form-label">Email</label>
            <input type="mail" class="form-control" 
            placeholder="Enter your Email" name="email" autocomplete="off">
      </div>
      <div class="mb-3">
          <label class="form-label">Mobile</label>
            <input type="mobile" class="form-control" 
            placeholder="Enter your Mobile No" name="mobile" autocomplete="off">
      </div>
      <button class="btn btn-dark btn-lg my-3"
      name="submit">Submit</button>
      </form>
    </div>


  </body>
</html>