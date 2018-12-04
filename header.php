<?php
include("admin_area/config.php");
   
     if(isset($_POST['now'])){
     
      $name=$_POST['name'];
	  $email=$_POST['email'];
	  $phone=$_POST['phone'];
	  $address=$_POST['address'];
	  $selt=$_POST['selt'];
	  $selp=$_POST['selp'];;
	  $day=$_POST['date'];
	  
      

  $dis=mysqli_query($con,"insert into `booking` values('','$name','$email','$phone','$address','$day','$selp','$selt',now())") or die(mysqli_error);
  
  if($dis){
	 echo 
	    
	  "<script>
	  alert('Booking confirm');
	  window.location='index.php';
	  </script>";
	  }else{
		  echo "<script>
	  alert('Booking Not Confirm');
	  </script>";
		  }
  
	 }
	 
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Food Point</title>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/swipebox.css">
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet">
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script>
<!-- //js -->
<!-- web-fonts -->
<link href='//fonts.googleapis.com/css?family=Cinzel+Decorative:400,700,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- //web-fonts -->
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
		
		$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!-- //end-smooth-scrolling -->
</head>
<body>

<!-- banner -->
<div class="banner">
  <div class="header"><!-- header -->
    <div class="container">
      <nav class="navbar navbar-default">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <h1><a  href="index.html">Food Point</a></h1>
        </div>
        <!-- navbar-header -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.html" class="active">Home</a></li>
            <li><a href="#about" class="scroll">About</a></li>
            <li><a href="#menu" class="scroll">Special Food</a></li>
            <li><a href="#team" class="scroll">Team</a></li>
            <li><a href="#gallery" class="scroll">Delicious Food</a></li>
            <li><a href="#contact" class="scroll">Contact Us</a></li>
          </ul>
          <div class="clearfix"> </div>
        </div>
      </nav>
    </div>
  </div>
  <!-- //header --> 
  <!-- banner-text -->
  <div class="banner-text">
    <div class="flexslider">
      <ul class="slides">
        <li>
          <h2>AMAZING </h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipi est Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias phasellus mattis tellus .</p>
          <a href="#" class="more" data-toggle="modal" data-target="#myModal">Book a Table</a> </li>
        <li>
          <h3>GRILLING</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipi est Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias phasellus mattis tellus .</p>
          <a href="#" class="more" data-toggle="modal" data-target="#myModal">Book a Table</a> </li>
        <li>
          <h3>RECIPES </h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipi est Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias phasellus mattis tellus .</p>
          <a href="#" class="more" data-toggle="modal" data-target="#myModal">Book a Table</a> </li>
      </ul>
    </div>
    <!-- modal -->
    <div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Make Your Reservation Now</h4>
            <?php
            
			?>
            
          </div>
          <div class="modal-body book-form">
            <form action="#" method="post">
              <div class="phone_email">
                <label>Full Name : </label>
                <div class="form-text"> <span class="fa fa-user" aria-hidden="true"></span>
                  <input type="text" name="name" placeholder="Name" required>
                </div>
              </div>
              <div class="phone_email phone_email1">
                <label>Email : </label>
                <div class="form-text"> <span class="fa fa-envelope" aria-hidden="true"></span>
                  <input type="text" name="email" placeholder="Email" required>
                </div>
              </div>
              <div class="phone_email">
                <label>Phone Number : </label>
                <div class="form-text"> <span class="fa fa-phone" aria-hidden="true"></span>
                  <input type="text" name="phone" placeholder="Phone no" required>
                </div>
              </div>
              <div class="phone_email phone_email1">
                <label>Address : </label>
                <div class="form-text"> <span class="fa fa-map-marker" aria-hidden="true"></span>
                  <input type="text" name="address" placeholder="Your Address" required>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="agileits_reservation_grid">
                <div class="span1_of_1">
                  <label>Date : </label>
                  <div class="book_date"> <span class="fa fa-calendar" aria-hidden="true"></span>
                    <input class="date" id="datepicker" type="text" name="date" placeholder="mm/dd/yyyy" required>
                  </div>
                </div>
                <div class="span1_of_1"> 
                  <!-- start_section_room -->
                  <label>Time : </label>
                  <div class="section_room"> <span class="fa fa-clock-o" aria-hidden="true"></span>
                    <select name="selt" id="country" onchange="change_country(this.value)" class="frm-field required">
                      <option value="lunch">Lunch</option>
                      <option value="dinner">Dinner</option>
                      <option value="breakfast">Break Fast</option>
                    </select>
                  </div>
                </div>
                <div class="span1_of_1">
                  <label>No.of People : </label>
                  <!-- start_section_room -->
                  <div class="section_room"> <span class="fa fa-users" aria-hidden="true"></span>
                    <select name="selp" id="country1" onchange="change_country(this.value)" class="frm-field required sect">
                      <option value="1">1 People</option>
                      <option value="2">2 People</option>
                      <option value="3">3 People</option>
                      <option value="4">4 People</option>
                      <option value="more">More</option>
                    </select>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
              <input type="submit" name="now" value="Book Now" />
            </form>
          </div>
          <!-- Calendar -->
          <link rel="stylesheet" href="css/jquery-ui.css" />
          <script src="js/jquery-ui.js"></script> 
          <script>
								$(function() {
									$( "#datepicker" ).datepicker();
								});
						</script> 
          <!-- //Calendar --> 
        </div>
      </div>
    </div>
    <!-- //modal --> 
    <!-- FlexSlider --> 
    <script defer src="js/jquery.flexslider.js"></script> 
    <script type="text/javascript">
			$(window).load(function() {
			  $('.flexslider').flexslider({
				animation: "slide",
				controlsContainer: $(".custom-controls-container"),
				customDirectionNav: $(".custom-navigation a")
			  });
			});
			</script> 
    <!-- //FlexSlider --> 
  </div>
  <!-- //banner-text --> 
</div>
<!-- //banner --> 
