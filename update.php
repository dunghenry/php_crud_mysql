<?php
include 'connect.php';
$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE id='$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['password'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $name = str_replace(' ', '', $name);
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $password = $_POST['password'];
  $sql = "update `users` set name='$name', email='$email',mobile='$mobile', password='$password' WHERE id=$id";
  $rs = mysqli_query($conn, $sql);
  if ($rs) {
    // echo "Update user successfully";
    header('location:display.php');
  } else {
    die(mysqli_error($conn));
  }
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PHP_MYSQL_UPDATE</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
  <div class="container my-5">
    <h1>Update User</h1>
    <form method="post">
      <div class="mb-3">
        <label class="form-label">Name : </label>
        <input type="text" name="name" value=<?php echo $name ?> class="form-control" placeholder="Enter your name" autocomplete="off">
      </div>
      <div class="mb-3">
        <label class="form-label">Email: </label>
        <input type="email" name="email" value=<?php echo $email ?> class="form-control" placeholder="Enter your email address" autocomplete="off">
      </div>
      <div class="mb-3">
        <label class="form-label">Phone: </label>
        <input type="text" name="mobile" value=<?php echo $mobile ?> class="form-control" placeholder="Enter your phone number" autocomplete="off">
      </div>
      <div class="mb-3">
        <label class="form-label">Password: </label>
        <input type="text" id="password" name="password" value=<?php echo $password ?> class="form-control" placeholder="Enter your password" autocomplete="off">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>