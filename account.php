


<?php 
require_once("connection.php");
  include('header.php');
if(isset($_SESSION['ROLE']) && $_SESSION['ROLE']!='1'){
  header('location:diplay_fee.php');
  die();
}
if(isset($_POST['btnsave'])){
	

$sid = $_POST['id'];
$accountype = $_POST['accountype'];
$academicyear = $_POST['academicyear'];
$term = $_POST['term'];
$accountNO = $_POST['accountNO'];
$hubi = mysqli_query($link,"select id from tblaccount where id ='$sid'");

if(mysqli_num_rows($hubi)>0){
	echo "<script>alert('ardaygan waa diiwaan gashan yahay $sid')</script>";
}
	
	$querysave ="insert into tblaccount(accountype,academicyear,term,accountNO) values ('$accountype','$academicyear','$term','$accountNO')";
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
<title>EAU FEE SYSTEM~ACCOUNTS</title>
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
      <center> <h3 class="display-6">Account REGISTRATION</H3></center>
     <form method="post" action="" enctype="multipart/form-data" >
<table>

<tr>
<td>AccountType</td><TD><input type="text" name="accountype" required value="<?php if(isset($_POST['accountype'])){ echo $_POST['accountype'];}?>"/>

</tr>

<tr>
<td>academicyear</td><TD><input type="text" name="academicyear" required value="<?php if(isset($_POST['academicyear'])){ echo $_POST['academicyear'];}?>"/></TD>
</tr>

<tr>
<td>term</td><TD><input type="text" name="term" required value="<?php if(isset($_POST['term'])){ echo $_POST['term'];}?>"/></TD>
</tr>

<tr>
<td>accountNO</td><TD><input type="text" name="accountNO" required value="<?php if(isset($_POST['accountNO'])){ echo $_POST['accountNO'];}?>"/></TD>
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