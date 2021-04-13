<?php 
include('header.php');

?>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">


  
    <section class="content">
      <div class="container-fluid">
 
      <div class="col-md-12">
								<!--begin::Portlet-->
								<div class="m-portlet m-portlet--tab">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<span class="m-portlet__head-icon m--hide">
													<i class="la la-gear"></i>
												</span>
											
											</div>
										</div>
									</div>
									<!--begin::Form-->
									<form id="form_mcc" class="m-form m-form--state m-form--fit m-form--label-align-right m-form--group-seperator-dashed">
										<div class="m-portlet__body" style="padding-bottom: 0;">

											<div class="form-group m-form__group row">
												<div class="col-lg-2">
                                                <label for="faculty" class="form-control-label">
                                                        * Faculty:
                                                    </label>
                                                    <select class="form-control" id="faculty" name="faculty" required value="<?php if(isset($_POST['faculty'])){ echo $_POST['faculty'];}?>">
                                                        <option value=""></option>
                                                   <?php 
                                                  require_once("connection.php");
                                                  $cats = mysqli_query($link, "select faculty from tblfaculty");
                                                  while($row = mysqli_fetch_array($cats)){  ?>
                                                   <option value="<?php echo $row['faculty']; ?>"><?php echo $row['faculty']; ?></option>
                                                    <?php } ?>
                                                    </select>
												</div>

                                                <div class="col-lg-2">
                                                <label for="semester" class="form-control-label">
                                                        * Semester:
                                                    </label>
                                                    <select class="form-control" id="semester" name="semester" required value="<?php if(isset($_POST['semester'])){ echo $_POST['semester'];}?>"/>
                                           <option value="1">1</option>
                                                <option value="2">2</option>
                                                      <option value="3">3</option>
                                             <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                               <option value="7">7</option>
                                               <option value="8">8</option>
                                                    </select>
												</div>
											
										
											</div>
                                            <br>
											<div class="m-form__actions m-form__actions">
												<div class="row">															
													<div class="col-lg-5"></div>
													<div class="col-lg-5">
														<button type="submit" class="btn btn-primary" name="btngenerate">
															Generate
														</button>

                            <button type="button" class="btn btn-success" id="export" onclick="window.location.href = '../api/export.php';">
                                                        	<i class="fa fa-cloud-download"></i> Export Jv Upload
											        	                         </button>
													</div>
												</div>
											</div>

                                            <br>

                     

											
											<div id="print_mcc">

											<div id="original" class="col-lg-12">

											
												
												<div>
													<h2 style="font-weight: 600; text-align: center;">Merchandise Report Report</h2>
												</div>

												<table width="100%" style="margin: 5px; text-align: center;">
													<tr>
														<td width="20%" style="text-align: right; font-weight: 600;">From: &nbsp;</td>
							                    		<td width="30%" id="from_output" style="text-align: left; font-weight: 500;"></td> 
							                    		<td width="20%" style="text-align: right; font-weight: 600;">To: &nbsp;</td>
							                    		<td width="30%" id="to_output" style="text-align: left; font-weight: 500;"></td>
						                    		</tr>
												</table>

                                                <!-- <br> -->
                                                
						                    	

						                    	<br>
                                
                                  <span id="statement_export">

						                    	<table id="tblmcc" class='table table-bordered' data-plugin='dataTable' width="100%"  border='2px' cellspacing="0" cellpadding="10px" >
						                    		<thead>
							                    		<tr style="text-align: center;">
							                    			<th style="font-weight: 600;text-align: center;">Customer</th>
							                    			
							                    			<th style="font-weight: 600;text-align: center;">Card No</th>
							                    			
							                    			<th style="font-weight: 600;text-align: center;">Account NO</th>
							                    			<th style="font-weight: 600;text-align: center;">Address</th>
							                    			<th style="font-weight: 600;text-align: center;">Phone</th>
                                                            <th style="font-weight: 600;text-align: center;">Tran Date</th>
							                    			
							                    			<th style="font-weight: 600;text-align: center;">Amount</th>
							                    			
							                    			<th style="font-weight: 600;text-align: center;">MCC</th>
							                    			<th style="font-weight: 600;text-align: center;">Merchandise</th>
							                    			<th style="font-weight: 600;text-align: center;">Country</th>
                                        <th style="font-weight: 600;text-align: center;">Creation Date</th>
							                    		
							                    		</tr>
						                    		</thead>
						                    		<tbody>
						                    		</tbody>						                    		
						                    	</table>
						                    	<br>
						                    	</span>
						                    	<!-- <img id="image" src="../../uploads/footer.png" alt="" width="100%" /> -->

                                            </div>

                                        	</div>

										</div>
										<div class="m-portlet__foot m-portlet__foot--fit">
                                            <div class="m-form__actions m-form__actions">
                                                <div class="row">
                                                	<div class="col-lg-5"></div>
                                                    <div class="col-lg-5">
                                                        <button type="submit" id="print" class="btn btn-primary">
                                                            <i class="fa fa-print"></i> Print
                                                        </button>
                                                        <button type="button" class="btn btn-success" id="export">
                                                        	<i class="fa fa-cloud-download"></i> Export
											                                 	</button>
                                                        <button type="reset" class="btn btn-secondary">
                                                            Cancel
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
									</form>
									<!--end::Form-->
								</div>    
      </div>
     
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
<?php include('footer.php')?>

 <script type="text/javascript" src="../js/mcc_charge_report.js"></script>
</body>
</html>
