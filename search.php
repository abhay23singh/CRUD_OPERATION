<?php
include'connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" >

    <title>Search Data</title>
</head>
<body>
    <div class="container my-5">
    <form method="post" class="d-flex align-items-center gap-2 p-3 bg-light shadow-sm rounded">
    <input type="text" name="search" class="form-control rounded-pill px-3" 
        placeholder="Search Data">
    <button class="btn btn-dark btn-sm rounded-pill px-3" name="submit">
        🔍 Search
    </button>
</form>

        <div class="container my-5">
            <table class="table">
                <?php
                if(isset($_POST['submit'])){
                    $search = $_POST['search'];
                    $sql="select * from `crudopt` where id like '%$search%' or
                     fname like '%$search%' or lname like '%$search%'";
                    $result = mysqli_query($conn, $sql);
                    if($result){
                        if(mysqli_num_rows($result)>0){
                            echo '<thead>
                            <tr>
                            <th>id</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            </tr>
                            </thead>';
                            while($row = mysqli_fetch_assoc($result)){
                                echo '<tbody>
                                <tr>
                                <td><a href="searchdata.php?data='.$row['id'].'">'.$row['id'].'</a></td>
                                <td>'.$row['fname'].'</td>
                                <td>'.$row['lname'].'</td>
                                </tr>
                                </tbody>';
                            }
                        }
                        else{
                            echo '<h2 class=text-danger>No Data Found</h2>';
                        }
                    }
                }
                ?>
            </table>
        </div>
    </div>
</body>
</html>