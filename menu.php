<!-- menu -->

<div id="menu" class="menu">
  <div class="container">
    <div class="agile-title">
      <h3> Our Special Food</h3>
    </div>
    <ul class="accordion">
    
    <?php
    
	$sql=mysqli_query($con,"select * from `specialfood` ORDER BY id DESC limit 0,5") or die (mysqli_error());
	
	while($row=mysqli_fetch_array($sql)){
	   
	   $id=$row['id'];
	   $image=$row['image'];
	   $foodn=$row['foodn'];
	   $price=$row['price'];
	   $desc=$row['desc'];
	
	?>
      <a href="m_order.php?mid=<?php echo $id;?>"><li class="slide-01">
        <div class="menu-left"> <img src="admin_area/special_food_img/<?php echo $image;?>" alt=""/>
          <div class="menu-right">
            <h4><?php echo $foodn?> </h4>
            <h5>Rs : <?php echo $price?> </h5>
            <p><?php echo $desc?> </p>
       
          </div>
        </div>
      </li>
      </a>
      
        <!-- modal -->
   
    <!-- //modal --> 
      <?php }?>
    </ul>
    <div class="clearfix"> </div>
  </div>
</div>
<!-- //menu -->