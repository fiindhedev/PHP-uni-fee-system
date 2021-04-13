<?php 
require_once("connection.php");
if(isset($_GET['rid'])){
	
$id = $_GET['rid']	;
$sql ="delete from tblpaymentmode where id='$id'";
$req = mysqli_query($link,$sql)or die("walagu guladaraystay".mysql_error()) ;
echo "<meta http-equiv='refresh' content='0;url=diplay_paymentmode.php'>";
	
	
}


?>