<!DOCTYPE html>
<html lang="en">
<?php
require_once("include/connection.php");

session_start();
if(!isset($_SESSION["email_address"])){
    header("location:../login.html");

} else{
    $admin = $_SESSION['email_address'];
}
?>
<head>
 
 
 
 
  <link href="css/style.css" rel="stylesheet">
  
</head>

<body>
  
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="dashboard.php" class="logo"><b>Essay<span>Room</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
         
      </div>
     
    </header>




    <?php 

     require_once("include/connection.php");


   $userid = mysqli_real_escape_string($conn,$_SESSION['email_address']);


  $r = mysqli_query($conn,"SELECT * FROM login_user where email_address = '$_SESSION'") or die (mysqli_error($con));

  $row = mysqli_fetch_array($r);

   $email_address=$row['email_address'];
   // $fname=$row['fname'];
   // $lname=$row['lname'];

?>

 