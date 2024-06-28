<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BANK LOGIN</title>
</head>
<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password ="";
    $con = mysqli_connect($servername ,$username ,$password ,'rahul',3007);
    ?>
    
    <div align ="center"><h2><u>welcome to bankmanagement system </u></h2></div>
      <br><br><br><br><br>
    <table class="table" border="2 solid">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">A/c Number</th>
      <th scope="col">Avl. Balance</th>
    </tr>
  </thead>
  <tbody>
  <?php
        $view = "select * from dbms";
        $select = mysqli_query($con,$view);
        while($row = mysqli_fetch_assoc($select))
            {
                // echo $row['Name'];
                // echo $row['AcNum'];
                // echo $row['Balance'];
                // echo "<br>";

        ?>
    <tr>
      <th scope="row"><?php echo $row['ID'];?></th>
      <td><?php echo $row['USERNAME'];?></td>
      <td><?php echo $row['ACCOUNTNUM'];?></td>
      <td><?php echo $row['BALANCE'];?></td>
    </tr>
    

    <?php  } ?>
   </tbody>
</table>
    <tr>
        <td><button><a href="Banker.php">Go Back</a></button></td>
    </tr>
        
 
</body>
</html>