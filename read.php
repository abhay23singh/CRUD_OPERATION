<?php
include 'connect.php';


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Display Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container my-5">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">SL No </th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
  <?php

  //select querry

  $sql = "select * from `crudopt`";
  $result = mysqli_query($conn, $sql);
  while($row=mysqli_fetch_assoc($result)){
    $id = $row['id'];
    $fname = $row['fname'];
    $lname = $row['lname'];
    $email = $row['email'];
    $mobile = $row['mobile'];
  echo '<tr>
      <th scope="row">'.$id.'</th>
      <td>'.$fname.'</td>
     <td>'.$lname.'</td>
     <td>'.$email.'</td>
      <td>'.$mobile.'</td>
        <td>
    <a href="update.php?updateid='.$id.'" class="btn btn-dark">Update</a>
    <a href="delete.php?deleteid='.$id.'" class="btn btn-danger">Delete</a>
  </td>
    </tr>';
    
  }
  ?>



  </tbody>
</table>

    </div>  
</body>
</html>