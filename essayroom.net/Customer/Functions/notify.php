<?php
require_once("include/connection.php");

//session_start();
if(!isset($_SESSION["email_address"])){
    header("location:../../index.html");

} else{
    $admin = $_SESSION['email_address'];
}


     


   $userid = mysqli_real_escape_string($conn,$_SESSION['email_address']);

$query="SELECT * FROM chat Where to_user='$userid' order by chatid";
$result_set=mysqli_query($conn,$query);
  while($rw=mysqli_fetch_object($result_set)){

     //$paid_status = $rw['paid_status'];
     //$email_address = $rw['email_address'];

   
  if($rw->to_user==$userid){
 $query1="SELECT * FROM login_user Where email_address='$userid'";
$result_set=mysqli_query($conn,$query1);
            while($row=mysqli_fetch_object($result_set)){

  echo"<script type='text/javascript'>
    $(document).ready(function() {
      var unique_id = $.gritter.add({
        title: 'hey $row->name!',
        text: 'You have a new Message',
        image: 'img/ui-sam.jpg',
        sticky: false,
        time: 5000,
        class_name: 'my-sticky-class'
      });

      return false;
    });
  </script>";
}
}

 }
  ?>
