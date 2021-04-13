




<?php 
include('header.php');
if(isset($_SESSION['ROLE']) && $_SESSION['ROLE']!='1'){
  header('location:diplay_fee.php');
  die();
}
if(isset($_POST['btnsave'])){
	
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
$image = $_FILES['img']['name'];
$image_tmp = $_FILES['img']['tmp_name'];


$hubi = mysqli_query($link,"select sid from tblstudent where sid ='$sid'");
if(mysqli_num_rows($hubi)>0){
	echo "<script>alert('ardaygan waa diiwaan gashan yahay $sid')</script>";
}
else {
	move_uploaded_file($image_tmp,"images/$image");
	
	$querysave ="insert into tblstudent(sid,sname,gender,phone,program,faculty,dept,semester,academicyear,term,joindate,account_fee,status,image) values ('$sid','$sname','$gender','$phone','$program','$faculty','$dept','$semester','$academicyear','$term','$joindate','$account_fee','$status','$image')";
	if(mysqli_query($link,$querysave)){
	
	echo "<script>alert('record successful')</script>";

	}
	else{
		echo "<script>alert('error data')</script>";

	}
	
}

}


?>
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0,shrink-to-fit=no" >
<title>EAU FEE SYSTEM~Students registeration</title>
<link rel="stylesheet"   type="text/css" href="boostrap/boostrap.css">
<link rel="stylesheet" type="text/css" href="stylex.css" >
<link href="dhisme.css" 
rel="stylesheet" >
<script src="boostrap/jquarys.js"></script>
<script src="boostrap/popper."></script>
<script src="boostrap/boostrap1.js"></script>
</head>

<header>
<a href="" class="logo">Students registeration</a>

</header>
<body>
  <div class="cont">
<section class="container-fluid">
 
  <section class="row justify-content-center">
    <section class="col-12 col-sm-6 col-md-4">
      <center> <h3 class="display-6">EAU FEE SYSTEM</H3></center>
      <center> <h3 class="display-6">STUDENT REGISTRATION</H3></center>
     <form method="post" action="" enctype="multipart/form-data" >
<table>

<tr>
<td>StudentID</td><TD><input type="text" name="sid" required value="<?php if(isset($_POST['sid'])){ echo $_POST['sid'];}?>"/></TD>
</tr>

<tr>
<td>StudentName</td><TD><input type="text" name="sname" required value="<?php if(isset($_POST['sname'])){ echo $_POST['sname'];}?>" /></TD>
</tr>


<tr>
<td>Gender</td><TD><select name="gender" required value="<?php if(isset($_POST['gender'])){ echo $_POST['gender'];}?>" >
<option value="Male">male</option>
<option value="Female">Famale</option>
</select>
</TD>
</tr>

<tr>
<td>Phone</td><TD><input type="text" name="phone" required value="<?php if(isset($_POST['phone'])){ echo $_POST['phone'];}?>"/></TD>
</tr>

<tr>
<td>Program</td><TD><select name="program" required value="<?php if(isset($_POST['program'])){ echo $_POST['program'];}?>"/>
<option value="DEGREE">DEGREE</option>
<option value="DIPLOMA">DIPLOMA</option>
</select>
</TD>
</tr>

<tr>
<td>Faculty</td><TD><select name="faculty" required value="<?php if(isset($_POST['faculty'])){ echo $_POST['faculty'];}?>"/>
<option value=""></option>

<?php
require_once("connection.php"); 
$cats = mysqli_query($link, "select faculty from tblfaculty");
while($row = mysqli_fetch_array($cats)){  ?>
<option value="<?php echo $row['faculty']; ?>"><?php echo $row['faculty']; ?></option>
  <?php } ?>
</select>
</TD>
</tr>

<tr>
<td>Department</td><TD><select name="dept" required value="<?php if(isset($_POST['dept'])){ echo $_POST['dept'];}?>"/>

<option value=""></option>

<?php 
require_once("connection.php");
$cats = mysqli_query($link, "select dept from tbldept");
while($row = mysqli_fetch_array($cats)){  ?>
<option value="<?php echo $row['dept']; ?>"><?php echo $row['dept']; ?></option>
  <?php } ?>
</select>
</TD>
</tr>

<tr>
<td>Semester</td><TD><select name="semester" required value="<?php if(isset($_POST['semester'])){ echo $_POST['semester'];}?>"/>
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

        <tr><td>Academicyear</td><td>  <select name="academicyear" required value="<?php if(isset($_POST['academicyear'])){ echo $_POST['academicyear'];}?>"/>
<option value=""></option>

<?php
require_once("connection.php"); 
$cats = mysqli_query($link, "select academicyear from tblacademicyear");
while($row = mysqli_fetch_array($cats)){  ?>
<option value="<?php echo $row['academicyear']; ?>"><?php echo $row['academicyear']; ?></option>
  <?php } ?>
</select>    
<td></tr>
<tr>
<td>Term</td><TD><input type="text" name="term" required value="<?php if(isset($_POST['term'])){ echo $_POST['term'];}?>"/></TD>
</tr>

<tr>
<td>Join Date</td><TD><input type="date" name="joindate" required value="<?php if(isset($_POST['joindate'])){ echo $_POST['joindate'];}?>"/></TD>
</tr>

<tr>
<td>account_fee</td><TD><input type="text" name="account_fee" required value="<?php if(isset($_POST['account_fee'])){ echo $_POST['account_fee'];}?>"/></TD>
</tr>


<td>Upload image</td><TD><input type="file" name="img" required value="<?php if(isset($_POST['image'])){ echo $_POST['image'];}?>"/></TD>
</tr>


<tr>
<td></td><TD><button type="submit" name="btnsave" class="btn btn-success">Save</TD>
</tr>

</table>

</form>
	
	
      </section>
      </section>
      </section>

  </div>

</body>

</html>