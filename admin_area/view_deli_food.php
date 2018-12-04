<?php


include("header.php");
include("sidebar.php");
?>

<div class="col-md-9" align="center">
<h2 align="center" id="wl">View Deli Food</h2><br>

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
  
  $sql1=mysqli_query($con,"select * from `delifood` ORDER BY id DESC") or die (mysqli_error());
  
 while( $row1=mysqli_fetch_array($sql1)){
  
  
  ?>
  <tr class="table_c">
    <td><?php echo $row1[0];?></td>
    <td><img src="special_food_img/<?php echo $row1[1];?>" width="50"></td>
    <td><?php echo $row1[3];?></td>
    <td><?php echo $row1[2];?></td>
    <td><?php echo $row1[5];?></td>
    <td>
    <a href="delete_deli.php?id=<?php echo $row1[0];?>" class="btn btn-danger btn-sm">Delete</a>
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
