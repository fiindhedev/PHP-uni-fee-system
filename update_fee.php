<?php 
require_once("connection.php");
include('header.php');
if(isset($_SESSION['ROLE']) && $_SESSION['ROLE']!='1'){
  header('location:diplay_fee.php');
  die();
}
$id = $_GET['uid'];

$qeury =mysqli_query($link,"select * from tblfee where tid='$id'"); 
while($row  = mysqli_fetch_array($qeury)){
	
if(isset($_POST['btnupdate'])){
	
	require_once("connection.php");
$tid = $_POST['tid'];
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
$queryupdate = "update tblfee set sid='$sid',sname='$sname',sex='$sex',phone='$phone',program='$program',faculty='$faculty',dept='$dept',semester='$semester',academicyear='$academicyear',term='$term', paymentmode='$paymentmode',accountNo='$accountNo',accounttype='$accounttype',paymentplan='$paymentplan',months='$months',feepayment='$feepayment',previouspayment='$previouspayment',balance_due='$balance_due',payment_amount='$payment_amount',reminder_balance='$reminder_balance', dateofpayment='$dateofpayment' where tid='$tid'";
if(mysqli_query($link,$queryupdate)){
	

	echo"<script>alert('record update successful')</script>";
   // header("location:diplay_fee.php");

}
else{
	echo"<script>alert('error not update')</script>";
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
<head><title>Update</title></head>
<meta name="viewport" content="width=device-width,initial-scale=1.0,shrink-to-fit=no" >
<title>EAU FEE SYSTEM~Students Update</title>
<link rel="stylesheet"   type="text/css" href="boostrap/boostrap.css">
<link rel="stylesheet" type="text/css" href="stylex.css" >
<link href="dhisme.css" 
rel="stylesheet" >
<script src="boostrap/jquarys.js"></script>
<script src="boostrap/popper."></script>
<script src="boostrap/boostrap1.js"></script>
</head>

<body>
<div>
<center><form method="post" action="" enctype="multipart/form-data" >
<table>

<tr>
<td>TID</td><TD><input type="hidden" name="tid" required value="<?php echo $row[0];?>"/><?php echo $row[0];?></TD>
</tr>

<tr>
<td>studentID</td><TD><input type="text" name="sid" required value="<?php echo $row[1];?>"/>

</td></tr>



<tr>
<td>StudentName</td><TD><input type="text" name="sname" required value="<?php echo $row[2];?>"/></TD>
</tr>

<tr>
<td>Sex</td><TD><select name="sex" required value="<?php echo $row[3];?>"/>
<option value="male">male</option>
<option value="Female">Famale</option>
</select></TD>
</tr>

<tr>
<td>Phone</td><TD><input type="text" name="phone" required value="<?php echo $row[4];?>"/></TD>
</tr>

<tr>
<td>Program</td><TD><select name="program" required value="<?php echo $row[5];?>"/>
<option value="DEGREE">DEGREE</option>
<option value="DIPLOMA">DIPLOMA</option>
</select></TD>
</tr>

<tr>
<td>Faculty</td><TD><select name="faculty" required />
 <option value="<?php echo $row[6];?>"><?php echo $row[6];?></option>
<?php 
require_once("connection.php");
$cats = mysqli_query($link, "select faculty from tblfaculty");
while($row1 = mysqli_fetch_array($cats)){  ?>
<option value="<?php echo $row1['faculty']; ?>"><?php echo $row1['faculty']; ?></option>
  <?php } ?>
</select>
</TD>
</tr>


<tr>
<td>Department</td><TD><select name="dept" required />
 <option value="<?php echo $row[7];?>"><?php echo $row[7];?></option>
<?php 
require_once("connection.php");
$cats = mysqli_query($link, "select dept from tbldept");
while($row2 = mysqli_fetch_array($cats)){  ?>
<option value="<?php echo $row2['dept']; ?>"><?php echo $row2['dept']; ?></option>
  <?php } ?>
  </select>
</TD>
</tr>

<tr>
<td>Semester</td><TD><select name="semester" required />
<option value="<?php echo $row[8];?>"><?php echo $row[8];?></option>
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
<td>Academicyear</td> <td> <select name="academicyear" required />
<option value="<?php echo $row[9];?>"><?php echo $row[9];?></option>

<?php
require_once("connection.php"); 
$cats = mysqli_query($link, "select academicyear from tblacademicyear");
while($row3 = mysqli_fetch_array($cats)){  ?>
<option value="<?php echo $row3['academicyear']; ?>"><?php echo $row3['academicyear']; ?></option>
  <?php } ?>
</select>  
</td>
</tr>  

<tr>
<td>term</td><TD><input type="text" name="term" required value="<?php echo $row[10];?>" /></TD>
</tr>


<tr>
<td>paymentmode</td><TD><select name="paymentmode" required >
<option value="<?php echo $row[11];?>"><?php echo $row[11];?></option>
<?php 
require_once("connection.php");
$cats = mysqli_query($link, "select paymentmode from paymentmode");
while($row4 = mysqli_fetch_array($cats)){  ?>
<option value="<?php echo $row4['paymentmode']; ?>"><?php echo $row4['paymentmode']; ?></option>
  <?php } ?>
  </select>
</TD>
</tr>

<tr>
<td>accountNo</td><TD><input type="text" name="accountNo" required value="<?php echo $row[12];?>" /></TD>
</tr>

<tr>
<td>accounttype</td><TD><select name="accounttype" required value="<?php echo $row[13];?>" />
<option value="Zaad Service">Zaad Service</option>
<option value="EDahab Service">EDahab Service</option>
<option value="MyCash">MyCash</option>
</select>
</TD>
</tr>

<tr>
<td>paymentplan</td><TD><select name="paymentplan" id="paymentplan" onblur="filterdata()" required />
<option value="FULL Semester">FULL Semester</option>
<option value="Half Semester">Half Semester</option>
  </select>
</TD>
</tr>

<tr>
<td>months</td><TD><select name="months" required value="<?php echo $row[15];?>" />
<option value="JANUARY">JANUARY</option>
<option value="FEBRUARY">FEBRUARY</option>
<option value="MARCH">MARCH</option>
<option value="APRIL">APRIL</option>
<option value="MAY">MAY</option>
<option value="JUNE">JUNE</option>
<option value="JULY">JULY</option>
<option value="AUGUST">AUGUST</option>
<option value="SEPTEMBER">SEPTEMBER</option>
<option value="OCTOBER">OCTOBER</option>
<option value="NOVEMBER">NOVEMBER</option>
<option value="DECEMBER">DECEMBER</option>
</select>
</TD>
</tr>

<tr>
<td>feepayment</td><TD><input type="text" name="feepayment" id="feepayment" onblur="balancedata()" required value="<?php echo $row[16];?>" />
</TD>
</tr>

<tr>
<td>previouspayment</td><TD><input type="text" name="previouspayment" id="previouspayment" onblur="balancedata()" required value="<?php echo $row[17];?>" /></TD>
</tr>

<tr>
<td>balance_due</td><TD><input type="text" name="balance_due" id="balance_due" onblur="balancedata()" required value="<?php echo $row[18];?>" />
</TD>
</tr>

<tr>
<td>payment_amount</td><TD><input type="text" name="payment_amount" id="payment_amount" onblur="reminder()" required value="<?php echo $row[19];?>" />
</TD>
</tr>

<tr>
<td>reminder_balance</td><TD><input type="text" name="reminder_balance"  id="reminder_balance" onblur="reminder()" required value="<?php echo $row[20];?>" /></TD>
</tr>


<tr>
<td>dateofpayment</td><TD><input type="date"  name="dateofpayment" required value="<?php echo $row[21];?>" />

</TD>
</tr>



<TR>
<td></td><TD><input type="submit" name="btnupdate"> </TD>
</tr>

<?php
}
?>



</form>

</center>

</div>

</body>

</html>