<?php require 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <title>Add Employee</title>
</head>
<body>
  <div class="container">
    <h1 class="my-4">Add Employee</h1>
    <form action="save_employee.php" method="POST">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="mobile">Mobile:</label>
        <input type="text" class="form-control" id="mobile" name="mobile" required>
      </div>
      <div class="form-group">
        <label for="address">Address:</label>
        <textarea class="form-control" id="address" name="address" required></textarea>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>
      <div class="form-group">
        <label for="confirm_password">Confirm Password:</label>
        <input type="password" class="form-control" id="confirm_password" required>
      </div>
      <div class="form-group">
        <label for="gender">Gender:</label>
        <select class="form-control" id="gender" name="gender" required>
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="other">Other</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Add Employee</button>
    </form>
  </div>

  <script>
    document.querySelector('form').addEventListener('submit', function(event) {
      var password = document.getElementById('password').value;
      var confirmPassword = document.getElementById('confirm_password').value;
      if (password !== confirmPassword) {
        alert('Passwords do not match.');
        event.preventDefault();
      }
    });
  </script>


<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $address = $_POST['address'];
  $password = $_POST['password'];
  $gender = $_POST['gender'];

  $sql = "INSERT INTO employee (name, email, mobile, address, password, gender) 
          VALUES ('$name', '$email', '$mobile', '$address', '$password', '$gender')";

  if ($conn->query($sql) === TRUE) {
    header('Location: view_employees.php');
    exit();
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
?>


</body>
</html>
