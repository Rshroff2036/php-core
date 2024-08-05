<?php 
$conn = new mysqli('localhost','root','','rahul',3307);
?>

<?php

$cId = $_REQUEST['c_id'];//1 2

$select = "select * from state where country_id_fk=$cId";

$run = $conn->query($select);


while($fetch = $run->fetch_object())
{?>
<option>--select state--</option>
    <option value="<?php echo $fetch->state_id?>">
        <?php echo $fetch->state_name?>
    </option>
<?php } ?>