<?php
// connect to the database
require_once("../include/connection.php");

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
  $order_id=$_POST['order_id'];
 
  $host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$ip = $_SERVER["REMOTE_ADDR"];
    $filename = $_FILES['myfile']['name'];

     

 $date = date("M-d-Y h:i A",strtotime("+0 HOURS"));
     $endDate=date('Y-m-d H:i',strtotime($deadline_id,strtotime($date)));




    $destination = 'uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server 
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];


    if ($_FILES['myfile']['size'] > 800000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else{


  $query=mysqli_query($conn,"SELECT * FROM `order_file` WHERE `order_id` = '$filename'")or die(mysqli_error($conn));
           $counter=mysqli_num_rows($query);
            
            if ($counter == 1) 
              { 
                   echo '
                <script type = "text/javascript">
                    alert("There was a problem.Please try Again");
                    window.location = "OrderFinal.php";
                </script>


               ';
              } 
      
        date_default_timezone_set("asia/manila");
         $time = date("M-d-Y h:i A",strtotime("+0 HOURS"));
$endDate=date('Y-m-d H:i',strtotime($deadline_id,strtotime($date)));
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO order_file (name, size, download,task_id,topic,subject_id,order_pages,deadline_id,academic_level_id,quality_id,order_sources,order_pptslides,order_citation,order_instructions,order_id,order_amount,host,ip,endDate) VALUES ('$filename', '$size',0,'$task_id','$topic','$subject_id','$order_pages','$deadline_id','$academic_level_id','$quality_id','$order_sources','$order_pptslides','$order_citation','$order_instructions','$order_id','$order_amount','$host','$ip','$endDate')";
       
              

      
                       mysqli_query($conn,"INSERT INTO activity_log(user_type,ip,host,activity) VALUES('Customer','$ip','$host','Placed Order$order_id')")or die(mysqli_error($conn));
    

            if (mysqli_query($conn, $sql)) {
                   echo '
                     <script type = "text/javascript">

                    window.location = "Login.php";
                </script>';

            }
        } 

        else {
            





            
            $sql1 = "INSERT INTO order_file (download,task_id,topic,subject_id,order_pages,deadline_id,academic_level_id,quality_id,order_sources,order_pptslides,order_citation,order_instructions,order_id,order_amount,host,ip,endDate) VALUES (0,'$task_id','$topic','$subject_id','$order_pages','$deadline_id','$academic_level_id','$quality_id','$order_sources','$order_pptslides','$order_citation','$order_instructions','$order_id','$order_amount','$host','$ip','$endDate')";
       
              

      
                       mysqli_query($conn,"INSERT INTO activity_log(user_type,ip,host,activity) VALUES('Customer','$ip','$host','Placed Order')")or die(mysqli_error($conn));
    

            if (mysqli_query($conn, $sql1)) {
                   echo '
                     <script type = "text/javascript">
                    window.location = "Login.php";
                </script>';

            }
        
        }
    
  }
}

if (isset($_POST['delete'])) { // if save button on the form is clicked
    // name of the uploaded file
$order_id=$_POST['order_id'];
 


          
 mysqli_query($conn,"delete from `order_file` where `order_id`='$order_id'")or die(mysqli_error($conn));
    
            
                   echo  "<meta http-equiv=\"refresh\"content=\"0;URL=Login.php\">";
            
            
          }
