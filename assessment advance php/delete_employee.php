<?php
include 'db.php';

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $sql = "DELETE FROM employee WHERE id=$id";

  if ($conn->query($sql) === TRUE) {
    header('Location: view_employees.php');
    exit();
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
?>
