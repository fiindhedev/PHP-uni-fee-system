	
	<?php 
require_once("connection.php");
if(isset($_GET['rid'])){
	
$id = $_GET['rid']	;
$qeury =mysqli_query($link,"select feepayment from tblpaymentplan where paymentplan='$paymentplan'"); 
while($row  = mysqli_fetch_array($qeury)){


	
	
}