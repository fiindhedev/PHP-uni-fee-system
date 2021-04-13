<?php
require_once ("connection.php");
session_start();

?>
	<?php 
if(isset($_POST['submit'])){
	

	$sid=$_POST['username'];
	//$pass=$_POST['ques'];
	$ques=$_POST['ques'];
	$ans=$_POST['ans'];
	$sql="select * from admin_user where username='$sid' and ques='$ques' and ans='$ans'";
	$res=mysqli_query($link,$sql);
	$count=mysqli_num_rows($res);
	if($count>0){
		$row=mysqli_fetch_assoc($res);
	
			$_SESSION['users']=$_POST['username'];
		
		
			header('location:reset.php');
			
		}
	else{
		$msg='Please enter correct details';
	}

		?>
		<script type="text/javascript">
//window.location = "index.php";
</script>

		<?php	
	//	$msg = "Successful";
 
	
		
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
      
      <form class="form-hore" method="post" action="forgetpassword.php">
        	 <?php if(isset($msg)){?>
			  <div class="alert alert-danger" role="alert">
         <?php echo $msg; ?>
			 </div>
		 <?php }?> 
          <div class="form-group">
            <label>Username:</label>
            <input type="text" class="form-control" name="username" id="username"  required>
            
          </div>
         
		 
<label> Question </label>
<select name="ques" required />
<option value=""></option>
<?php 
require_once("connection.php");
$cats = mysqli_query($link, "select ques from admin_user");
while($row = mysqli_fetch_array($cats)){  ?>
<option value="<?php echo $row['ques']; ?>"><?php echo $row['ques']; ?></option>
  <?php } ?>
  </select>

		 
		    <div class="form-group">
            <label>Answer:</label>
            <input type="text" class="form-control" name="ans" id="answer"  required>
            
          </div>
          
          <button type="submit" name="submit" class="btn btn-primary btn-block">Forgot</button>
       <div class="etc-login-form">
				<p></p>
				<p>Back? <a href="login.php">click here</a></p>
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