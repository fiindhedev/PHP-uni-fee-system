<?php 
include('header.php');
if(isset($_SESSION['ROLE']) && $_SESSION['ROLE']!='1'){
  header('location:diplay_fee.php');
  die(); 
}
require_once("connection.php");
$id = $_GET['uid'];

$qeury =mysqli_query($link,"select sid,sname,gender,phone,program,faculty,dept,semester,academicyear,term,joindate,account_fee,status,image from tblstudent where sid='$id'"); 
while($row  = mysqli_fetch_array($qeury)){
	


if(isset($_POST['btnupdate'])){
	
require_once("connection.php");

$sid = $_POST['sid'];
$sname = $_POST['sname'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$program = $_POST['program'];
$faculty = $_POST['faculty'];
$dept = $_POST['dept'];
$semester = $_POST['semester'];
$academicyear = $_POST['academicyear'];
$term = $_POST['term'];
$joindate = $_POST['joindate'];
$account_fee = $_POST['account_fee'];
//$account_exam = $_POST['account_exam'];
$status = $_POST['status'];
$queryupdate = "update tblstudent set sname='$sname',gender='$gender',phone='$phone',program='$program',faculty='$faculty',dept='$dept',semester='$semester',academicyear='$academicyear',term='$term', joindate='$joindate',account_fee='$account_fee', status='$status' where sid='$sid'";
if(mysqli_query($link,$queryupdate)){
	

	echo"<script>alert('record update successful')</script>";
  //  header("location:diplay_student.php");

}
else{
	echo"<script>alert('error not update')</script>";
}



}

?>
<html>
<head><title>Update Students</title></head>
<meta name="viewport" content="width=device-width,initial-scale=1.0,shrink-to-fit=no" >
<title>EAU FEE SYSTEM~Students Update</title>
<link rel="stylesheet"   type="text/css" href="boostrap/boostrap.css">
<link rel="stylesheet" type="text/css" href="stylex.css" >
<link href="dhisme.css" 
rel="stylesheet" >
<script src="boostrap/boostrap.js"></script>
<script src="boostrap/boostrap.mini.js"></script>
<script src="boostrap/boostrap.bundle.js"></script>
</head>




<body>
<div>
<center><form method="post" action="" enctype="multipart/form-data" >
<table>

<tr>
<td>studenID</td><TD><input type="hidden" name="sid" required value="<?php echo $row[0];?>"/><?php echo $row[0];?></TD>
</tr>

<tr>
<td>studenName</td><TD><input type="text" name="sname" required value="<?php echo $row[1];?>" /></TD>
</tr>


<tr>
<td>Gender</td><TD><select name="gender" required value="<?php echo $row[2];?>" >
<option value="male">male</option>
<option value="Female">Famale</option>
</select>
</TD>
</tr>

<tr>
<td>phone</td><TD><input type="text" name="phone" required value="<?php echo $row[3];?>"></td>
</tr>

<tr>
<td>Program</td><TD><select  name="program" required value="<?php echo $row[4];?>"/>
<option value="DIPLOMA">DIPLOMA</option>
<option value="DEGREE">DEGREE</option>
</select></td>
</tr>

<tr>
<td>Faculty</td><TD><select name="faculty" required />
 <option value="<?php echo $row[5];?>"><?php echo $row[5];?></option>
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
<option value="<?php echo $row[6];?>"><?php echo $row[6];?></option>
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
<td>Semester</td><TD><select name="semester" required value="<?php echo $row[7];?>"/>
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
         <select name="academicyear" required />
<option value="<?php echo $row[7];?>"><?php echo $row[7];?></option>
<?php 
require_once("connection.php");
$cats = mysqli_query($link, "select dept from tbldept");
while($row3 = mysqli_fetch_array($cats)){  ?>
<option value="<?php echo $row3['dept']; ?>"><?php echo $row3['dept']; ?></option>
  <?php } ?>
</select>   
</TD>
</tr>
<tr>
<td>term</td><TD><input type="text" name="term" required value="<?php echo $row[9];?>" /></TD>
</tr>

<tr>
<td>JoinDate</td><TD><input type="date" name="joindate" required value="<?php echo $row[10];?>" >

<tr>
<td>account_fee</td><TD><input type="text" name="account_fee" required value="<?php echo $row[11];?>" /></TD>
</tr>


<tr>
<td>status</td><TD><select name="status" required value="<?php echo $row['status'];?>" />
<option value="<?php echo $row[12];?>"><?php echo $row[12];?></option>
</select>
</TD>

</tr>


</TD>
</tr>




<TR>
<td></td><TD><input type="submit" name="btnupdate"></TD>
</tr>
<?php
}
?>
</table>

</form>
</center>



</div>

</body>

</html>