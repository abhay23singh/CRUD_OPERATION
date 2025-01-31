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


  <div class="container my-5 d-flex justify-content-center">
    <form method="post" class="p-4 bg-light shadow-lg rounded-4 w-50">
        <h2 class="text-center text-primary fw-bold mb-4">User Registration</h2>

        <div class="mb-3">
            <label class="form-label fw-semibold">First Name</label>
            <input type="text" class="form-control rounded-pill px-3" 
                placeholder="Enter your First Name" name="fname" autocomplete="off">
        </div>

        <div class="mb-3">
            <label class="form-label fw-semibold">Last Name</label>
            <input type="text" class="form-control rounded-pill px-3" 
                placeholder="Enter your Last Name" name="lname" autocomplete="off">
        </div>

        <div class="mb-3">
            <label class="form-label fw-semibold">Email</label>
            <input type="mail" class="form-control rounded-pill px-3" 
                placeholder="Enter your Email" name="email" autocomplete="off">
        </div>

        <div class="mb-3">
            <label class="form-label fw-semibold">Mobile</label>
            <input type="mobile" class="form-control rounded-pill px-3" 
                placeholder="Enter your Mobile No" name="mobile" autocomplete="off">
        </div>

        <button class="btn btn-dark btn-lg w-100 rounded-pill mt-3 shadow-sm" name="submit">
            🚀 Submit
        </button>
    </form>
</div>



  </body>
</html>