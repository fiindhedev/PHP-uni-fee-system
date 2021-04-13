<?php
$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "db_fee";
$con = new mysqli($localhost, $username, $password, $dbname);
if( $con->connect_error){
    die('Error: ' . $con->connect_error);
}
$sql = "SELECT * FROM tblaccount";
if( isset($_GET['search']) ){
    $sid = mysqli_real_escape_string($con, htmlspecialchars($_GET['search']));
    $sql = "SELECT * FROM tblaccount WHERE accountNO ='$sid'";

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
<title>ACCOUNTS</title>
<link rel="stylesheet" type="text/css"
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<label>Search</label>

<form action="" method="GET">
<input type="text" placeholder="Type the accountNO" name="search">&nbsp;
<input type="submit" value="Search" name="btn" class="btn btn-sm btn-primary">
</form>
<h2>Accounts</h2>
<button onclick="window.print();" class="btn btn-primary" id="print-btn">print</button>
<table class="table table-striped table-responsive">
<tr>

<th>Account ID</th>
<th>Account Type</th>
<th>Academic Year</th>
<th>Term</th>
<th>Account No</th>

<th colspan="2">Action</th>
</tr>

<?php
while($row = $result->fetch_assoc()){
    ?>
    <tr>
<td><?php echo $row['id'];?></td>
<td><?php echo $row['accountype'];?></td>
<td><?php echo $row['academicyear'];?></td>
<td><?php echo $row['term'];?></td>
<td><?php echo $row['accountNO'];?></td>

			<td style="background: black; font-color:white;">
			<a href="update_account.php?uid=<?php echo $row['id'];?>" >update</a>
				<a href="delete_account.php?rid=<?php echo $row['id'];?>" onClick="return confirm('marabtaa inaad masaxdo?')" >Delete</a>

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