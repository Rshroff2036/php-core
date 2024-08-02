<?php
include 'db.php';

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $result = $conn->query("SELECT * FROM employee WHERE id=$id");
  $employee = $result->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $id = $_POST['id'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $address = $_POST['address'];
  $gender = $_POST['gender'];

  $sql = "UPDATE employee SET name='$name', email='$email', mobile='$mobile', address='$address', gender='$gender' WHERE id=$id";

  if ($conn->query($sql) === TRUE) {
    header('Location: view_employees.php');
    exit();
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <title>Edit Employee</title>
</head>
<body>
  <div class="container">
    <h1 class="my-4">Edit Employee</h1>
    <form action="edit_employee.php" method="POST">
      <input type="hidden" name="id" value="<?php echo $employee['id']; ?>">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name" value="<?php echo $employee['name']; ?>" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" value="<?php echo $employee['email']; ?>" required>
      </div>
      <div class="form-group">
        <label for="mobile">Mobile:</label>
        <input type="text" class="form-control" id="mobile" name="mobile" value="<?php echo $employee['mobile']; ?>" required>
      </div>
      <div class="form-group">
        <label for="address">Address:</label>
        <textarea class="form-control" id="address" name="address" required><?php echo $employee['address']; ?></textarea>
      </div>
      <div class="form-group">
        <label for="gender">Gender:</label>
        <select class="form-control" id="gender" name="gender" required>
          <option value="male" <?php if ($employee['gender'] === 'male') echo 'selected'; ?>>Male</option>
          <option value="female" <?php if ($employee['gender'] === 'female') echo 'selected'; ?>>Female</option>
          <option value="other" <?php if ($employee['gender'] === 'other') echo 'selected'; ?>>Other</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Update Employee</button>
    </form>
  </div>
</body>
</html>
