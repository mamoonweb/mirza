<?php


include("header.php");
include("sidebar.php");
?>

<div class="col-md-9" align="center">
<h2 align="center" id="wl">Booking</h2><br>
    <div class="table table-hover table-responsive ">
<table width="500" border="0" class="table table-hover table-responsive ">
  <tr class="table_c">
    <td>Id</td>
    <td>Name</td>
    <td>Email</td>
    <td>Phone</td>
    <td>Address</td>
    <td>Day</td>
    <td>No.Of People</td>
    <td>Timing</td>
    <td>Date</td>
    <td>Action</td>
  </tr>
  <?php
  
  $sql2=mysqli_query($con,"select * from `booking` ORDER BY id DESC") or die (mysqli_error());
  
 while( $row2=mysqli_fetch_array($sql2)){
  
  
  ?>
  <tr class="table_c">
    <td><?php echo $row2[0];?></td>
    <td><?php echo $row2[1];?></td>
    <td><?php echo $row2[2];?></td>
    <td><?php echo $row2[3];?></td>
    <td><?php echo $row2[4];?></td>
    <td><?php echo $row2[5];?></td>
    <td><?php echo $row2[6];?></td>
    <td><?php echo $row2[7];?></td>
    <td><?php echo $row2[8];?></td>
    <td>
    <a href="booking.php?id=<?php echo $row2[0];?>" class="btn btn-danger btn-sm">Delete</a>
    </td>
    <?php
 }
     
    ?>
    
  </tr>
</table>



</div>
</div>
</div><!--close container-->

<br>

<?php 
      
     if(isset($_REQUEST['id'])){
         
         
         $bid=$_REQUEST['id'];
         ?>
      
         <script>
alert('Are You Sure');
</script>
<?php
include("config.php");

if(isset($_REQUEST['id'])){

$id=$_REQUEST['id'];

mysqli_query($con,"delete from `booking` where id='$bid'") or die (mysqli_error());

}


?>

<script>
document.location='booking.php';
</script>

<?php
         
     }
      
      ?>

<?php
include("footer.php");

?>
