<?php
require_once ("connection.php");
session_start();

?>
	<?php 
if(isset($_POST['submit'])){
	
if($_POST['new'] == $_POST['confirm']){
	
	$querychange = mysqli_query($link,"UPDATE admin_user SET password ='$_POST[new]' WHERE username= '".$_SESSION['users']."'");
	
		?>
		<script type="text/javascript">
 window.location = "login.php";
</script>

		<?php	
	//	$msg = "Successful";
}

else{
	
	$msg ='confirm password doesnt match ';
	
} 
	
		
}
	?>
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0,shrink-to-fit=no" >
<title>ICT|Examination Result</title>
<link rel="stylesheet"   type="text/css" href="boostrap/boostrap.css">
<link rel="stylesheet" type="text/css" href="stylex.css" >
<link href="dhisme.css" 
rel="stylesheet" >
<script src="boostrap/jquarys.js"></script>
<script src="boostrap/popper."></script>
<script src="boostrap/boostrap1.js"></script>
</head>

<header>

 <body class="bg-dark">
      <div class="container">
         <div class="card card-login mx-auto mt150">
            <div class="card-header">Forgot</div>
            <div class="card-body">
  <div class="cont">
<section class="container-fluid">
 
  <section class="row justify-content-center">
    <section class="col-12 col-sm-6 col-md-4">
      
      <form class="form-hore" method="post" action="reset.php">
        	 <?php if(isset($msg)){?>
			  <div class="alert alert-danger" role="alert">
         <?php echo $msg; ?>
			 </div>
		 <?php }?> 
          <div class="form-group">
            <label>New Password:</label>
            <input type="text" class="form-control" name="new" id="new"  required>
            
          </div>
         
		    <div class="form-group">
            <label>Confirm Password:</label>
            <input type="text" class="form-control" name="confirm" id="confirm"  required>
            
          </div>
          
          <button type="submit" name="submit" class="btn btn-primary btn-block">Forgot</button>
       <div class="etc-login-form">
				<p></p>
				<p>Back? <a href="login.php">Login</a></p>
			</div>
        </form>
	
	
      </section>
      </section>
      </section>
 </div>
         </div>
      </div>

  </div>
</body>

</html>