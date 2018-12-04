<div class="col-md-9">
<h1 align="center" id="wl">Welcome Admin</h1>
<table width="100%" border="0" id="wl" cellpadding="20" cellspacing="20">
  <tr>
    <td><h2>Name : </h2></td>
    <td><h2><?php
    	if(isset($_SESSION['admin'])){
			echo $_SESSION['admin'];
			}else{
				echo "<script>
				document.location='index.php';
				</script>";
				} ?> </h2></td>
  </tr>
 <br>
 <br>
  <tr>
    <td><h2>Image : </h2></td>
    <td><img src="images/aaa.jpg" alt="Mamoon" class="img-responsive"> </td>
  </tr>
</table>
</div>

</div>

</div><!--close container-->

<br>