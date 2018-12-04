<?php
include("config.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<!--<link rel="stylesheet" href="css/main.css">-->
<link rel="stylesheet" href="css/bootstrap.min.css">
<style>
.header{
background-color:#000 !important;	
	}
.logo h3 a{
font-size:2em;
text-decoration:none;
padding:20px;
color:#FFF !important;
	}	
.nav1 ul li a{
color:#fff !important;
font-size:20px !important;
font-family: Constantia, "Lucida Bright", "DejaVu Serif", Georgia, serif ;
transition:all 1s ease;
font-family:style1;

	}

.nav1 ul li a:hover{
background-color:#06F !important;	
color:#fff !important;
	}	
.btn1:hover{
color:#fff !important;
background-color:#06F !important;
border:1px solid #003 !important;	
	}
.icon-c:hover{
color:#06F !important;
	
	}		
	
.nav1{
margin:0 !important;
background-color:#003 !important;	
border:1px solid #000 !important;	
	}	
.color:hover{
color:#003 !important;
	}	
	
.btn2{
margin:20px !important;	
	
	}
.sidebar{
background-color:rgb(255, 140, 0);
height:500px;
border:2px #000 dashed;	
	}	
	
.sidebar h3{
padding:10px;
color:#003;
border-bottom:1px solid #000;
font-size:2em;
	
	}		
		
.sidebar li a{
text-decoration:none;	
color:#FFF;
font-size:1.1em;
margin:10px !important;
-webkit-transition:all 500ms ease;	
	
	}
.sidebar li a:hover{
color:#306;	
font-size:1.3em;

	}	
#wl{
	color:#306;
	font-weight:bold;
	}	

.sidebar li{
margin-top:10px;	
padding:10px;
border-bottom:2px solid #000;
border-right:2px solid #000;	
	}	

.sidebar li:hover{
padding:15px;	
border-top:2px solid #000;
	}		
	
.footer{
background-color:#000;
padding:10px;
color:#FFF;
font-size:1.3em;
text-align:center;
	}

.addspec input{
border: 1px solid #306;	
	}

.addspec input:focus{
color:#000000;
border: 2px solid #306;
box-shadow:2px 2px 3px #999999;	
	}	
.btn_c{
border:1px dashed #306;
color:#306;
transition:all 300ms ease-in;	
	}	
.btn_c:hover{
color:#FFF;
background-color:#306;
border:1px dashed #fff;	
	}	
.table_c:hover{
transition:all 300ms ease;	
background-color:#606 !important;
color:#FFF;
	}
	
	
</style>
</head>
<body>

<header class="header">
<div class="container">
<div class="logo col-md-4">
<h3><a href="home.php">Food Point</a></h3>
</div>



<a href="logout.php"><input type="submit" value="Logout" class="btn btn-default btn2 pull-right"></a>


</div><!--close container-->


</header><!--close header-->

<br>