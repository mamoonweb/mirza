

<div class="container">

<div class="col-md-3 col-sm-4 sidebar">
<?php 
$loop=mysqli_query($con,"select * from admin");
while ($row=mysqli_fetch_array($loop)){
   $image=$row['image'];
?>

<?php }?>
<h3>
<?php
    	if(isset($_SESSION['admin'])){
			echo $_SESSION['admin'];
			}else{
				echo "<script>
				document.location='index.php';
				</script>";
				}
     
	
	
	?>
</h3>

<ul class="list-unstyled">
<li><a href="add_special_food.php">Add Special Food</a></li>
<li><a href="add_deli_food.php">Add Delicious</a></li>
<li><a href="view_special_food.php">Veiw Special Food</a></li>
<li><a href="view_deli_food.php">Veiw Deli Food</a></li>
<li><a href="booking.php">Check Booking</a></li>
<li><a href="c_order.php">C-order</a></li>
<li><a href="../index.php" target="_blank">Go Website</a></li>
</ul>
</div>
