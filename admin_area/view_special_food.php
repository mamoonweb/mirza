<?php


include("header.php");
include("sidebar.php");
?>

<div class="col-md-9" align="center">
<h2 align="center" id="wl">View Special Food</h2><br>

<table width="500" border="0" class="table table-hover ">
  <tr class="table_c">
    <td>Id</td>
    <td>Image</td>
    <td>Food Name</td>
    <td>Price</td>
    <td>Date</td>
    <td>Action</td>
  </tr>
  <?php
  
  $sql=mysqli_query($con,"select * from `specialfood` ORDER BY id DESC") or die (mysqli_error());
  
 while( $row=mysqli_fetch_array($sql)){
  
  
  ?>
  <tr class="table_c">
    <td><?php echo $row[0];?></td>
    <td><img src="special_food_img/<?php echo $row[1];?>" width="50"></td>
    <td><?php echo $row[3];?></td>
    <td><?php echo $row[2];?></td>
    <td><?php echo $row[5];?></td>
    <td>
    <a href="delete.php?id=<?php echo $row[0];?>" class="btn btn-danger btn-sm">Delete</a>
    </td>
    <?php }?>
  </tr>
</table>



</div>

</div><!--close container-->

<br>



<?php
include("footer.php");

?>
