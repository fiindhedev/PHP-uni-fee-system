<?php
$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "db_fee";
$con = new mysqli($localhost, $username, $password, $dbname);
if( $con->connect_error){
    die('Error: ' . $con->connect_error);
}
$sql = "SELECT * FROM tblpaymentplan";
if( isset($_GET['search']) ){
    $sid = mysqli_real_escape_string($con, htmlspecialchars($_GET['search']));
    $sql = "SELECT * FROM tblpaymentplan WHERE paymentplan Like '$sid'";

}
$result = $con->query($sql);
?>

<?php 
include('header.php');
if(isset($_SESSION['ROLE']) && $_SESSION['ROLE']!='1'){
	header('location:diplay_fee.php');
	die();
}
?>
<div class="container-fluid">
<ol class="breadcrumb">
  <li class="breadcrumb-item">
	 <a href="account.php">ACCOUNTS</a>
 </li>
</ol>
<!DOCTYPE html>
<html>
<head>
<title>Payment Plan List</title>
<link rel="stylesheet" type="text/css"
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<label>Search</label>

<form action="" method="GET">
<input type="text" placeholder="Type the Payment Plan" name="search">&nbsp;
<input type="submit" value="Search" name="btn" class="btn btn-sm btn-primary">
</form>
<h2>Payment Plan List</h2>
<button onclick="window.print();" class="btn btn-primary" id="print-btn">print</button>
<table class="table table-striped table-responsive">
<tr>

<th>ID</th>
<th>Payment Plan</th>
<th>Fee Payment</th>
<th>Program</th>


<th colspan="2">Action</th>
</tr>

<?php
while($row = $result->fetch_assoc()){
    ?>
    <tr>
<td><?php echo $row['id'];?></td>
<td><?php echo $row['paymentplan'];?></td>
<td><?php echo $row['feepayment'];?></td>
<td><?php echo $row['program'];?></td>



			<td style="background: black; font-color:white;">
			<a href="update_paymentplan.php?uid=<?php echo $row['id'];?>" >update</a>
				<a href="delete_paymentplan.php?rid=<?php echo $row['id'];?>" onClick="return confirm('marabtaa inaad masaxdo?')" >Delete</a>

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