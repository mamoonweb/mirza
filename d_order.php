<?php

include("admin_area/config.php");

if(isset($_GET['did'])){
	
	$did=$_GET['did'];
	
	}

if(isset($_POST['dbtn'])){
	
	$fullname=$_POST['fullname'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$address=$_POST['address'];
	$quantity=$_POST['quantity'];
	$foodn=$_POST['foodn'];
	$price=$_POST['price'];
	$totalp=$_POST['totalp'];
	
	
	$show=mysqli_query($con,"insert into `morder` values('','$fullname','$email','$phone','$address','$quantity','$foodn','$price','$totalp',now())") or die (mysqli_error());
	
	if($show){
		echo"<script>
		alert('Order Comfirm');
		window.location='index.php';
		</script>";
		}else{
			echo"<script>
		alert('Order Not Comfirm');
		</script>";
			};
	
	
	}
		
?>

<script>

function demo(){
	
	qty=document.getElementById('qty').value;
	fprice=document.getElementById('fprice').value;
	aus=qty*fprice;
	document.getElementById('tprice').value=aus;
	
	}

</script>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Food Point</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/hover-min.css">
<style>

tr:hover{
background-color:#000 !important;	
transition:all 400ms ease-in;
	}

input{
	background-color:transparent !important;
	color:#F60 !important;
	border:2px solid #fff !important;
	font-weight:bold;
}

td{
color:#FFF !important;	
	}
textarea{
	background-color:transparent !important;
	border:2px solid #fff !important;
	color:#F60 !important;
	font-weight:bold;
	}


input:focus{
	background-color:transparent !important;
	border:2px solid #F60 !important;
	box-shadow:2px 2px 5px #fff !important;
	}
textarea:focus{
	border:2px solid #F60 !important;
	box-shadow:2px 2px 5px #fff !important;
	
	}

.bg_c{
background:url(../images/2.jpg) fixed no-repeat center;	
	}
.bg_c h1{
color:#FFF;
font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
font-size:3.5em;	
	}
.aa a{
font-size:3em;
color:#FFF !important;
text-decoration:none !important;
font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
padding:50px 20px !important;
	}
.btn_c:hover{
background-color:#F60 !important;
color:#fff !important;	
transition:all 400ms ease-in;
	}
	

	

</style>
</head>
<body class=" bg_c">

<div class="col-md-12 aa">
<a href="index.html">Food Point</a>
</div>
<div class="col-md-12">
<h1 align="center">Order Now</h1>
</div>
<div class=" container col-md-12 col-sm-12 col-xs-12" align="center">


<br>
<hr>
<form method="post" action="#" enctype="multipart/form-data">

<table width="80%" border="0" cellspacing="10" class="table table-responsive ">
  <tr>
    <td>Full Name</td>
    <td><input type="text" name="fullname" required  class="form-control"  style="width:300px" pattern="[ |A-Z|a-z]{3,20}"></td>
  </tr>
  
  <tr>
    <td>Email</td>
    <td><input type="email" name="email" required class="form-control" style="width:300px"></td>
  </tr>
   <tr>
    <td>Phone.No</td>
    <td><input type="text" name="phone" required class="form-control"style="width:300px" pattern="[0-9]{11}"></td>
  </tr>
  <tr>
    <td>Address</td>
    <td><textarea cols="5" rows="2" name="address" required  class="form-control" style="width:300px">
    </textarea>
    </td>
  </tr>
  <tr>
    <td>Quantity</td>
    <td><input type="number" id="qty" onKeyUp="demo()" name="quantity" required  class="form-control" style="width:300px"></td>
  </tr>
  <tr>
    <td>Food Name</td>
    <?php
	 $sql=mysqli_query($con,"select * from `delifood` where id='$did'") or die (mysqli_error());
	while( $orow=mysqli_fetch_array($sql)){?>
	
    <td>
     <input type="text" name="foodn" readonly  value="<?php echo $orow['foodn'];?>" class="form-control" style="width:300px">
     </td>
  </tr>
  <tr>
    <td>Price</td>
    <td>
     <input type="text" id="fprice" name="price" readonly value="<?php echo $orow['price'];?>" class="form-control" style="width:300px">
   </td>
  </tr>
  <?php }?>
  
<tr>
    <td>Total Price</td>
    <td>
 <input type="text" readonly id="tprice" name="totalp" value="" class="form-control" style="width:300px">
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="dbtn" value="Order"  class="btn btn-info btn_c" ></td>
  </tr>
 
</table>

</form>
</div>


<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
