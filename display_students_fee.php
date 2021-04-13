<?php include("header.php"); 

 include("connection.php");
 
 $res = mysqli_query($link,"select * from tblfee where semester= '".$_SESSION["semester"]."' AND faculty='".$_SESSION["faculty"]."' AND academicyear='".$_SESSION["academicyear"]."' ");



while($row=mysqli_fetch_array($res)){

$faculty = $row['faculty']; 
$semester = $row['semester'];
$academicyear = $row['academicyear']; 


}?>





      

        <div class="right_col" role="main">

            <div class="">

                <div class="page-title">

                    <div class="title_left">

                        <h3></h3>

                    </div>



                    <div class="title_right">

                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">

                            <div class="input-group">

                         

                    <span class="input-group-btn">

                    
 
                    <script>
					


function printContent(el){



var restorepage = document.body.innerHTML;

var printcontent =  document.getElementById(el).innerHTML;

document.body.innerHTML =  printcontent;

window.print();

document.body.innerHTML =  restorepage;

}



</script>

                      <button class="form-control" type="button" onClick="printContent('div1')">Print!</button>

                    </span>

                            </div>

                        </div>

                    </div>

                </div>


 <div id="div1">
                <div class="clearfix">
                <font size="14px" class="hdstyle">
                 <b>CLASS FEE </b></font>
                                <br />
                                 <font size="14px" class="hdstyle">
                                  <b>Report </b>
                                  </font>
                                  </center><br />
                
                </div>

                <div class="row" style="min-height:500px">

                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="x_panel">

                            <div class="x_title">

                                


                                <div class="clearfix"></div>

                            </div>

                            <div class="x_content">

                            <div class="x_content">


                               <?php

							    include("connection.php");

							   $reswhole = mysqli_query($link,"select * from tblfee where  semester='$semester' and faculty='$faculty' and academicyear='$academicyear'");

							   if(mysqli_num_rows($reswhole)){

							   

										
 ?>

 <table class="table" border="1" width="700px">
 <table>


</TR>
<tr>
<th></th><th COLS="2">Faculty:</th><Td><?PHP echo $faculty  ;?></td>
</TR>

<tr>
<th></th><th COLS="2">Semester:</th><TD><?PHP echo $semester  ;?></td>
</TR>

<tr>
<th></th><th COLS="2">Academicyear:</th><TD><?PHP echo $academicyear  ;?></td>
</TR>

</TABLE>

<table class="table table-striped table-responsive" width="800px">
<tr>

<th>Studentid</th>
<th>StudentName</th>
<th>Month</th>
<th>FeePayment</th>
<th>PreviousPayment</th>
<th>BalanceDue</th>
<th>PaymentAmount</th>
<th>ReminderBalance</th>
<th>Date</th>

</tr>

<?php
 include("connection.php");
$res = mysqli_query($link,"select * from tblfee where  semester='".$_SESSION["semester"]."' AND faculty='".$_SESSION["faculty"]."' AND academicyear='".$_SESSION["academicyear"]."'");

while($row=mysqli_fetch_array($res)){
    ?>
	
    <tr>

<td><?php echo $row['sid'];?></td>
<td><?php echo $row['sname'];?></td>
<td><?php echo $row['months'];?></td>
<td><?php echo $row['feepayment'];?></td>
<td><?php echo $row['previouspayment'];?></td>
<td><?php echo $row['balance_due'];?></td>
<td><?php echo $row['payment_amount'];?></td>
<td><?php echo $row['reminder_balance'];?></td>
<td><?php echo $row['dateofpayment'];?></td>
		
			</tr> 
							   <?php }?>

</table>
<table class="table table-striped " width="800px">
<tr>


 
</tr>
<?php   ?>
</table>




							   <?php }
							   
							   
							   
							
else {

 ?>

    

   <!-- ........................................................................ -->

<div class="alert alert-danger col-lg-6 col-lg-push-3">

    <center><strong style="color:white">Not Have fee Yet.</strong></center>

</div>

<?php }?>

    

    

    

    

    

    

    

    </div>

    

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- /page content -->



<?php include("footer.php")?>

        