


<?php 

  include('header.php');
if(isset($_SESSION['ROLE']) && $_SESSION['ROLE']!='1'){
  header('location:diplay_fee.php');
  die();
}
if(isset($_POST['btnsave'])){
	  require_once("connection.php");
$sid = $_POST['id'];
$academicyear = $_POST['academicyear'];
$term = $_POST['term'];

$hubi = mysqli_query($link,"select id from tblacademicyear where id ='$sid'");
if(mysqli_num_rows($hubi)>0){
	echo "<script>alert('ardaygan waa diiwaan gashan yahay $sid')</script>";
}
	
	$querysave ="insert into tblacademicyear(academicyear,term) values ('$academicyear','$term')";
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
<title>EAU FEE SYSTEM~academicyear</title>
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
      <center> <h3 class="display-6">AcademicYear REGISTRATION</H3></center>
     <form method="post" action="" enctype="multipart/form-data"  >
<table>

<tr>
<td>AcademicYear</td><TD><input type="text" name="academicyear" required value="<?php if(isset($_POST['academicyear'])){ echo $_POST['academicyear'];}?>"/></TD>
</tr>

<tr>
<td>Term</td><TD><input type="text" name="term" required value="<?php if(isset($_POST['term'])){ echo $_POST['term'];}?>"/></TD>
</tr>



<tr>
<td></td><TD><input type="submit" name="btnsave" ></TD>
</tr>

</table>

</form>
  
  
      </section>
      </section>
      </section>

  </div>
<a href="diplay_academic.php">Link Diplay</a>
</body>

</html>