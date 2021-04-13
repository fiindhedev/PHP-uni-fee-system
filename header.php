<?php
session_start();
$user = $_SESSION['IS_LOGIN'];
if(!$user){
	header('location:login.php');
	die();
}
 include("connection.php");
$res = mysqli_query($link,"select  username,password from admin_user where username= '".$_SESSION["user"]."'");


while($row=mysqli_fetch_array($res)){
$nmstudent = $row['username']; 
$pwdold = $row['password'];

}
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>EAU FEE SYSTEM</title>
      <!-- Custom fonts for this template-->
      <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <!-- Page level plugin CSS-->
      <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
      <!-- Custom styles for this template-->
      <link href="css/sb-admin.css" rel="stylesheet">
   </head>
   <body id="page-top">
      <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
         <a class="navbar-brand mr-1" href="index.php">EAU FEE SYSTEM</a>
         <div class="d-none d-md-inline-block ml-auto"></div>
         <!-- Navbar -->
         <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown no-arrow">
               <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <i class="fas fa-user-circle fa-fw"></i>
               </a>
               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                  <a class="dropdown-item" href="logout.php">Logout</a>
               </div>
            </li>
         </ul>
      </nav>
      <div id="wrapper">
         <!-- Sidebar -->
		   
            
			
         <ul class="sidebar navbar-nav">
            <?php if($_SESSION['ROLE']==1){?>
			<li class="nav-item">
               <a class="nav-link" href="index.php">
               <i class="fas fa fa-home"></i>
               <span>Home</span>
               </a>
            </li>
			<li class="nav-item">
               <a class="nav-link" href="studentreg.php">
               <i class="fas fa-edit"></i>
               <span>StudentReg</span>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="diplay_student.php">
               <i class="fas fa fa-bars"></i>
               <span>Students List</span>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="student.php">
               <i class="fab fa-amazon-pay"></i>
               <span>Fee Payment</span>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="diplay_fee.php">
               <i class="fab fa-gg-circle"></i>
               <span>Fee Data</span>
               </a>
            </li>
			 <li class="nav-item">
               <a class="nav-link" href="Search_student_fee.php">
               <i class="fas fa fa-search"></i>
               <span>Search Student Fee</span>
               </a>
            </li>
			
			 <li class="nav-item">
               <a class="nav-link" href="Search_students_fee.php">
               <i class="fas fa fa-search"></i>
               <span>Search Class Fee</span>
               </a>
            </li>
			
            <li class="nav-item">
               <a class="nav-link" href="faculty.php">
               <i class="fas fa-edit"></i>
               <span>Faculty Reg</span>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="diplay_faculty.php">
               <i class="fas fa fa-bars"></i>
               <span>Faculties List</span>
               </a>
            </li>

          <li class="nav-item">
               <a class="nav-link" href="academic.php">
               <i class="fa fa-edit"></i>
               <span>Academic Year Reg</span></a>
            </li>

            <li class="nav-item">
               <a class="nav-link" href="diplay_academic.php">
               <i class="fa fa-fw fa-newspaper"></i>
               <span>Academic Year List</span></a>
            </li>

            <li class="nav-item">
               <a class="nav-link" href="paymentmode.php">
               <i class=" fab fa-alipay"></i>
               <span>PaymentMode</span>
               </a>
            </li>
			   <li class="nav-item">
               <a class="nav-link" href="diplay_paymentmode.php">
               <i class=" fab fa-alipay"></i>
               <span>PaymentModes</span>
               </a>
            </li>
       
            <li class="nav-item">
               <a class="nav-link" href="account.php">
               <i class=" fab fa-bitcoin"></i>
               <span>Account Reg</span>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="diplay_account.php">
               <i class=" fab fa-bitcoin"></i>
               <span>Accounts List</span>
               </a>
            </li>
           
            <li class="nav-item">
               <a class="nav-link" href="adduser.php">
               <i class="fa fa-fw fa-user"></i>
               <span>Add User</span></a>
            </li>
			
			  <li class="nav-item">
               <a class="nav-link" href="changepassword.php">
               <i class="fa fa-fw fa-user"></i>
               <span>Change Password</span></a>
            </li>
			
			<?php } ?>
         
         </ul>
         <div id="content-wrapper">