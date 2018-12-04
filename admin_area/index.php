<?php

include("config.php");

if(isset($_POST['login'])){
	
	$email=$_POST['email'];
	$pass=md5($_POST['pass']);
	
$dis=mysqli_query($con,"select * from admin where email='$email'and password='$pass'") or die (mysqli_error());

   while($row=mysqli_fetch_array($dis)){
      
     $_SESSION['admin']=$row['name'];
	 $_SESSION['img1']=$row['image'];
  
	 
	 };
	 
    $count=mysqli_num_rows($dis);	
	if($count>0){
		echo "<script>
		alert('Welcome User');
		document.location='home.php';
		</script>";
		}else{
			echo "<script>
		alert('Invaild Username Or Password');
		</script>";
			}
   

	
	}

?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Day 001 Login Form</title>
  
  
  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans:600'>

      <link rel="stylesheet" href="css/form.css">

  
</head>

<body>
  <div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"><!--Sign Up--></label>
		<div class="login-form">
			<div class="sign-in-htm">
            
				<div class="group">
                
                <form method="post">
					<label for="user" class="label">Email</label>
					<input id="user" name="email" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" name="pass" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div>
				<div class="group">
					<input type="submit" name="login" class="button" value="Login">
                    </form>
                    
                    
                    
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="#forgot">Forgot Password?</a>
				</div>
			</div>
            
            
			<div class="sign-up-htm">
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<label for="pass" class="label">Repeat Password</label>
					<input id="pass" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<label for="pass" class="label">Email Address</label>
					<input id="pass" type="text" class="input">
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign Up">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<label for="tab-1">Already Member?</a>
				</div>
			</div>
		</div>
	</div>
</div>
  
</body>
</html>
