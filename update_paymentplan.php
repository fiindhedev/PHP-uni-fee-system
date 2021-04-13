<?php 
require_once("connection.php");
 include('header.php');
if(isset($_SESSION['ROLE']) && $_SESSION['ROLE']!='1'){
  header('location:diplay_fee.php');
  die();}
$id = $_GET['uid'];

$qeury =mysqli_query($link,"select * from tblpaymentplan where id='$id'"); 
while($row  = mysqli_fetch_array($qeury)){
 
if(isset($_POST['btnupdate'])){
	
	require_once("connection.php");
$id = $_POST['id'];	
$paymentplan = $_POST['paymentplan'];
$feepayment = $_POST['feepayment'];
$program = $_POST['program'];

$queryupdate = "update tblpaymentplan set paymentplan='$paymentplan',feepayment='$feepayment', program='$program' where id='$id'";
if(mysqli_query($link,$queryupdate)){
	

	echo"<script>alert('record update successful')</script>";
   // header("location:diplay_paymentplan.php");

}
else{
	echo"<script>alert('error not update')</script>";
}



}

?>

<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0,shrink-to-fit=no" >
<title>EAU FEE SYSTEM|Update Dept</title>
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
<td>paymentplan</td><TD><select name="paymentplan" required value="<?php echo $row[1];?>" />
<option value="Full Semester">Full Semester</option>
<option value="Half Semester">Half Semester</option>
</select></td>
</tr>

<tr>
<td>feepayment</td><TD><input type="text" name="feepayment" required value="<?php echo $row[2];?>"/>
</TD>
</tr>


<tr>
<td>program</td><TD><select name="program" required value="<?php echo $row[3];?>" />
<option value="DIPLOMA">DIPLOMA</option>
<option value="DEGREE">DEGREE</option>
</select></TD>
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
