<?php
// connect to the database
require_once("include/connection.php");

// Uploads files
if (isset($_POST['save'])) { // if save button on the form is clicked
    // name of the uploaded file

  $task_id = $_POST['task_id'];
  $topic=$_POST['topic'];
   $subject_id =$_POST['subject_id'];
  $order_pages=$_POST['order_pages'];
   $deadline_id =$_POST['deadline_id'];
  $academic_level_id=$_POST['academic_level_id'];
   $quality_id = $_POST['quality_id'];
  $order_sources=$_POST['order_sources'];
   $order_pptslides =$_POST['order_pptslides'];
  $order_citation=$_POST['order_citation'];
   $order_instructions = $_POST['order_instructions'];
   $order_amount=$_POST['order_amount'];
    $email_address=$_POST['email_address'];
  $order_id=$_POST['order_id'];
  //$endDate=$_POST['endDate'];
  //$ip = $_SERVER["HTTP_CLIENT_IP"];
  $host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$ip = $_SERVER["REMOTE_ADDR"];
    $filename = $_FILES['myfile']['name'];
 $user_id = $_POST['user_id'];
  $date = date("M-d-Y h:i A",strtotime("+0 HOURS"));
     $endDate=date('Y-m-d H:i',strtotime($deadline_id,strtotime($date)));






    $destination = '../Order/uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server 
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];


    if ($_FILES['myfile']['size'] > 800000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else{


  $query=mysqli_query($conn,"SELECT * FROM `order_file` WHERE `order_id` = '$order_id'")or die(mysqli_error($conn));
           $counter=mysqli_num_rows($query);
            
            if ($counter == 1) 
              { 
                   echo '
                <script type = "text/javascript">
                    alert("There was a problem.Please try Again");
                    window.location = "dashboard.php";
                </script>


               ';
              } 
      
        date_default_timezone_set("Africa/Nairobi");
         $time = date("M-d-Y h:i A",strtotime("+0 HOURS"));
         $start = $time;
     $endDate=date('Y-m-d H:i',strtotime($deadline_id,strtotime($start)));
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO order_file (name, size, download,task_id,topic,subject_id,order_pages,deadline_id,academic_level_id,quality_id,order_sources,order_pptslides,order_citation,order_instructions,email_address,order_amount,order_id,host,ip,endDate) VALUES ('$filename', '$size',0,'$task_id','$topic','$subject_id','$order_pages','$deadline_id','$academic_level_id','$quality_id','$order_sources','$order_pptslides','$order_citation','$order_instructions','$email_address','$order_amount','$order_id','$host','$ip','$endDate')";
       
              

      
                       mysqli_query($conn,"INSERT INTO activity_log(user_type,ip,host,activity) VALUES('Customer','$ip','$host','Placed Order')")or die(mysqli_error($conn));
                        mysqli_query($conn,"INSERT INTO notifications(noti_message,logi_id) VALUES('made new order $order_id','$user_id')")or die(mysqli_error($conn));
               
    



            if (mysqli_query($conn, $sql)) {
                   echo '
                     <script type = "text/javascript">

                    window.location = "dashboard.php";
                </script>';

            }
        } 

        else {
            





            
            $sql1 = "INSERT INTO order_file (download,task_id,topic,subject_id,order_pages,deadline_id,academic_level_id,quality_id,order_sources,order_pptslides,order_citation,order_instructions,email_address,order_amount,order_id,host,ip,endDate) VALUES (0,'$task_id','$topic','$subject_id','$order_pages','$deadline_id','$academic_level_id','$quality_id','$order_sources','$order_pptslides','$order_citation','$order_instructions','$email_address','$order_amount','$order_id','$host','$ip','$endDate')";
       
              
 mysqli_query($conn,"INSERT INTO notifications(noti_message,logi_id) VALUES('made new order $order_id','$user_id')")or die(mysqli_error($conn));
               
      
                       mysqli_query($conn,"INSERT INTO activity_log(user_type,ip,host,activity) VALUES('Customer','$ip','$host','Placed Order')")or die(mysqli_error($conn));
    

            if (mysqli_query($conn, $sql1)) {
                   echo '
                     <script type = "text/javascript">
                    window.location = "dashboard.php";
                </script>';

            }
        
        }
    
  }
}




if (isset($_POST['delete'])) { 
$ID=$_POST['ID'];
$logi_id=$_POST['logi_id'];
 


           $sql1="INSERT INTO notifications(noti_message,logi_id) VALUES('you deleted order','$logi_id')";
 mysqli_query($conn,"delete from `order_file` where `ID`='$ID'")or die(mysqli_error($conn));
            if(mysqli_query($conn, $sql1)){
                   echo  "<meta http-equiv=\"refresh\"content=\"0;URL=dashboard.php\">";
                   
                   }
            
          }

        



    if (isset($_POST['editprof'])) { // if save button on the form is clicked
    
$name =$_POST['name'];
$email_address =$_POST['email_address'];
//$user_password = password_hash($_POST['user_password'],PASSWORD_DEFAULT, array('cost' => 12));
$filename = $_FILES['myfile']['name'];

    $destination = 'uploads/' . $filename;
    $extension = pathinfo($filename, PATHINFO_EXTENSION);
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];


 if (move_uploaded_file($file, $destination)) {
 mysqli_query($conn,"UPDATE login_user SET name= '$name',size= '$size',avarta= '$filename'WHERE  email_address='$email_address'")or die(mysqli_error($conn));
            
                   echo  "<meta http-equiv=\"refresh\"content=\"0;URL=profile.php\">";
}
else{
 mysqli_query($conn,"UPDATE login_user SET name= '$name',user_password= '$user_password' WHERE  email_address='$email_address'")or die(mysqli_error($conn));
            
                   echo  "<meta http-equiv=\"refresh\"content=\"0;URL=profile.php\">";

}
}




if (isset($_POST['changepass'])) { // if save button on the form is clicked
    
//$password1 =$_POST['password1'];
$email_address =$_POST['email_address'];
 //$user_password = mysqli_real_escape_string($conn, $_POST["user_password"]);
$user_password = password_hash($_POST['user_password'],PASSWORD_DEFAULT, array('cost' => 12));
 mysqli_query($conn,"UPDATE login_user SET user_password= '$user_password' WHERE  email_address='$email_address'")or die(mysqli_error($conn));
            
                   echo  "<meta http-equiv=\"refresh\"content=\"0;URL=profile.php\">";


}





if(isset($_POST["pass"])){

 

 $email_address = mysqli_real_escape_string($conn, $_POST["email_address"]);  
 $user_password = mysqli_real_escape_string($conn, $_POST["user_password"]);


$query=mysqli_query($conn,"select * from login_user where email_address='$email_address'");
$row=mysqli_fetch_array($query);
 
        if(password_verify($user_password, $row["user_password"])){
       
      header('location: change_pass.php');
  }else{

    echo "<script>window.alert('Login Error. Wrong Password.')</script>";
    echo "<script>window.location.href='profile.php?attempt=failed'</script>";
  }
}




 

if (isset($_POST['editorder'])) { 
$ID = mysqli_real_escape_string($conn, $_POST["ID"]); 
//$email_address = $_POST['email_address'];
//$ID = mysqli_real_escape_string($conn,$_POST['ID']);
  $r = mysqli_query($conn,"SELECT * FROM order_file where ID='$ID'") or die (mysqli_error($con));

  $row = mysqli_fetch_array($r);
     
       //$id=$row['ID'];
       //$_SESSION1["ID"] = $row["ID"];
       $counter=mysqli_num_rows($r);
            
        if ($counter == 0) 
        { 
          echo "not really";
        }
        else{
          echo "<script type='text/javascript'>;
          document.location='editorder.php'</script>";
          
        }
         
}












if (isset($_POST['cancelpay'])) { 
$amount=$_POST['amount'];
$description=$_POST['description'];
$order_id=$_POST['order_id'];
$user_id=$_POST['user_id'];

  $sql1 = "INSERT INTO refund_order (amount,description,order_id,user_id) VALUES ('$amount','$description','$order_id','$user_id')";
       
                       mysqli_query($conn,"INSERT INTO notifications(noti_message,logi_id) VALUES('cancelled order $order_id','$user_id')")or die(mysqli_error($conn));
      mysqli_query($conn,"UPDATE order_file SET status= '4',paid_status='2' WHERE  order_id='$order_id'")or die(mysqli_error($conn));
    

            if (mysqli_query($conn, $sql1)) {
                   echo '
                     <script type = "text/javascript">
                    window.location = "dashboard.php";
                </script>';

            }

}

          ?>