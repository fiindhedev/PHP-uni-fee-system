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
if( isset($_GET['search']) && isset($_GET['search1']) ){
    $faculty = $_GET['search'];
	$semester = $_GET['search1'];
    $sql = "SELECT * FROM tblfee WHERE faculty ='$faculty' AND semester='semester'";

}
$result = $con->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
<title>List Of Students Fee</title>
<link rel="stylesheet" type="text/css"
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="print.css" media="print">
</head>
<body>
<div class="container">
<label>Search</label>

<form action="" method="GET">

<select name="search" required value="<?php if(isset($_POST['search'])){ echo $_POST['search'];}?>"/>
 <option value=""></option>
<?php 
require_once("connection.php");
$cats = mysqli_query($link, "select faculty from tblfaculty");
while($row = mysqli_fetch_array($cats)){  ?>
<option value="<?php echo $row['faculty']; ?>"><?php echo $row['faculty']; ?></option>
  <?php } ?>
</select>

<select name="search1" required value="<?php if(isset($_POST['search1'])){ echo $_POST['search1'];}?>"/>

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
</form>
<h2>List Of Students Fee</h2>

<button onclick="window.print();" class="btn btn-primary" id="print-btn">print</button>
<table class="table table-striped table-responsive" border="1">
<tr>

<th>ID</th>
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
<!-- <th colspan="2">Action</th> -->
</tr>
<?php
while($row = $result ->fetch_assoc()){
    ?>
    
        <tr bgcolor="#cadaab">

			<td><?php echo $row['tid']; ?></td>
			<td><?php echo $row['sid']; ?></td>
			<td><?php echo $row['sname']; ?></td>
			<td><?php echo $row['sex']; ?></td>
			<td><?php echo $row['phone']; ?></td>
			<td><?php echo $row['program']; ?></td>
			<td><?php echo $row['faculty']; ?></td>
			<td><?php echo $row['dept']; ?></td>
			<td><?php echo $row['semester']; ?></td>
			<td><?php echo $row['academicyear']; ?></td>
			 <td><?php echo $row['term']; ?></td>
			<td><?php echo $row['paymentmode']; ?></td>
			<td><?php echo $row['accountNo']; ?></td>
			<td><?php echo $row['accounttype']; ?></td>
			<td><?php echo $row['paymentplan']; ?></td>
			<td><?php echo $row['months']; ?></td>
			<td><?php echo $row['feepayment']; ?></td>
			<td><?php echo $row['previouspayment']; ?></td>
			<td><?php echo $row['balance_due']; ?></td>
			<td><?php echo $row['payment_amount']; ?></td>
			<td><?php echo $row['reminder_balance']; ?></td>
			<td><?php echo $row['dateofpayment']; ?></td>
			<!-- <td style="background: black; font-color:white;">
				<a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
				<a href="del.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>

			</td>  -->
			</tr>
    <?php
}
?>

</table>
</div>
</body>
</html>	`