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
<div class="container">
<label>Search</label>

<form action="" method="GET">
<input type="text" placeholder="Type the StudentID" name="search">&nbsp;
<input type="submit" value="Search" name="btn" class="btn btn-sm btn-primary">
</form>
<h2>STUDENTS FEE DATA</h2>
<button onclick="window.print();" class="btn btn-primary" id="print-btn">print</button>
<table class="table table-striped table-responsive">
<tr>

<th>TID</th>
<th>Studentid</th>
<th>StudentName</th>
<th>Sex</th>
<th>Phone</th>
<th>Program</th>
<th>Faculty</th>
<th>Department</th>
<th>Semester</th>
<th>AcademicYear</th>
<th>Term</th>
<th>PaymentMode</th>
<th>AccountNo</th>
<th>Accounttype</th>
<th>PaymentPlan</th>
<th>Month</th>
<th>FeePayment</th>
<th>PreviousPayment</th>
<th>BalanceDue</th>
<th>PaymentAmount</th>
<th>ReminderBalance</th>
<th>DateofPayment</th>
<th colspan="2">Action</th>
</tr>

<?php
while($row = $result->fetch_assoc()){
    ?>
    <tr>
<td><?php echo $row['tid'];?></td>
<td><?php echo $row['sid'];?></td>
<td><?php echo $row['sname'];?></td>
<td><?php echo $row['sex'];?></td>
<td><?php echo $row['phone'];?></td>
<td><?php echo $row['program'];?></td>
<td><?php echo $row['faculty'];?></td>
<td><?php echo $row['dept'];?></td>
<td><?php echo $row['semester'];?></td>
<td><?php echo $row['academicyear'];?></td>
<td><?php echo $row['term'];?></td>
<td><?php echo $row['paymentmode'];?></td>
<td><?php echo $row['accountNo'];?></td>
<td><?php echo $row['accounttype'];?></td>
<td><?php echo $row['paymentplan'];?></td>
<td><?php echo $row['months'];?></td>
<td><?php echo $row['feepayment'];?></td>
<td><?php echo $row['previouspayment'];?></td>
<td><?php echo $row['balance_due'];?></td>
<td><?php echo $row['payment_amount'];?></td>
<td><?php echo $row['reminder_balance'];?></td>
<td><?php echo $row['dateofpayment'];?></td>
			<td style="background: black; font-color:white;">
			<a href="update_fee.php?uid=<?php echo $row['tid'];?>" >update</a>
				<a href="delete_fee.php?rid=<?php echo $row['tid'];?>" onClick="return confirm('marabtaa inaad masaxdo?')" >Delete</a>

			</td> 
    <?php
}
?>

</table>
</div>
</body>
</html>

</div>
<?php include('footer.php')?>