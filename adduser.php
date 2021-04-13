
<?php 
include('header.php');
if(isset($_SESSION['ROLE']) && $_SESSION['ROLE']!='1'){
  header('location:index.php');
  die();
}
// session_start();
//connect to database
$db=mysqli_connect("localhost","root","","db_fee");
if(isset($_POST['register_btn']))
{
    $username=mysqli_real_escape_string($db,$_POST['username']);
    $password=mysqli_real_escape_string($db,$_POST['password']);
    $password2=mysqli_real_escape_string($db,$_POST['password2']);
    $role=mysqli_real_escape_string($db,$_POST['role']);  
    $query = "SELECT * FROM admin_user WHERE username = '$username'";
    $result=mysqli_query($db,$query);
      if($result)
      {
     
        if( mysqli_num_rows($result) > 0)
        {
                
                echo '<script language="javascript">';
                echo 'alert("Username already exists")';
                echo '</script>';
        }
        
          else
          {
            
            if($password==$password2)
            {           //Create User
                $password=($password2); //hash password before storing for security purposes
                $sql="INSERT INTO admin_user(username,password, role ) VALUES('$username','$password','$role')"; 
                mysqli_query($db,$sql);  
                $_SESSION['message']="You are now logged in"; 
                $_SESSION['username']=$username;
               // header("location:login.php");  //redirect home page
            }
            else
            {
                $_SESSION['message']="The two password do not match";   
            }
          }
      }
}
?>
<div class="container-fluid">

<main class="main-content">

 <div class="col-md-6 col-md-offset-2">

<?php
    if(isset($_SESSION['message']))
    {
         echo "<div id='error_msg'>".$_SESSION['message']."</div>";
         unset($_SESSION['message']);
    }
?>
<form method="post" action="">
  <table>
     <tr>
           <td>Username : </td>
           <td><input type="text" name="username" class="textInput" required></td>
     </tr>
     <tr>
      <tr>
           <td>Password : </td>
           <td><input type="password" name="password" class="textInput" required></td>
     </tr>
      <tr>
           <td>Password again: </td>
           <td><input type="password" name="password2" class="textInput" required></td>
     </tr>
     <tr>
           <td>role : </td>
           <td><input type="numbar" name="role" class="textInput" required></td>
     </tr>
      <tr>
           <td></td>
           <td><input type="submit" name="register_btn" class="Register" required></td>
     </tr>
    </table>

</form>
</div>

</main>
</div>

</div>
<?php include('footer.php')?>