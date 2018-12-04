<?php
include("header.php");
include("sidebar.php");

   if(isset($_POST['btn'])){
	   
	  $foodname1=$_POST['foodname1']; 
	  $price1=$_POST['price1'];
	  $desc1=$_POST['desc1'];
	  
	   
	 if(isset($_FILES['img'])){
	  $img=$_FILES['img']['name'];
      $upload1="special_food_img/";	  
	  $img1=$upload1.basename($_FILES['img']['name']);
	  move_uploaded_file($_FILES['img']['tmp_name'],$img1);}
	   
	    
	   $display=mysqli_query($con,"insert into `delifood` values('','$img','$foodname1','$price1','$desc1',now())") or die (mysqli_error());	   
	   
	   
	   if($display){
		   
		   echo "<script>
		   alert('Food Add');
		   window.location='add_deli_food.php';
		   </script>";
		   
		   }else{
			    echo "<script>
		   alert('Food Not Add');
		   </script>";
			   }
	   
	   
	   
	   
	   }


?>

<div class="col-md-9" align="center">
<h2 align="center" id="wl">Add Delicious Food</h2><br>
<form method="post" enctype="multipart/form-data">
<table width="500" border="0" class="addspec">
  <tr>
    <td><h4>Image</h4></td>
    <td><input type="file" name="img" class="form-control" accept="image/*"></td>
  </tr>
  <tr>
    <td><h4>Food Name</h4></td>
    <td><input type="text" name="foodname1" class="form-control" required placeholder="Food Name"></td>
  </tr>
  <tr>
    <td><h4>Prices</h4></td>
    <td><input type="text" name="price1" class="form-control" required placeholder="Price"></td>
  </tr>
  <tr>
    <td><h4>Description</h4></td>
    <td><input type="text" name="desc1" class="form-control" required placeholder="Description"></td>
  </tr>
  <tr>
    <td></td>
    <td><input type="submit" name="btn" class="btn btn-default btn_c" value="Add Delicious Food"></td>
  </tr>
</table>
</form>

</div>

</div><!--close container-->

<br>



<?php
include("footer.php");

?>
