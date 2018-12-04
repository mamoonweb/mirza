<!-- gallery -->
<div id="gallery" class="gallery">
  <div class="container">
    <div class="agile-title">
      <h3>Our Delicious Food</h3>
    </div>
    <div class="gallery-agileinfo-row">
      
      <?php
      
	  $sql1=mysqli_query($con,"select * from `delifood`") or die(mysqli_error());
	  
	  while($row1=mysqli_fetch_array($sql1)){
		 
		 $id1=$row1['id'];
		 $img1=$row1['image'];
		 $foodn1=$row1['foodn'];
		 $price1=$row1['price'];
		 $desc1=$row1['desc'];
		   
	   
	   
	  ?>
      
      <div class="col-md-4 gallery-grids">
        
        <div class="hover ehover14"> <a href="admin_area/special_food_img/<?php echo $img1 ;?>" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non"> <img src="admin_area/special_food_img/<?php echo $img1;?>" alt="hello" class="img-responsive" /> </a>
        
          <div class="overlay">
            <h4><?php echo $foodn1 ;?></h4>
            <h5 style="color:#FFF">Rs : <?php echo $price1 ;?></h5>
            <a href="d_order.php?did=<?php echo $id1; ?>" class="btn info nullbutton button">order</a>
          </div>
          
       
          </div>
        
      </div>
     <?php }?>
      <div class="clearfix"> </div>
    </div>
  </div>
</div>
<!-- //gallery --> 