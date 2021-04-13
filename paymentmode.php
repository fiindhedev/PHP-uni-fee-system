


<?php 
  require_once("connection.php");
include('header.php');
if(isset($_SESSION['ROLE']) && $_SESSION['ROLE']!='1'){
  header('location:news.php');
  die();}
if(isset($_POST['btnsave'])){
	
$paymentmode = $_POST['paymentmode'];



	
	$querysave ="insert into tblpaymentmode(paymentmode) values ('$paymentmode')";
	if(mysqli_query($link,$querysave)){
	
	echo "<script>alert('record successful')</script>";

	}
	else{
		echo "<script>alert('error data')</script>";

	}
	
}




?>

<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0,shrink-to-fit=no" >
<title>EAU FEE SYSTEM~Payment Plan</title>
<link rel="stylesheet"   type="text/css" href="boostrap/boostrap.css">
<link rel="stylesheet" type="text/css" href="stylex.css" >
<link href="dhisme.css" 
rel="stylesheet" >
<script src="boostrap/jquarys.js"></script>
<script src="boostrap/popper."></script>
<script src="boostrap/boostrap1.js"></script>
</head>


<body>
  <div class="cont">
<section class="container-fluid">
 
  <section class="row justify-content-center">
    <section class="col-12 col-sm-6 col-md-4">
      <center> <h3 class="display-6">EAU FEE SYSTEM</H3></center>
      <center> <h3 class="display-6">Payment Plan</H3></center>
     <form method="post" action="" enctype="multipart/form-data" >
<table>

<tr>
<td>paymentmode</td><TD><input type="text" name="paymentmode" required value="<?php if(isset($_POST['paymentmode'])){ echo $_POST['paymentmode'];}?>"/></TD>
</tr>



<tr>
<td></td><TD><button type="submit" name="btnsave" class="btn btn-success">Save</button></TD>
</tr>

</table>

</form>
  
  
      </section>
      </section>
      </section>

  </div>

</body>

</html>