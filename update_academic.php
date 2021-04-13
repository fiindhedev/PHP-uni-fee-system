<?php 
require_once("connection.php");
include('header.php');
if(isset($_SESSION['ROLE']) && $_SESSION['ROLE']!='1'){
  header('location:diplay_fee.php');
  die();
}
$id = $_GET['uid'];

$qeury =mysqli_query($link,"select * from tblacademicyear where id='$id'"); 
while($row  = mysqli_fetch_array($qeury)){

if(isset($_POST['btnupdate'])){
	
require_once("connection.php");
$id = $_POST['id'];
$academicyear = $_POST['academicyear'];
$term = $_POST['term'];
//$academicyear = $_POST['academicyear'];


$queryupdate = "update tblacademicyear set academicyear='$academicyear'  where id='$id'";
if(mysqli_query($link,$queryupdate)){
	
$queryupdates = "update tblstudent set account_fee=account_fee+'100', account_exam=account_exam+'10'  where program='DIPLOMA' and status='Active'";
if(mysqli_query($link,$queryupdates)){
	

	//echo"<script>alert('record update successful')</script>";
   // header("location:diplay_academic.php");

}
$queryupdatess = "update tblstudent set account_fee=account_fee+'200', account_exam=account_exam+'10'  where program='DEGREE' and status='Active'";
if(mysqli_query($link,$queryupdatess)){
	

	//echo"<script>alert('record update successful')</script>";
   // header("location:diplay_academic.php");

}
echo"<script>alert('record update successful')</script>";

}

	

else{
	echo"<script>alert('error not update')</script>";
}



}

?>

<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0,shrink-to-fit=no" >
<title>SPORTS|Adminstration</title>
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
      <center> <h3 class="display-6">STUDENT REGISTRATION</H3></center>
<form method="post" action="" enctype="multipart/form-data" >
<table>

<tr>
<td>id</td><TD><input type="hidden" name="id" required value="<?php echo $row[0];?>"/><?php echo $row[0];?></TD>
</tr>

<tr>
<td>AcademicYear</td><TD><input type="text" name="academicyear" required value="<?php echo $row[1];?>"/>
</tr>

<tr>
<td>term</td><TD><input type="text" name="term" required value="<?php echo $row[2];?>" /></TD>
</tr>




<TR>
<td></td><TD><input type="submit" name="btnupdate"></button></TD>
</tr>



<?php
}
?>
</table>

</form>

</section>
</section>
</section>

</div>

</body>

</html>
