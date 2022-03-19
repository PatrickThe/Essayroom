<?php
 
  require_once("include/connection.php");




if (isset($_POST['upload'])) { // if save button on the form is clicked
    // name of the uploaded file

  $order_id = $_POST['order_id'];
  $filename = $_FILES['myfile']['name'];
$destination = '../Customer/Order/uploads/' . $filename;
$extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server 
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

if (move_uploaded_file($file, $destination)) {
 //$sql1 = "INSERT INTO customer_file (NAME,SIZE,order_id) VALUES ('$filename','$SIZE','$order_id')";
       mysqli_query($conn,"INSERT INTO customer_file (NAME,SIZE,order_id) VALUES ('$filename','$SIZE','$order_id')")or die(mysqli_error($conn));
                              
echo  "<meta http-equiv=\"refresh\"content=\"0;URL=order_file.php\">";
           

}
     else{

        echo "not okay";
     }      
    }




if (isset($_POST['cancel_order'])) {
 $order_id = $_POST['order_id'];
 $user_id=$_POST['user_id'];
 

 //$sql2 = "UPDATE refund_order SET status= '1' WHERE  order_id='$order_id'";
 mysqli_query($conn,"INSERT INTO notifications(noti_message,logi_id) VALUES('money refunded for order $order_id','$user_id')")or die(mysqli_error($conn));
$sql1 = "UPDATE refund_order SET status= '1' WHERE  order_id='$order_id'";
                  



                    if (mysqli_query($conn,$sql1)) {
                   echo  "<meta http-equiv=\"refresh\"content=\"0;URL=cancelled_orders.php\">";

            }

   }
?>