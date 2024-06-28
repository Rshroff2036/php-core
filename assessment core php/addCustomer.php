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
               <form action="" method="post">
                <br><br><br><br><br>
                <table align="center">
                <tr>
                    <td>Customer name: <input type="text" name="cname" required></td>
                </tr>
                <tr>
                    <td>Account number: <input type="text" name="acnum" required ></td>
                </tr>
                <tr>
                    <td>Initial balance: <input type="text" name="bal" required></td>
                </tr>
                <tr>
                    <td><button type="submit" name="Add">Add</button></td>
                </tr>
                <tr>
                    <td><button><a href="banker.php">Go back</a></button></td>
                </tr>
                </table>
                </form>
 
</body>
</html>