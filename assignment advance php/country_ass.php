<?php 
$conn = new mysqli('localhost','root','','rahul',3307);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</head>
<body>

    <form>
        <select id="country">
        <option>--select country--</option>
            <?php
            $select = "select * from country";
            $run = $conn->query($select);

            while($fetch = $run->fetch_object()){
            
            ?>
            <option value="<?php echo $fetch->country_id ?>"><?php echo $fetch->country_name ?></option>
           <?php }?>
        </select>

        <select id="state">
        <option>--select state--</option>
        </select>

    </form>

    <script>
        $('#country').on('change',function(e){

          country_id =   $(this).val();

        //   console.log(country_id)
          $.ajax({
            url:'state_ass.php',
            type:'post',
            data:{c_id:country_id},
            success:function(res)
            {
                $('#state').html(res)
            }

          })

        })

    </script>
    
</body>
</html>