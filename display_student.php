<?php include("header.php"); ?>





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

/*function printContent(el){



var restorepage = document.body.innerHTML;

var printcontent =  document.getElementById(el).innerHTML;

document.body.innerHTML =  printcontent;

window.print();

document.body.innerHTML =  restorepage;

}

*/

</script>



                    </span>

                            </div>

                        </div>

                    </div>

                </div>


 <div id="div1">
                <div class="clearfix">
                <font size="14px" class="hdstyle">
                 <b>YOUR DATA</b></font>
                                <br />

                                <br />

                </div>

                <div class="row" style="min-height:500px">

                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="x_panel">

                            <div class="x_title">




                                <div class="clearfix"></div>

                            </div>

                            <div class="x_content">



                              <table class="table table-striped table-responsive">
                              <tr>

                              <th>Studentid</th>
                              <th>StudentName</th>
                              <th>Sex</th>
                              <th>Phone</th>
                              <th>Program</th>
                              <th>Faculty</th>
                              <th>Department</th>
                              <th>Semester</th>
                              <th>AcademicYear</th>
                              <th>Term</th>
                              <th>Joindate</th>
                              <th>Account_Fee</th>
                              <th>Account_Exam</th>
                              <th>Image</th>
                              <th colspan="2">Action</th>
                              </tr>

                <?php  include("connection.php");
                               $res = mysqli_query($link,"select * from tblstudent where sid= '".$_SESSION["idx"]."'");


                              while($row=mysqli_fetch_array($res))
                              {
                                ?>

                                <tr>

                                      <td><?php echo $row['sid']; ?></td>
                                        <td><?php echo $row['sname']; ?></td>
                                  <td><?php echo $row['gender']; ?></td>
                                  <td><?php echo $row['phone']; ?></td>
                                  <td><?php echo $row['program']; ?></td>
                                  <td><?php echo $row['faculty']; ?></td>
                                  <td><?php echo $row['dept']; ?></td>
                                  <td><?php echo $row['semester']; ?></td>
                                  <td><?php echo $row['academicyear']; ?></td>
                                  <td><?php echo $row['term']; ?></td>
                                  <td><?php echo $row['joindate']; ?></td>
                                  <td><?php echo $row['account_fee']; ?></td>
                                  <td><?php echo $row['account_exam']; ?></td>
                                <td><?php echo $row['image']; ?></td>

                                  <td style="background: black; font-color:white;">
                                  <a href="update_fee2.php?uid=<?php echo $row['sid'];?>" >FeePayment</a>


                                  </td>



                              <?php } ?>

                              </tr>
                              </table>


    </div>



                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- /page content -->



<?php include("footer.php")?>
