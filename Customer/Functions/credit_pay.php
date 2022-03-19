<?php 
 require_once("include/connection.php");
if (isset($_POST['essay_pay'])) { 
$order_amount=$_POST['order_amount'];
$order_id=$_POST['order_id'];
$account_bal=$_POST['account_bal'];
$total_bal=$_POST['total_bal'];
$logi_id=$_POST['logi_id'];
 


           $sql1="INSERT INTO notifications(noti_message,logi_id) VALUES('you Payed for  order $order_id','$logi_id')";

            mysqli_query($conn,"update order_file set paid_status='1',status='2' where order_id='$order_id'")or die(mysqli_error($conn));
 mysqli_query($conn,"update login_user set account_bal='$total_bal' where user_id='$logi_id'")or die(mysqli_error($conn));
            if(mysqli_query($conn, $sql1)){
                   echo  "<meta http-equiv=\"refresh\"content=\"0;URL=dashboard.php\">";
                   
                   }
            
          }
?>