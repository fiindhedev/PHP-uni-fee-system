<?php 
include('header.php');
if(isset($_SESSION['ROLE']) && $_SESSION['ROLE']!='1'){
	header('location:index.php');
	die();
}
?>
<body style="background-image:linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url(fee.png); background-size: 500px; background-attachment: fixed,"><br><br>
<div class="container-fluid" >

<!-- Page Content -->
<h1>EAU FEE SYSTEM</h1>
<hr>
<p>WELCOME</p>
  <link rel="icon" href="../fee\images\fee.png" type="image/png">
</div>
</body>
<?php include('footer.php')?>