<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Search Data </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" >

</head>
<body>
    <?php
    $data=$_GET['data'];
    // echo $data;
    $sql = "select * from `crudopt` where id=$data";
    $result = mysqli_query($conn, $sql);
    if($result){
        $row=mysqli_fetch_assoc($result);
        echo '<div class="container mt-4">
    <div class="jumbotron bg-light shadow-lg rounded p-4 text-center">
        <h1 class="display-4 fw-bold text-success">'.$row['fname'].'</h1>
        <p class="lead text-danger fst-italic">Your email ID is: '.$row['email'].'</p>
        <hr class="my-4 border border-success">
        <p class="lead">
            <a class="btn btn-primary btn-lg rounded-pill px-4 shadow-sm" href="search.php" role="button">⬅ Back</a>
        </p>
    </div>
</div>
';
    }
    ?>
    
</body>
</html>