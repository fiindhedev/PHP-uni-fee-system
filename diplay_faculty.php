<?php
$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "db_fee";
$con = new mysqli($localhost, $username, $password, $dbname);
if( $con->connect_error){
    die('Error: ' . $con->connect_error);
}
$sql = "SELECT * FROM tblfaculty";
if( isset($_GET['search']) ){
    $sid = mysqli_real_escape_string($con, htmlspecialchars($_GET['search']));
    $sql = "SELECT * FROM tblfaculty WHERE faculty ='$sid'";

}
$result = $con->query($sql);
?>

<?php 
include('header.php');
if(isset($_SESSION['ROLE']) && $_SESSION['ROLE']!='1'){
	header('location:news.php');
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
<title>Faculties List</title>
<link rel="stylesheet" type="text/css"
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<label>Search</label>

<form action="" method="GET">
<input type="text" placeholder="Type the Faculty Name" name="search">&nbsp;
<input type="submit" value="Search" name="btn" class="btn btn-sm btn-primary">
</form>
<h2>Faculties List</h2>
<button onclick="window.print();" class="btn btn-primary" id="print-btn">print</button>
<table class="table table-striped table-responsive">
<tr>

<th>Faculty ID</th>
<th>Faculty Name</th>
<th>Dean</th>
<th>Abbreviation</th>


<th colspan="2">Action</th>
</tr>

<?php
while($row = $result->fetch_assoc()){
    ?>
    <tr>
<td><?php echo $row['id'];?></td>
<td><?php echo $row['faculty'];?></td>
<td><?php echo $row['dean'];?></td>
<td><?php echo $row['abbreviation'];?></td>


			<td style="background: black; font-color:white;">
			<a href="update_faculty.php?uid=<?php echo $row['id'];?>" >update</a>
				<a href="delete_faculty.php?rid=<?php echo $row['id'];?>" onClick="return confirm('marabtaa inaad masaxdo?')" >Delete</a>

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