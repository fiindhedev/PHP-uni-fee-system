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
                                <h2>Search Your ID</h2>

                                <div class="clearfix"></div>
                            </div>



                            <div class="x_content">
                <form method="post" action="search_student.php" >

                                 <table class="table table-bordered">

								<tr>Search :<td>
                                <input type="text" placeholder="StudentID" class="form-control" name="txtid">



                                <input type="submit" name="submit1" class="btn btn-default submit" value="Search" required style="background-color:blue; color:white; ">



                                </td></tr>







								</table>
                            </form>
                            </div>

        <?php
if(isset($_POST['submit1'])){
include("connection.php");
$sids  = mysqli_real_escape_string($link,$_POST['txtid']);
//$faculty  = mysqli_real_escape_string($link,$_POST['faculty']);
//$acssms  = mysqli_real_escape_string($link,$_POST['acsms']);

;
	 $count=0;

$res =mysqli_query($link,"select * from tblstudent where sid= '$sids'");
$count= mysqli_num_rows($res);

//echo $count;
	if($count == 0){?>


	<div class="alert alert-error col-lg-6 col-lg-push-3">
        <center>Student Not Registered</center>
    </div>
	<?php

	}
		else{


	  $_SESSION['idx'] = $sids
	 //  $_SESSION['faculty'] = $faculty;
	//  $_SESSION['acsms'] = $acssms;
		?>
		<script type="text/javascript">

window.location = "display_student.php";

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
