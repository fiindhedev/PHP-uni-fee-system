<?php
$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "db_fee";
$con = new mysqli($localhost, $username, $password, $dbname);
if( $con->connect_error){
    die('Error: ' . $con->connect_error);
}
$sql = "SELECT * FROM tblfee";
if( isset($_GET['search']) ){
    $sid = mysqli_real_escape_string($con, htmlspecialchars($_GET['search']));
    $sql = "SELECT * FROM tblfee WHERE sid ='$sid'";

}
$result = $con->query($sql);
?>

<?php 
include('header.php');
/*
if(isset($_SESSION['ROLE']) && $_SESSION['ROLE']='2'){
	header('location:diplay_fee.php');
	die();
}*/
?>
<div class="container-fluid">
<ol class="breadcrumb">
  <li class="breadcrumb-item">
	 <a href="">STUDENTS FEE DATA</a>
 </li>
</ol>
<!DOCTYPE html>
<html>
<head>
<title>STUDENTS FEE DATA</title>
<link rel="stylesheet" type="text/css"
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
                         <script>
function printContent(el){

var restorepage = document.body.innerHTML;
var printcontent =  document.getElementById(el).innerHTML;
document.body.innerHTML =  printcontent;
window.print();
document.body.innerHTML =  restorepage;
}

</script>
<div class="container">
<label>Search</label>

<form action="" method="GET">
<select name="faculty" required value="<?php if(isset($_POST['faculty'])){ echo $_POST['faculty'];}?>"/>
<option value=""></option>

<?php
require_once("connection.php"); 
$cats = mysqli_query($link, "select faculty from tblfaculty");
while($row = mysqli_fetch_array($cats)){  ?>
<option value="<?php echo $row['faculty']; ?>"><?php echo $row['faculty']; ?></option>
  <?php } ?>
</select>

<select name="semester" required value="<?php if(isset($_POST['semester'])){ echo $_POST['semester'];}?>"/>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
</select>
<input type="submit" value="Search" name="btn" class="btn btn-sm btn-primary">
 <button class="form-control" type="button" onClick="printContent('div1')">Print!</button>
</form>

 <div id="div1">
<h2>STUDENTS FEE DATA</h2>

<table class="table table-striped " width="800px">
<tr>


<th>Studentid</th>
<th>Faculty</th>
<th>Semester</th>
<th>Month</th>
<th>FeePayment</th>
<th>PreviousPayment</th>
<th>BalanceDue</th>
<th>PaymentAmount</th>
<th>ReminderBalance</th>
<th>DateofPayment</th>

</tr>

<?php

while($row = $result->fetch_assoc()){
    ?>
    <tr>
<td><?php echo $row['sid'];?></td>
<td><?php echo $row['faculty'];?></td>
<td><?php echo $row['semester'];?></td>
<td><?php echo $row['months'];?></td>
<td><?php echo $row['feepayment'];?></td>
<td><?php echo $row['previouspayment'];?></td>
<td><?php echo $row['balance_due'];?></td>
<td><?php echo $row['payment_amount'];?></td>
<td><?php echo $row['reminder_balance'];?></td>
<td><?php echo $row['dateofpayment'];?></td>
		
			</tr> 
    <?php
}
?>

</table>
</div>
</div>
</body>
</html>

</div>
<?php include('footer.php')?>