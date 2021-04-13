


<?php 
require_once("connection.php");
  include('header.php');
if(isset($_SESSION['ROLE']) && $_SESSION['ROLE']!='1'){
  header('location:diplay_fee.php');
  die();}
if(isset($_POST['btnsave'])){
	
$sid = $_POST['id'];
$paymentplan = $_POST['paymentplan'];
$feepayment = $_POST['feepayment'];
$program = $_POST['program'];


	$hubi = mysqli_query($link,"select id from tblpaymentplan where id ='$sid'");
if(mysqli_num_rows($hubi)>0){
	echo "<script>alert('ardaygan waa diiwaan gashan yahay $sid')</script>";
}
	$querysave ="insert into tblpaymentplan(paymentplan,feepayment,program) values ('$paymentplan','$feepayment','$program')";
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
<td>paymentplan</td><TD><select name="paymentplan" required value="<?php if(isset($_POST['paymentplan'])){ echo $_POST['paymentplan'];}?>"/>
<option value="FULL Semester">FULL Semester</option>
<option value="HALF Semester">HALF Semester</option>
</select></TD>
</tr>

<tr>
<td>feepayment</td><TD><input type="text" name="feepayment" required value="<?php if(isset($_POST['feepayment'])){ echo $_POST['feepayment'];}?>"/></TD>
</tr>

<tr>
<td>Program</td><TD><select name="program" required value="<?php if(isset($_POST['program'])){ echo $_POST['program'];}?>"/>
<option value="Male">DEGREE</option>
<option value="Female">DIPLOMA</option>
</select>
</TD>
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