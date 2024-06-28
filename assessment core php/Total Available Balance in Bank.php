
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BANKER LOGIN</title>
    <link rel="stylesheet" href="CSS/s1.css">
</head>
<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $con = mysqli_connect($servername, $username, $password, 'rahul',3007);
    ?>

   <div align="center"><h2><u>welcome to bankmanagement system </u></h2></div>
                <form action="" method="post">
                <br><br><br><br><br>
    <table class="table" border="2 solid">
  <thead>
    <tr>
      <th scope="col">Total Avl. Balance</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql = "SELECT SUM(Balance) AS total FROM dbms";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);
    $total = $row['total'];
    ?>
    <tr>
    <td><?php echo $total;?></td>
    </tr>
   </tbody>
</table>
    <tr>
        <td><button><a href="Banker.php">Go Back</a></button></td>
    </tr>
</body>
</html>