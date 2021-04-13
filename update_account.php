<?php 
require_once("connection.php");
include('header.php');
if(isset($_SESSION['ROLE']) && $_SESSION['ROLE']!='1'){
  header('location:news.php');
  die();
}
$id = $_GET['uid'];

$qeury =mysqli_query($link,"select * from tblaccount where id='$id'"); 
while($row  = mysqli_fetch_array($qeury)){

if(isset($_POST['btnupdate'])){
	
	require_once("connection.php");
$id = $_POST['id'];
$accounttype = $_POST['accounttype'];
$academicyear = $_POST['academicyear'];
$term = $_POST['term'];
$accountno = $_POST['accountno'];


$queryupdate = "update tblaccount set accountype='$accounttype',academicyear='$academicyear', term='$term', accountNO='$accountno'  where id='$id'";
if(mysqli_query($link,$queryupdate)){
	

	echo"<script>alert('record update successful')</script>";
  //  header("location:diplay_account.php");

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
<td>AccountType</td><TD><input type="text" name="accounttype" required value="<?php echo $row[1];?>" /></TD>
</tr>

<tr>
<td>AcademicYear</td><TD><input type="text" name="academicyear" required value="<?php echo $row[2];?>" /></TD>
</tr>

<tr>
<td>Term</td><TD><input type="text" name="term" required value="<?php echo $row[3];?>"/></td>
</tr>

<tr>
<td>AccountNo</td><TD><input type="text" name="accountno" required value="<?php echo $row[4];?>"/></TD>
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
