<script>
alert('Are You Sure');
</script>
<?php
include("config.php");

if(isset($_REQUEST['id'])){

$id=$_REQUEST['id'];

mysqli_query($con,"delete from `specialfood` where id='$id'") or die (mysqli_error());

}


?>

<script>
document.location='view_special_food.php';
</script>

