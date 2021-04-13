<?php 

include("header.php"); ?>
        <!-- top navigation -->
 
        <!-- /top navigation -->

        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3></h3>
                    </div>

                   
                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Changepassword</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                <form name="form1" action="" method="post" class="col-lg-6" >
                                <table class="table table-bordered">

								<tr><td><input type="password" name="oldpassword" class="form-control" placeholder="Old Password" required> </td></tr>

                                 <tr><td><input type="password" name="newpassword" class="form-control" placeholder="New Password" required> </td></tr>

								<tr><td><input type="password" name="confrimpassowrd" class="form-control" placeholder="Reply Password" required> </td></tr>



                                <tr><td><input type="submit" name="submit1" class="btn btn-default submit" value="change" required style="background-color:blue; color:white; "> </td></tr>







								</table>
                            </form>
                            </div>
                   
        <?php
if(isset($_POST['submit1'])){

if($_POST['oldpassword'] == $pwdold){
if($_POST['newpassword'] == $_POST['confrimpassowrd']){
	
	$querychange = mysqli_query($link,"UPDATE admin_user SET password ='$_POST[newpassword]' WHERE username= '".$_SESSION['user']."'");
	?>
	
	<div class="alert alert-success col-lg-6 col-lg-push-3">
        <center>Change Password successfully</center>
    </div>
	<?php
}
else{?>
	
	<div class="alert alert-error col-lg-6 col-lg-push-3">
        <center>New password and cofirm password dont't match</center>
    </div>
	<?php
	}}else {?>
		
		<div class="alert alert-error col-lg-6 col-lg-push-3">
        <center>Old password not correct</center>
    </div>
		<?php }
	
	




}
?>
     </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->

<?php include("footer.php")?>
        