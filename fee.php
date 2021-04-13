


<?php 
include('header.php');
if(isset($_SESSION['ROLE']) && $_SESSION['ROLE']!='1'){
  header('location:login.php');
  die();}
  
if(isset($_POST['btnsave'])){
	
	require_once("connection.php");
//$id = $_POST['id'];
$sid = $_POST['sid'];
$sname = $_POST['sname'];
$sex = $_POST['sex'];
$phone = $_POST['phone'];
$program = $_POST['program'];
$faculty = $_POST['faculty'];
$dept = $_POST['dept'];
$semester = $_POST['semester'];
$academicyear = $_POST['academicyear'];
$term = $_POST['term'];
$paymentmode = $_POST['paymentmode'];
$accountNo = $_POST['accountNo'];
$accounttype = $_POST['accounttype'];
$paymentplan = $_POST['paymentplan'];
$months = $_POST['months'];
$feepayment = $_POST['feepayment'];
$previouspayment = $_POST['previouspayment'];
$balance_due = $_POST['balance_due'];
$payment_amount = $_POST['payment_amount'];
$reminder_balance = $_POST['reminder_balance'];
$dateofpayment = $_POST['dateofpayment'];

$hubi = mysqli_query($link,"select sid from tblstudent where sid ='$sid'");
if(mysqli_num_rows($hubi)<1){
	echo "<script>alert('ardaygan ma diiwaan gashana $sid')</script>";
}
else {
	
	$querysave ="insert into tblfee(sid,sname,sex,phone,program,faculty,dept,semester,academicyear,term,paymentmode,accountNo,accounttype,paymentplan,months,feepayment,previouspayment,balance_due,payment_amount,reminder_balance,dateofpayment) values ('$sid','$sname','$sex','$phone','$program','$faculty','$dept','$semester','$academicyear','$term','$paymentmode','$accountNo','$accounttype','$paymentplan','$months','$feepayment','$previouspayment','$balance_due','$payment_amount','reminder_balance','$dateofpayment')";
	if(mysqli_query($link,$querysave)){
	
	$queryupdates = "update tblstudent set account_fee=account_fee-'$payment_amount', account_exam=account_exam-'$payment_amount'  where program='DIPLOMA' and status='Active'";
if(mysqli_query($link,$queryupdates)){
	

	//echo"<script>alert('record update successful')</script>";
   // header("location:diplay_academic.php");

}
$queryupdatess = "update tblstudent set account_fee=account_fee-'$payment_amount', account_exam=account_exam-'$payment_amount'  where program='DEGREE' and status='Active'";
if(mysqli_query($link,$queryupdatess)){
	

	//echo"<script>alert('record update successful')</script>";
   // header("location:diplay_academic.php");

}
	echo "<script>alert('record successful')</script>";

	}
	else{
		echo "<script>alert('error data')</script>";

	}
	
}


}

?>
<script>
function balancedata(){
var a = document.getElementById("feepayment").value;
var b = document.getElementById("previouspayment").value;
var c = a-b;

document.getElementById("balance_due").value = c;
}



function reminder(){
var a = document.getElementById("balance_due").value;
var b = document.getElementById("payment_amount").value;
var c = a-b;

document.getElementById("reminder_balance").value = c;
}
</script>

<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0,shrink-to-fit=no" >
<title>EAU FEE SYSTEM~Fee Payment</title>
<link rel="stylesheet"   type="text/css" href="boostrap/boostrap.css">
<link rel="stylesheet" type="text/css" href="stylex.css">
<link href="dhisme.css" 
rel="stylesheet" >
<script src="boostrap/jquarys.js"></script>
<script src="boostrap/popper."></script>
<script src="boostrap/boostrap1.js"></script>
</head>


<div class="clearfix"></div>


<body>
  <div class="cont">
<section class="container-fluid">
 
  <section class="row justify-content-center">
    <section class="col-12 col-sm-6 col-md-4">
      <center> <h3 class="display-6">EAU FEE SYSTEM</H3></center>
      <center> <h3 class="display-6">FEE Payment</H3></center>
     <form method="post" action="" enctype="multipart/form-data" >
<table>

<tr>
<td>StudentID</td><TD><input type="text" name="sid" required value="<?php if(isset($_POST['sid'])){ echo $_POST['sid'];}?>"/></TD>
</tr>

<tr>
<td>StudentName</td><TD><input type="text" name="sname" required value="<?php if(isset($_POST['sname'])){ echo $_POST['sname'];}?>" /></TD>
</tr>

<tr>
<td>Sex</td><TD><select name="sex" required value="<?php if(isset($_POST['sex'])){ echo $_POST['sex'];}?>"/>
<option value="Male">male</option>
<option value="Female">Famale</option>
</select>
</TD>
</tr>

<tr>
<td>Phone</td><TD><input type="text" name="phone" required value="<?php if(isset($_POST['phone'])){ echo $_POST['phone'];}?>" /></TD>
</tr>


<tr>
<td>Program</td><TD><select name="program" required value="<?php if(isset($_POST['program'])){ echo $_POST['program'];}?>"/>
<option value="DEGREE">DEGREE</option>
<option value="DIPLOMA">DIPLOMA</option>
</select>
</TD>
</tr>

<tr>
<td>Faculty</td><TD><select name="faculty" required value="<?php if(isset($_POST['faculty'])){ echo $_POST['faculty'];}?>"/>
 <option value=""></option>
<?php 
require_once("connection.php");
$cats = mysqli_query($link, "select faculty from tblfaculty");
while($row = mysqli_fetch_array($cats)){  ?>
<option value="<?php echo $row['faculty']; ?>"><?php echo $row['faculty']; ?></option>
  <?php } ?>
</select>
</TD>
</tr>

<tr>
<td>Department</td><TD><select name="dept" required value="<?php if(isset($_POST['dept'])){ echo $_POST['dept'];}?>"/>
<option value=""></option>
<?php 
require_once("connection.php");
$cats = mysqli_query($link, "select dept from tbldept");
while($row = mysqli_fetch_array($cats)){  ?>
<option value="<?php echo $row['dept']; ?>"><?php echo $row['dept']; ?></option>
  <?php } ?>
</TD>
</tr>

<tr>
<td>Semester</td><TD><select name="semester" required value="<?php if(isset($_POST['semester'])){ echo $_POST['semester'];}?>"/>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
</select>
</TD>
</tr>
<tr>
<td>Academicyear</td><TD>
          <select name="academicyear" required value="<?php if(isset($_POST['academicyear'])){ echo $_POST['academicyear'];}?>"/>
<option value=""></option>

<?php
require_once("connection.php"); 
$cats = mysqli_query($link, "select academicyear from tblacademicyear");
while($row = mysqli_fetch_array($cats)){  ?>
<option value="<?php echo $row['academicyear']; ?>"><?php echo $row['academicyear']; ?></option>
  <?php } ?>
</select>    
</TD>
</tr>
<tr>
<td>Term</td><TD><input type="text" name="term" required value="<?php if(isset($_POST['term'])){ echo $_POST['term'];}?>"/></TD>
</tr>

<tr>
<td>paymentmode</td><TD><Select name="paymentmode" required value="<?php if(isset($_POST['paymentmode'])){ echo $_POST['paymentmode'];}?>"/>
<option value="Zaad Service">Zaad Service</option>
<option value="EDahab Service">EDahab Service</option>
<option value="MyCash">MyCash</option>

</select>
</TD>
</tr>

<tr>
<td>accountNo</td><TD><input type="text" name="accountNo" required value="<?php if(isset($_POST['accountNo'])){ echo $_POST['accountNo'];}?>" /></TD>
</tr>

<tr>
<td>accounttype</td><TD><select name="accounttype" required value="<?php if(isset($_POST['accounttype'])){ echo $_POST['accounttype'];}?>"/>
<option value="Zaad Service">Zaad Service</option>
<option value="EDahab Service">EDahab Service</option>
<option value="MyCash">MyCash</option>
</select>
</TD>
</tr>

<tr>
<td>paymentplan</td><TD><select name="paymentplan" required value="<?php if(isset($_POST['paymentplan'])){ echo $_POST['paymentplan'];}?>"/>
<option value="FULL Semester">FULL Semester</option>
<option value="HALF Semester">HALF Semester</option>
</select>
</TD>
</tr>

<tr>
<td>months</td><TD><select name="months" required value="<?php if(isset($_POST['months'])){ echo $_POST['months'];}?>"/>
<option value="JANUARY">JANUARY</option>
<option value="FEBRUARY">FEBRUARY</option>
</select>
</TD>
</tr>

<tr>
<td>feepayment</td><TD><input type="text" name="feepayment" id="feepayment" onblur="balancedata()" required value="<?php if(isset($_POST['feepayment'])){ echo $_POST['feepayment'];}?>"/>

</TD>
</tr>



<tr>
<td>previouspayment</td><TD><input type="text" name="previouspayment" id="previouspayment" onblur="balancedata()"required value="<?php if(isset($_POST['previouspayment'])){ echo $_POST['previouspayment'];}?>"/></TD>
</tr>

<tr>
<td>balance_due</td><TD><input type="text" name="balance_due" id="balance_due" onblur="balancedata()"  required value="<?php if(isset($_POST['balance_due'])){ echo $_POST['balance_due'];}?>"/></TD>
</tr>

<tr>
<td>payment_amount</td><TD><input type="text" name="payment_amount" id="payment_amount" onblur="reminder()" required value="<?php if(isset($_POST['payment_amount'])){ echo $_POST['payment_amount'];}?>"/></TD>
</tr>

<tr>
<td>reminder_balance</td><TD><input type="text" name="reminder_balance" id="reminder_balance" onblur="reminder()" required value="<?php if(isset($_POST['reminder_balance'])){ echo $_POST['reminder_balance'];}?>"/></TD>
</tr>


<tr>
<td>dateofpayment</td><TD><input type="date"  name="dateofpayment" required value="<?php if(isset($_POST['dateofpayment'])){ echo $_POST['dateofpayment'];}?>"/>

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