<?php 

include("header.php"); ?>
        <!-- top navigation -->
        
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
                                <h2>Search Student Fee</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                <form method="post" action="search_students_fee.php" >
                                
                                 <table class="table table-bordered">

								<tr>Search :<td>
                                <select name="faculty" required value="<?php if(isset($_POST['faculty'])){ echo $_POST['faculty'];}?>"/>
<option value=""></option>

<?php
require_once("connection.php"); 
$cats = mysqli_query($link, "select faculty from tblfaculty");
while($row = mysqli_fetch_array($cats)){  ?>
<option value="<?php echo $row['faculty']; ?>"><?php echo $row['faculty']; ?></option>
  <?php } ?>
</select>
<select name="semester" required value="<?php if(isset($_POST['semester'])){ echo $_POST['semester'];}?>"/>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
</select>
               
            <select name="academicyear" required value="<?php if(isset($_POST['academicyear'])){ echo $_POST['academicyear'];}?>"/>
<option value=""></option>

<?php
require_once("connection.php"); 
$cats = mysqli_query($link, "select academicyear from tblacademicyear");
while($row = mysqli_fetch_array($cats)){  ?>
<option value="<?php echo $row['academicyear']; ?>"><?php echo $row['academicyear']; ?></option>
  <?php } ?>
</select>                       
                                
                                <input type="submit" name="submit1" class="btn btn-default submit" value="Search" required style="background-color:blue; color:white; ">
                                
                               
                                
                                </td></tr>







								</table>
                            </form>
                            </div>
                   
        <?php
if(isset($_POST['submit1'])){
include("connection.php");
$semester  = mysqli_real_escape_string($link,$_POST['semester']);
$faculty  = mysqli_real_escape_string($link,$_POST['faculty']);
$academicyear  = mysqli_real_escape_string($link,$_POST['academicyear']);


	 $count=0;
	
$res =mysqli_query($link,"select * from tblfee where  semester='$semester' AND faculty='$faculty'  AND academicyear='$academicyear'");
$count= mysqli_num_rows($res);

//echo $count;
	if($count == 0){?>
    
    
	<div class="alert alert-error col-lg-6 col-lg-push-3">
        <center>Class Not Register</center>
    </div>
	<?php 
	
	}
		else{
			
  
	  $_SESSION['semester'] = $semester;
	   $_SESSION['faculty'] = $faculty;
	$_SESSION['academicyear'] = $academicyear;
		?>
		<script type="text/javascript">

window.location = "display_students_fee.php";

</script>

		<?php	

}}



?>
     </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->

<?php include("footer.php")?>
        