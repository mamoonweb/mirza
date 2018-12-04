<script>
alert('Are You Sure');
</script>
<?php
include("config.php");

if(isset($_REQUEST['id'])){

$id=$_REQUEST['id'];

mysqli_query($con,"delete from `booking` where id='$id'") or die (mysqli_error());

}


?>

<script>
document.location='booking.php';
</script>

