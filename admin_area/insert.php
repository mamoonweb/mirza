<?php
include("config.php");

if(isset($_POST['btn'])){
	
	   $uname=$_POST['uname'];
	   $img=$_POST['img'];
	   $uemail=$_POST['uemail'];
	   $pass=md5($_POST['pass']);
	   
	   
	   if(isset($_FILES['img'])){
	  $img=$_FILES['img']['name'];
      $upload="upload/";	  
	  $img1=$upload.basename($_FILES['img']['name']);
	  move_uploaded_file($_FILES['img']['tmp_name'],$img1);}
  
           $text=$_POST['text'];
	   
	   
	
$dis=mysqli_query($con,"insert into admin values('', '$uname','$img','$uemail','$pass',now())") or die (mysqli_error());
	
	if($dis){
		echo"<script>
		   alert('Record Save');
		   document.location='index.php';
		</script>";
		
		}else{
			echo"<script>
		   alert('Record Not Save');
		</script>";
			};
	

	
	
	
	
	}




?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<h1 align="center">Data Entre</h1>
<form method="post" action="#" enctype="multipart/form-data">
<table width="400" align="center" border="0" cellspacing="10">
  <tr>
    <td>Name</td>
    <td><input type="text" name="uname" required></td>
  </tr>
   <tr>
    <td>Images</td>
    <td><input type="file" name="img" required></td>
  </tr>
  <tr>
    <td>email</td>
    <td><input type="email" name="uemail" required></td>
  </tr>
   <tr>
    <td>Password</td>
    <td><input type="password" name="pass" required></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="btn"></td>
  </tr>
</table>

</form>
</body>
</html>