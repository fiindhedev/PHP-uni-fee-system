<?php include("header.php"); 

 include("connection.php");
 
 $res = mysqli_query($link,"select s_id, s_name,s_semester,batch,s_department,s_class from student where s_id= '".$_SESSION["idx"]."'");


while($row=mysqli_fetch_array($res)){
$idstudents = $row['s_id'];
$nmstudents = $row['s_name'];
$smster = $_SESSION['acsms'];
$batshstd = $row['batch']; 
$dpetstd = $row['s_department']; 
$classstd = $row['s_class']; 




}



?>

      

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
                 <b>Faculty Computer Science </b></font>
                                <br />
                                 <font size="14px" class="hdstyle">
                                  <b>Report Attandance </b>
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

                           

                               <?php

							   

							   $reswhole = mysqli_query($link,"select * from tblattandance_months where semester='$smster' and sid= $_SESSION[idx]");

							   if(mysqli_num_rows($reswhole)){

							   

							   

							   

							   

	//Septermber 						   

	   $ressm1 = mysqli_query($link,"select *  from tblattandance_months where semester='$smster' and sid= $_SESSION[idx] and months='September'");

							   if(mysqli_num_rows($ressm1)){

							   						   

$res = mysqli_query($link,"select *  from tblattandance_months where semester='$smster' and sid= $_SESSION[idx] and months='September'");





echo"<table class = 'table table-bordered' data-role='table' data-mode='columntoggle'>";

echo"<tr bgcolor='#ade5ad' bordercolor='#ade5ad' class='tbl'>";



$sqlcrs = mysqli_query($link,"select COUNT(course)  from tblattandance_months where semester='$smster' and sid= $_SESSION[idx] and months='September'");

							   if($row = mysqli_fetch_array($sqlcrs)){

								   $CRS= $row['COUNT(course)'];

								   

echo "<th class='priority-1'>";echo "Course: $CRS"; echo "</th>";}

echo "<th class='priority-2'>";echo "Month: September"; echo"</th>";



$sqlgpa = mysqli_query($link,"select SUM(absent) from  tblattandance_months where semester='$smster' and sid= $_SESSION[idx] and months='September'");

							   if($row = mysqli_fetch_array($sqlgpa)){

								$crd= $row['SUM(absent)'];

							   echo "<th class='priority-3'>";echo"Absent: ",$crd; echo"</th>";}

							  













												



echo"</tr>";

// row hoose

echo"<tr bgcolor='#d7d7ff'>";

echo "<th class='priority-1'>";echo "Course"; echo "</th>";

echo "<th class='priority-3'>";echo"LecturerName"; echo"</th>";

echo "<th class='priority-2' >";echo"Absent"; echo"</th>";





echo"</tr>";

while($row=mysqli_fetch_array($res)){

echo"<tr>";

echo "<td class='priority-1'>";echo $row["course"]; echo "</td>";

echo "<td class='priority-3'>";echo $row["Lecturer_Name"]; echo"</td>";

echo "<td class='priority-2'>";echo $row["absent"]; echo"</td>";



echo"</tr>";

}

echo"</table>";

							   }





							   

//dhmaad  total

							   

 ?>

 <?PHP

 // october 						   

	   $ressm1 = mysqli_query($link,"select *  from tblattandance_months where semester='$smster' and sid= $_SESSION[idx] and months='October'");

							   if(mysqli_num_rows($ressm1)){

							   						   

$res = mysqli_query($link,"select *  from tblattandance_months where semester='$smster' and sid= $_SESSION[idx] and months='October'");





echo"<table class = 'table table-bordered' data-role='table' data-mode='columntoggle'>";

echo"<tr bgcolor='#ade5ad' bordercolor='#ade5ad' class='tbl'>";



$sqlcrs = mysqli_query($link,"select COUNT(course)  from tblattandance_months where semester='$smster' and sid= $_SESSION[idx] and months='October'");

							   if($row = mysqli_fetch_array($sqlcrs)){

								   $CRS= $row['COUNT(course)'];

								   

echo "<th class='priority-1'>";echo "Course: $CRS"; echo "</th>";}

echo "<th class='priority-2'>";echo "Month: October"; echo"</th>";



$sqlgpa = mysqli_query($link,"select SUM(absent) from  tblattandance_months where semester='$smster' and sid= $_SESSION[idx] and months='October'");

							   if($row = mysqli_fetch_array($sqlgpa)){

								$crd= $row['SUM(absent)'];

							   echo "<th class='priority-3'>";echo"Absent: ",$crd; echo"</th>";}

							  













												



echo"</tr>";

// row hoose

echo"<tr bgcolor='#d7d7ff'>";

echo "<th class='priority-1'>";echo "Course"; echo "</th>";

echo "<th class='priority-3'>";echo"LecturerName"; echo"</th>";

echo "<th class='priority-2' >";echo"Absent"; echo"</th>";





echo"</tr>";

while($row=mysqli_fetch_array($res)){

echo"<tr>";

echo "<td class='priority-1'>";echo $row["course"]; echo "</td>";

echo "<td class='priority-3'>";echo $row["Lecturer_Name"]; echo"</td>";

echo "<td class='priority-2'>";echo $row["absent"]; echo"</td>";



echo"</tr>";

}

echo"</table>";

							   }





							   

//dhmaad  total

							   

 ?>

 

  <?PHP

 // November 						   

	   $ressm1 = mysqli_query($link,"select *  from tblattandance_months where semester='$smster' and sid= $_SESSION[idx] and months='November'");

							   if(mysqli_num_rows($ressm1)){

							   						   

$res = mysqli_query($link,"select *  from tblattandance_months where semester='$smster' and sid= $_SESSION[idx] and months='November'");





echo"<table class = 'table table-bordered' data-role='table' data-mode='columntoggle'>";

echo"<tr bgcolor='#ade5ad' bordercolor='#ade5ad' class='tbl'>";



$sqlcrs = mysqli_query($link,"select COUNT(course)  from tblattandance_months where semester='$smster' and sid= $_SESSION[idx] and months='November'");

							   if($row = mysqli_fetch_array($sqlcrs)){

								   $CRS= $row['COUNT(course)'];

								   

echo "<th class='priority-1'>";echo "Course: $CRS"; echo "</th>";}

echo "<th class='priority-2'>";echo "Month: November"; echo"</th>";



$sqlgpa = mysqli_query($link,"select SUM(absent) from  tblattandance_months where semester='$smster' and sid= $_SESSION[idx] and months='November'");

							   if($row = mysqli_fetch_array($sqlgpa)){

								$crd= $row['SUM(absent)'];

							   echo "<th class='priority-3'>";echo"Absent: ",$crd; echo"</th>";}

							  













												



echo"</tr>";

// row hoose

echo"<tr bgcolor='#d7d7ff'>";

echo "<th class='priority-1'>";echo "Course"; echo "</th>";

echo "<th class='priority-3'>";echo"LecturerName"; echo"</th>";

echo "<th class='priority-2' >";echo"Absent"; echo"</th>";





echo"</tr>";

while($row=mysqli_fetch_array($res)){

echo"<tr>";

echo "<td class='priority-1'>";echo $row["course"]; echo "</td>";

echo "<td class='priority-3'>";echo $row["Lecturer_Name"]; echo"</td>";

echo "<td class='priority-2'>";echo $row["absent"]; echo"</td>";



echo"</tr>";

}

echo"</table>";

							   }





							   

//dhmaad  total

							   

 ?>

 

  <?PHP

 // December						   

	   $ressm1 = mysqli_query($link,"select *  from tblattandance_months where semester='$smster' and sid= $_SESSION[idx] and months='December'");

							   if(mysqli_num_rows($ressm1)){

							   						   

$res = mysqli_query($link,"select *  from tblattandance_months where semester='$smster' and sid= $_SESSION[idx] and months='December'");





echo"<table class = 'table table-bordered' data-role='table' data-mode='columntoggle'>";

echo"<tr bgcolor='#ade5ad' bordercolor='#ade5ad' class='tbl'>";



$sqlcrs = mysqli_query($link,"select COUNT(course)  from tblattandance_months where semester='$smster' and sid= $_SESSION[idx] and months='December'");

							   if($row = mysqli_fetch_array($sqlcrs)){

								   $CRS= $row['COUNT(course)'];

								   

echo "<th class='priority-1'>";echo "Course: $CRS"; echo "</th>";}

echo "<th class='priority-2'>";echo "Month: December"; echo"</th>";



$sqlgpa = mysqli_query($link,"select SUM(absent) from  tblattandance_months where semester='$smster' and sid= $_SESSION[idx] and months='December'");

							   if($row = mysqli_fetch_array($sqlgpa)){

								$crd= $row['SUM(absent)'];

							   echo "<th class='priority-3'>";echo"Absent: ",$crd; echo"</th>";}

							  













												



echo"</tr>";

// row hoose

echo"<tr bgcolor='#d7d7ff'>";

echo "<th class='priority-1'>";echo "Course"; echo "</th>";

echo "<th class='priority-3'>";echo"LecturerName"; echo"</th>";

echo "<th class='priority-2' >";echo"Absent"; echo"</th>";





echo"</tr>";

while($row=mysqli_fetch_array($res)){

echo"<tr>";

echo "<td class='priority-1'>";echo $row["course"]; echo "</td>";

echo "<td class='priority-3'>";echo $row["Lecturer_Name"]; echo"</td>";

echo "<td class='priority-2'>";echo $row["absent"]; echo"</td>";



echo"</tr>";

}

echo"</table>";

							   }





							   

//dhmaad  total

							   

 ?>

 

  <?PHP

 // January						   

	   $ressm1 = mysqli_query($link,"select *  from tblattandance_months where semester='$smster' and sid= $_SESSION[idx] and months='January'");

							   if(mysqli_num_rows($ressm1)){

							   						   

$res = mysqli_query($link,"select *  from tblattandance_months where semester='$smster' and sid= $_SESSION[idx] and months='January'");





echo"<table class = 'table table-bordered' data-role='table' data-mode='columntoggle'>";

echo"<tr bgcolor='#ade5ad' bordercolor='#ade5ad' class='tbl'>";



$sqlcrs = mysqli_query($link,"select COUNT(course)  from tblattandance_months where semester='$smster' and sid= $_SESSION[idx] and months='January'");

							   if($row = mysqli_fetch_array($sqlcrs)){

								   $CRS= $row['COUNT(course)'];

								   

echo "<th class='priority-1'>";echo "Course: $CRS"; echo "</th>";}

echo "<th class='priority-2'>";echo "Month: January"; echo"</th>";



$sqlgpa = mysqli_query($link,"select SUM(absent) from  tblattandance_months where semester='$smster' and sid= $_SESSION[idx] and months='January'");

							   if($row = mysqli_fetch_array($sqlgpa)){

								$crd= $row['SUM(absent)'];

							   echo "<th class='priority-3'>";echo"Absent: ",$crd; echo"</th>";}

							  













												



echo"</tr>";

// row hoose

echo"<tr bgcolor='#d7d7ff'>";

echo "<th class='priority-1'>";echo "Course"; echo "</th>";

echo "<th class='priority-3'>";echo"LecturerName"; echo"</th>";

echo "<th class='priority-2' >";echo"Absent"; echo"</th>";





echo"</tr>";

while($row=mysqli_fetch_array($res)){

echo"<tr>";

echo "<td class='priority-1'>";echo $row["course"]; echo "</td>";

echo "<td class='priority-3'>";echo $row["Lecturer_Name"]; echo"</td>";

echo "<td class='priority-2'>";echo $row["absent"]; echo"</td>";



echo"</tr>";

}

echo"</table>";

							   }





							   

//dhamdaad term kii kowaad

							   

 ?>

 

  <?PHP

 // Febuary 						   

	   $ressm1 = mysqli_query($link,"select *  from tblattandance_months where semester='$smster' and sid= $_SESSION[idx] and months='Febuary'");

							   if(mysqli_num_rows($ressm1)){

							   						   

$res = mysqli_query($link,"select *  from tblattandance_months where semester='$smster' and sid= $_SESSION[idx] and months='Febuary'");





echo"<table class = 'table table-bordered' data-role='table' data-mode='columntoggle'>";

echo"<tr bgcolor='#ade5ad' bordercolor='#ade5ad' class='tbl'>";



$sqlcrs = mysqli_query($link,"select COUNT(course)  from tblattandance_months where semester='$smster' and sid= $_SESSION[idx] and months='Febuary'");

							   if($row = mysqli_fetch_array($sqlcrs)){

								   $CRS= $row['COUNT(course)'];

								   

echo "<th class='priority-1'>";echo "Course: $CRS"; echo "</th>";}

echo "<th class='priority-2'>";echo "Month: Febuary"; echo"</th>";



$sqlgpa = mysqli_query($link,"select SUM(absent) from  tblattandance_months where semester='$smster' and sid= $_SESSION[idx] and months='Febuary'");

							   if($row = mysqli_fetch_array($sqlgpa)){

								$crd= $row['SUM(absent)'];

							   echo "<th class='priority-3'>";echo"Absent: ",$crd; echo"</th>";}

							  













												



echo"</tr>";

// row hoose

echo"<tr bgcolor='#d7d7ff'>";

echo "<th class='priority-1'>";echo "Course"; echo "</th>";

echo "<th class='priority-3'>";echo"LecturerName"; echo"</th>";

echo "<th class='priority-2' >";echo"Absent"; echo"</th>";





echo"</tr>";

while($row=mysqli_fetch_array($res)){

echo"<tr>";

echo "<td class='priority-1'>";echo $row["course"]; echo "</td>";

echo "<td class='priority-3'>";echo $row["Lecturer_Name"]; echo"</td>";

echo "<td class='priority-2'>";echo $row["absent"]; echo"</td>";



echo"</tr>";

}

echo"</table>";

							   }





							   

//dhmaad  total

							   

 ?>

 

  <?PHP

 // March						   

	   $ressm1 = mysqli_query($link,"select *  from tblattandance_months where semester='$smster' and sid= $_SESSION[idx] and months='March'");

							   if(mysqli_num_rows($ressm1)){

							   						   

$res = mysqli_query($link,"select *  from tblattandance_months where semester='$smster' and sid= $_SESSION[idx] and months='March'");





echo"<table class = 'table table-bordered' data-role='table' data-mode='columntoggle'>";

echo"<tr bgcolor='#ade5ad' bordercolor='#ade5ad' class='tbl'>";



$sqlcrs = mysqli_query($link,"select COUNT(course)  from tblattandance_months where semester='$smster' and sid= $_SESSION[idx] and months='March'");

							   if($row = mysqli_fetch_array($sqlcrs)){

								   $CRS= $row['COUNT(course)'];

								   

echo "<th class='priority-1'>";echo "Course: $CRS"; echo "</th>";}

echo "<th class='priority-2'>";echo "Month: March"; echo"</th>";



$sqlgpa = mysqli_query($link,"select SUM(absent) from  tblattandance_months where semester='$smster' and sid= $_SESSION[idx] and months='March'");

							   if($row = mysqli_fetch_array($sqlgpa)){

								$crd= $row['SUM(absent)'];

							   echo "<th class='priority-3'>";echo"Absent: ",$crd; echo"</th>";}

							  













												



echo"</tr>";

// row hoose

echo"<tr bgcolor='#d7d7ff'>";

echo "<th class='priority-1'>";echo "Course"; echo "</th>";

echo "<th class='priority-3'>";echo"LecturerName"; echo"</th>";

echo "<th class='priority-2' >";echo"Absent"; echo"</th>";





echo"</tr>";

while($row=mysqli_fetch_array($res)){

echo"<tr>";

echo "<td class='priority-1'>";echo $row["course"]; echo "</td>";

echo "<td class='priority-3'>";echo $row["Lecturer_Name"]; echo"</td>";

echo "<td class='priority-2'>";echo $row["absent"]; echo"</td>";



echo"</tr>";

}

echo"</table>";

							   }





							   

//dhmaad  total

							   

 ?>

 

  <?PHP

 // April						   

	   $ressm1 = mysqli_query($link,"select *  from tblattandance_months where semester='$smster' and sid= $_SESSION[idx] and months='April'");

							   if(mysqli_num_rows($ressm1)){

							   						   

$res = mysqli_query($link,"select *  from tblattandance_months where semester='$smster' and sid= $_SESSION[idx] and months='April'");





echo"<table class = 'table table-bordered' data-role='table' data-mode='columntoggle'>";

echo"<tr bgcolor='#ade5ad' bordercolor='#ade5ad' class='tbl'>";



$sqlcrs = mysqli_query($link,"select COUNT(course)  from tblattandance_months where semester='$smster' and sid= $_SESSION[idx] and months='April'");

							   if($row = mysqli_fetch_array($sqlcrs)){

								   $CRS= $row['COUNT(course)'];

								   

echo "<th class='priority-1'>";echo "Course: $CRS"; echo "</th>";}

echo "<th class='priority-2'>";echo "Month: April"; echo"</th>";



$sqlgpa = mysqli_query($link,"select SUM(absent) from  tblattandance_months where semester='$smster' and sid= $_SESSION[idx] and months='April'");

							   if($row = mysqli_fetch_array($sqlgpa)){

								$crd= $row['SUM(absent)'];

							   echo "<th class='priority-3'>";echo"Absent: ",$crd; echo"</th>";}

							  













												



echo"</tr>";

// row hoose

echo"<tr bgcolor='#d7d7ff'>";

echo "<th class='priority-1'>";echo "Course"; echo "</th>";

echo "<th class='priority-3'>";echo"LecturerName"; echo"</th>";

echo "<th class='priority-2' >";echo"Absent"; echo"</th>";





echo"</tr>";

while($row=mysqli_fetch_array($res)){

echo"<tr>";

echo "<td class='priority-1'>";echo $row["course"]; echo "</td>";

echo "<td class='priority-3'>";echo $row["Lecturer_Name"]; echo"</td>";

echo "<td class='priority-2'>";echo $row["absent"]; echo"</td>";



echo"</tr>";

}

echo"</table>";

							   }





							   

//dhmaad  total

							   

 ?>

 

  <?PHP

 // May						   

	   $ressm1 = mysqli_query($link,"select *  from tblattandance_months where semester='$smster' and sid= $_SESSION[idx] and months='May'");

							   if(mysqli_num_rows($ressm1)){

							   						   

$res = mysqli_query($link,"select *  from tblattandance_months where semester='$smster' and sid= $_SESSION[idx] and months='May'");





echo"<table class = 'table table-bordered' data-role='table' data-mode='columntoggle'>";

echo"<tr bgcolor='#ade5ad' bordercolor='#ade5ad' class='tbl'>";



$sqlcrs = mysqli_query($link,"select COUNT(course)  from tblattandance_months where semester='$smster' and sid= $_SESSION[idx] and months='May'");

							   if($row = mysqli_fetch_array($sqlcrs)){

								   $CRS= $row['COUNT(course)'];

								   

echo "<th class='priority-1'>";echo "Course: $CRS"; echo "</th>";}

echo "<th class='priority-2'>";echo "Month: May"; echo"</th>";



$sqlgpa = mysqli_query($link,"select SUM(absent) from  tblattandance_months where semester='$smster' and sid= $_SESSION[idx] and months='May'");

							   if($row = mysqli_fetch_array($sqlgpa)){

								$crd= $row['SUM(absent)'];

							   echo "<th class='priority-3'>";echo"Absent: ",$crd; echo"</th>";}

							  













												



echo"</tr>";

// row hoose

echo"<tr bgcolor='#d7d7ff'>";

echo "<th class='priority-1'>";echo "Course"; echo "</th>";

echo "<th class='priority-3'>";echo"LecturerName"; echo"</th>";

echo "<th class='priority-2' >";echo"Absent"; echo"</th>";





echo"</tr>";

while($row=mysqli_fetch_array($res)){

echo"<tr>";

echo "<td class='priority-1'>";echo $row["course"]; echo "</td>";

echo "<td class='priority-3'>";echo $row["Lecturer_Name"]; echo"</td>";

echo "<td class='priority-2'>";echo $row["absent"]; echo"</td>";



echo"</tr>";

}

echo"</table>";

							   }





							   

//dhmaad  total

							   

 ?>

 

  <?PHP

 // June 						   

	   $ressm1 = mysqli_query($link,"select *  from tblattandance_months where semester='$smster' and sid= $_SESSION[idx] and months='June'");

							   if(mysqli_num_rows($ressm1)){

							   						   

$res = mysqli_query($link,"select *  from tblattandance_months where semester='$smster' and sid= $_SESSION[idx] and months='June'");





echo"<table class = 'table table-bordered' data-role='table' data-mode='columntoggle'>";

echo"<tr bgcolor='#ade5ad' bordercolor='#ade5ad' class='tbl'>";



$sqlcrs = mysqli_query($link,"select COUNT(course)  from tblattandance_months where semester='$smster' and sid= $_SESSION[idx] and months='June'");

							   if($row = mysqli_fetch_array($sqlcrs)){

								   $CRS= $row['COUNT(course)'];

								   

echo "<th class='priority-1'>";echo "Course: $CRS"; echo "</th>";}

echo "<th class='priority-2'>";echo "Month: June"; echo"</th>";



$sqlgpa = mysqli_query($link,"select SUM(absent) from  tblattandance_months where semester='$smster' and sid= $_SESSION[idx] and months='June'");

							   if($row = mysqli_fetch_array($sqlgpa)){

								$crd= $row['SUM(absent)'];

							   echo "<th class='priority-3'>";echo"Absent: ",$crd; echo"</th>";}

							  













												



echo"</tr>";

// row hoose

echo"<tr bgcolor='#d7d7ff'>";

echo "<th class='priority-1'>";echo "Course"; echo "</th>";

echo "<th class='priority-3'>";echo"LecturerName"; echo"</th>";

echo "<th class='priority-2' >";echo"Absent"; echo"</th>";





echo"</tr>";

while($row=mysqli_fetch_array($res)){

echo"<tr>";

echo "<td class='priority-1'>";echo $row["course"]; echo "</td>";

echo "<td class='priority-3'>";echo $row["Lecturer_Name"]; echo"</td>";

echo "<td class='priority-2'>";echo $row["absent"]; echo"</td>";



echo"</tr>";

}

echo"</table>";

							   }





							   

//dhmaad  total

							   

 ?>

 

  <?PHP

  echo"<table class = 'table table-bordered' data-role='table' data-mode='columntoggle'>";

 // gabagabadi jawabta dhan 						   

	   $ressm1 = mysqli_query($link,"select *  from tblattandance_months where semester='$smster' and sid= $_SESSION[idx]");

							   if(mysqli_num_rows($ressm1)){

							   						   

$sqlttl= mysqli_query($link,"select SUM(absent)  from tblattandance_months where semester='$smster' and sid= $_SESSION[idx] ");

							   if($row = mysqli_fetch_array($sqlttl)){

								   $ttl= $row['SUM(absent)'];										

echo"</tr>";

// row hoose

echo"<tr bgcolor='#fab368' bordercolor='#ade5ad' class='tbl'>";

echo "<th class='priority-1'>";echo "StudentName"; echo "</th>";

echo "<th class='priority-2' >";echo"Total Absent"; echo"</th>";





echo"</tr>";



echo"<tr>";

echo "<td class='priority-1'>";echo $nmstudents; echo "</td>";;

echo "<td class='priority-2'>";echo $ttl; echo"</td>";



echo"</tr>";

							   }

echo"</table>";

							   }
echo"<br>";
echo"<br>";
echo"<span>____________________________ </span><br>";
echo"<span> $Namesss </span><br>";
echo"<span>$deanfacylty</span><br>";		




							   

//dhmaad  total

							   

 ?>

 

 

 

 

 

 

 

 

 

 <?php }





else {

 ?>

    

   <!-- ........................................................................ -->

<div class="alert alert-danger col-lg-6 col-lg-push-3">

    <center><strong style="color:white">Not Have Attandance Yet.</strong></center>

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

        