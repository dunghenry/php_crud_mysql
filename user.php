<?php
  include 'connect.php';
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $sql = "insert into `users` (name,email,mobile,password) values('$name','$email','$mobile','$password')";
    $rs = mysqli_query($conn, $sql);
    if($rs){
      echo "Create user successfully";
    }
    else{
      echo "Create user failed";
      die(mysqli_error($conn));
    }
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP_MySQL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <div class="container my-5">
    <form method="post">
      <div class="mb-3">
        <label class="form-label">Name : </label>
        <input type="text" name="name" class="form-control" placeholder="Enter your name" autocomplete="off">
      </div>
      <div class="mb-3">
        <label class="form-label">Email: </label>
        <input type="email" name="email" class="form-control" placeholder="Enter your email address" autocomplete="off">
      </div>
      <div class="mb-3">
        <label class="form-label">Phone: </label>
        <input type="text" name="phone" class="form-control" placeholder="Enter your phone number" autocomplete="off">
      </div>
      <div class="mb-3">
        <label class="form-label">Password: </label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" autocomplete="off">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form> 
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>