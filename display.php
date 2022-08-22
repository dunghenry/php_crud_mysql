<?php include 'connect.php';?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP_MYSQL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <div class="container my-5">
        <button class="btn btn-primary">
            <a href="user.php" class="text-light text-decoration-none">Add User</a>
        </button>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Sl no</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Mobile</th>
                <th scope="col">Password</th>
                <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
               <?php
               $sql = "SELECT * FROM users";
               $result = mysqli_query($conn, $sql);
               if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                  $id = $row['id'];
                  $name = $row['name'];
                  $email = $row['email'];
                  $mobile = $row['mobile'];
                  $password = $row['password'];
                echo '<tr>
                <th scope="row">'.$id.'</th>
                <td>'.$name.'</td>
                <td>'.$email.'</td>
                <td>'.$mobile.'</td>
                <td>'.$password.'</td>
                <td>
                    <button class="btn btn-primary"><a href="update.php?id='.$id.'" class="text-light text-decoration-none">Edit</a></button>&nbsp;&nbsp;&nbsp;
                    <button class="btn btn-danger"><a href="delete.php?id='.$id.'" class="text-light text-decoration-none">Delete</a></button>
                </td>
               </tr>';
                }
              } else {
                echo "0 results";
              }
                    
               ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>