




<?php 
  require_once("connection.php");
include('header.php');

if(isset($_POST['btnsave'])){
	

$faculty = $_POST['faculty'];
$dean = $_POST['dean'];
$abbreviation = $_POST['abbreviation'];


	
	$querysave ="insert into tblfaculty(faculty,dean,abbreviation) values ('$faculty','$dean','$abbreviation')";
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
<title>EAU FEE SYSTEM~Faculty</title>
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
      <center> <h3 class="display-6">Faculty REGISTRATION</H3></center>
     <form method="post" action="" enctype="multipart/form-data" >
<table>

<tr>
<td>Faculty</td><TD><input type="text" name="faculty" required value="<?php if(isset($_POST['faculty'])){ echo $_POST['faculty'];}?>"/></TD>
</tr>

<tr>
<td>Dean</td><TD><input type="text" name="dean" required value="<?php if(isset($_POST['dean'])){ echo $_POST['dean'];}?>"/></TD>
</tr>

<tr>
<td>Abbreviation</td><TD><input type="text" name="abbreviation" required value="<?php if(isset($_POST['abbreviation'])){ echo $_POST['abbreviation'];}?>"/></TD>
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