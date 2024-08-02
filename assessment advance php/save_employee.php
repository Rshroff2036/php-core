<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $address = $_POST['address'];
  $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
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
