<?php
$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "db_fee";
$con = new mysqli($localhost, $username, $password, $dbname);
if( $con->connect_error){
    die('Error: ' . $con->connect_error);
}
$sql = "SELECT * FROM tblstudent";
if( isset($_GET['search']) ){
    $sid = mysqli_real_escape_string($con, htmlspecialchars($_GET['search']));
    $sql = "SELECT * FROM tblstudent WHERE sid ='$sid'";

}
$result = $con->query($sql);
?>

<?php 
include('header.php');

?>
<div class="container-fluid">
<ol class="breadcrumb">
  <li class="breadcrumb-item">
	 <a href="diplay_student.php">STUDENTS DATA</a>
 </li>
</ol>
<!DOCTYPE html>
<html>
<head>
<title>STUDENTS DATA</title>
<link rel="stylesheet" type="text/css"
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<label>Search</label>

<form action="" method="GET">
<input type="text" placeholder="Type the Student ID" name="search">&nbsp;
<input type="submit" value="Search" name="btn" class="btn btn-sm btn-primary">
</form>
<h2>STUDENTS DATA</h2>

<table class="table table-striped table-responsive">
<tr>

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
<th>Joindate</th>
<th>Account_Fee</th>

<th>Image</th>
<th colspan="2">Action</th>
</tr>
<?php
while($row = $result->fetch_assoc()){
    ?>
    <tr>
    
          <td><?php echo $row['sid']; ?></td>
            <td><?php echo $row['sname']; ?></td>
			<td><?php echo $row['gender']; ?></td>
			<td><?php echo $row['phone']; ?></td>
			<td><?php echo $row['program']; ?></td>
			<td><?php echo $row['faculty']; ?></td>
			<td><?php echo $row['dept']; ?></td>
			<td><?php echo $row['semester']; ?></td>
			<td><?php echo $row['academicyear']; ?></td>
			<td><?php echo $row['term']; ?></td>
			<td><?php echo $row['joindate']; ?></td>
			<td><?php echo $row['account_fee']; ?></td>
		
		<td><?php echo $row['image']; ?></td>
		
			<td style="background: black; font-color:white;">
			<a href="update_fee1.php?uid=<?php echo $row['sid'];?>" >FeePayment</a>
			

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