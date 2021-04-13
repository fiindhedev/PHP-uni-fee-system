<?php 
require_once("connection.php");
include('header.php');
if(isset($_SESSION['ROLE']) && $_SESSION['ROLE']!='1'){
  header('location:diplay_fee.php');
  die();
}
$id = $_GET['uid'];

$qeury =mysqli_query($link,"select sid,sname,gender,phone,program,faculty,dept,semester,academicyear,term,account_fee from tblstudent where sid='$id'"); 
while($row  = mysqli_fetch_array($qeury)){
	
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
$accountNO = $_POST['accountNO'];
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
	
	$querysave ="insert into tblfee(sid,sname,sex,phone,program,faculty,dept,semester,academicyear,term,paymentmode,accountNO,accounttype,paymentplan,months,feepayment,previouspayment,balance_due,payment_amount,reminder_balance,dateofpayment) values ('$sid','$sname','$sex','$phone','$program','$faculty','$dept','$semester','$academicyear','$term','$paymentmode','$accountNO','$accounttype','$paymentplan','$months','$feepayment','$previouspayment','$balance_due','$payment_amount','reminder_balance','$dateofpayment')";
	if(mysqli_query($link,$querysave)){
	
	$queryupdates = "update tblstudent set account_fee=account_fee-'$payment_amount'  where sid='$sid'";
if(mysqli_query($link,$queryupdates)){
	

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
var c = b-a;

document.getElementById("balance_due").value = c;
}



function reminder(){
var a = document.getElementById("balance_due").value;
var b = document.getElementById("payment_amount").value;
var c = a-b;

document.getElementById("reminder_balance").value = c;
}




function filterdata(){
var a = document.getElementById("program").value;
var b = document.getElementById("paymentplan").value;

if(a==="DEGREE"  && b==="FULL Semester"){
	
	document.getElementById("feepayment").value  = 200;
	
}

else if(a==="DIPLOMA"  && b==="FULL Semester"){

document.getElementById("feepayment").value = 100;
}

else if(a==="DEGREE"  && b==="Half Semester"){

document.getElementById("feepayment").value = 100;
}

else if(a==="DIPLOMA"  && b==="Half Semester"){

document.getElementById("feepayment").value = 50;
}
else{
document.getElementById("feepayment").value = 0;	
	
}
}


</script>
<script type="text/javascript">
		$(document).ready(function(){
			$("#ajaxdata").load("allrecords.php");
			$("#price_dropdown").change(function(){
				var selected=$(this).val();
				$("#ajaxdata").load("search.php",{selected_price: selected});
			});
			$("#refresh").click(function(){
				$("#ajaxdata").load("allrecords.php");
			});
		});
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
<td>studentID</td><TD><input type="text" name="sid" required readonly value="<?php echo $row['sid'];?>"/>

</td></tr>



<tr>
<td>StudentName</td><TD><input type="text" name="sname" required readonly value="<?php echo $row['sname'];?>"/></TD>
</tr>

<tr>
<td>Sex</td><TD><select name="sex" required readonly />
<option value="<?php echo $row['gender'];?>"><?php echo $row['gender'];?></option>
<option value="male">male</option>
<option value="Female">Famale</option>
</select></TD>
</tr>

<tr>
<td>Phone</td><TD><input type="text" name="phone" required  readonly value="<?php echo $row['phone'];?>"/></TD>
</tr>

<tr>
<td>Program</td><TD><select name="program" id="program" onblur="filterdata()" required />
<option value="<?php echo $row['program'];?>"><?php echo $row['program'];?></option>
<option value="DEGREE">DEGREE</option>
<option value="DIPLOMA">DIPLOMA</option>
</select></TD>
</tr>

<tr>
<td>Faculty</td><TD><input type="text" name="faculty" required  readonly value="<?php echo $row['faculty'];?>"/>
</TD>
</tr>


<tr>
<td>Department</td><TD><input type="text"  name="dept" required  readonly value="<?php echo $row['dept'];?>"/>
</TD>
</tr>

<tr>
<td>Semester</td><TD><select name="semester" required readonly />
<option value="<?php echo $row['semester'];?>"><?php echo $row['semester'];?></option>
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
<td>Academicyear</td> <td> <input type="text" name="academicyear" readonly required value="<?php echo $row['academicyear'];?>"/>
</td>
</tr>  

<tr>
<td>term</td><TD><input type="text" name="term" required readonly value="<?php echo $row['term'];?>" /></TD>
</tr>


<tr>
<td>paymentmode</td><TD><select name="paymentmode" required />
<option value=""></option>
<?php 
require_once("connection.php");
$cats = mysqli_query($link, "select paymentmode from tblpaymentmode");
while($row4 = mysqli_fetch_array($cats)){  ?>
<option value="<?php echo $row4['paymentmode']; ?>"><?php echo $row4['paymentmode']; ?></option>
  <?php } ?>
  </select>
</TD>
</tr>

<tr>
<td>accountNO</td><TD><select name="accountNO" required >
<option value=""></option>
<?php 
require_once("connection.php");
$cats = mysqli_query($link, "select accountNO from tblaccount");
while($row8 = mysqli_fetch_array($cats)){  ?>
<option value="<?php echo $row8['accountNO']; ?>"><?php echo $row8['accountNO']; ?></option>
  <?php } ?>
  </select>
  </TD>
</tr>

<tr>
<td>accounttype</td><TD><select name="accounttype" required />
<option value="Fee">Zaad Service</option>
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
<td>months</td><TD><select name="months" readonly required />
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
<td>feepayment</td><TD><input type="text" name="feepayment" id="feepayment"  required /></TD>
</tr>

<tr>
<td>previouspayment</td><TD><input type="text" name="previouspayment" id="previouspayment" onblur="balancedata()" required value="<?php echo $row['account_fee'];?>" /></TD>

</tr>
<?php }?>
<tr>
<td>balance_due</td><TD><input type="text" name="balance_due" id="balance_due" onblur="balancedata()" required value="<?php echo $row['balance_due'];?>" />
</TD>
</tr>

<tr>
<td>payment_amount</td><TD><input type="text" name="payment_amount" id="payment_amount" onblur="reminder()" required value="<?php echo $row['payment_amount'];?>" />
</TD>
</tr>

<tr>
<td>reminder_balance</td><TD><input type="text" name="reminder_balance" id="reminder_balance" onblur="reminder()" required value="<?php echo $row['reminder_balance'];?>" /></TD>
</tr>


<tr>
<td>dateofpayment</td><TD><input type="date"  name="dateofpayment" required value="<?php echo $row['dateofpayment'];?>" />

</TD>
</tr>



<TR>
<td></td><TD><input type="submit" name="btnsave" value="Register"> </TD>
</tr>





</form>

</center>

</div>

</body>

</html>