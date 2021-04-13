<?php 
require_once("connection.php");
if(isset($_GET['rid'])){
	
$sid = $_GET['rid']	;
$sql ="delete from tblstudent where sid='$sid'";
$req = mysqli_query($link,$sql)or die("walagu guladaraystay".mysql_error()) ;
echo "<meta http-equiv='refresh' content='0;url=diplay_student.php'>";
	
	
}


?>