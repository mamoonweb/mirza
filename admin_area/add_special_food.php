<?php
include("header.php");
include("sidebar.php");

   if(isset($_POST['btn'])){
	   
	  $foodname=$_POST['foodname']; 
	  $price=$_POST['price'];
	  $desc=$_POST['desc'];
	  
	   
	 if(isset($_FILES['img'])){
	  $img=$_FILES['img']['name'];
      $upload1="special_food_img/";	  
	  $img1=$upload1.basename($_FILES['img']['name']);
	  move_uploaded_file($_FILES['img']['tmp_name'],$img1);}
	   
	    
	   $display=mysqli_query($con,"insert into `specialfood` values('','$img','$foodname','$price','$desc',now())") or die (mysqli_error());	   
	   
	   
	   if($display){
		   
		   echo "<script>
		   alert('Food Add');
		   window.location='add_special_food.php';
		   </script>";
		   
		   }else{
			    echo "<script>
		   alert('Food Not Add');
		   </script>";
			   }
	   
	   
	   
	   
	   }


?>

<div class="col-md-9" align="center">
<h2 align="center" id="wl">Add Special Food</h2><br>
<form method="post" enctype="multipart/form-data">
<table width="500" border="0" class="addspec">
  <tr>
    <td><h4>Image</h4></td>
    <td><input type="file" name="img" class="form-control"></td>
  </tr>
  <tr>
    <td><h4>Food Name</h4></td>
    <td><input type="text" name="foodname" class="form-control" required placeholder="Food Name"></td>
  </tr>
  <tr>
    <td><h4>Prices</h4></td>
    <td><input type="text" name="price" class="form-control" required placeholder="Price"></td>
  </tr>
  <tr>
    <td><h4>Description</h4></td>
    <td><input type="text" name="desc" class="form-control" required placeholder="Description"></td>
  </tr>
  <tr>
    <td></td>
    <td><input type="submit" name="btn" class="btn btn-default btn_c" value="Add Special Food"></td>
  </tr>
</table>
</form>

</div>

</div><!--close container-->

<br>



<?php
include("footer.php");

?>
