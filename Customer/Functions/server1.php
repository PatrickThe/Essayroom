<?php
// connect to the database
require_once("include/connection.php");



          
if (isset($_POST['orderedit'])) { // if save button on the form is clicked
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
    //$email_address=$_POST['email_address'];
  $order_id=$_POST['order_id'];
   $date = date("M-d-Y h:i A",strtotime("+0 HOURS"));
  $endDate=date('Y-m-d H:i',strtotime($deadline_id,strtotime($date)));
  $host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$ip = $_SERVER["REMOTE_ADDR"];
$filename = $_FILES['myfile']['name'];

    $destination = 'uploads/' . $filename;
    $extension = pathinfo($filename, PATHINFO_EXTENSION);
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];
if($order_amount==0){
 if (move_uploaded_file($file, $destination)) {
 mysqli_query($conn,"UPDATE order_file SET task_id='$task_id',topic= '$topic',subject_id= '$subject_id',order_pages='$order_pages',deadline_id='$deadline_id',academic_level_id='$academic_level_id',quality_id='$quality_id',order_sources='$order_sources',order_pptslides='$order_pptslides',order_citation='$order_citation',order_instructions='$order_instructions',name= '$filename',endDate='$endDate' WHERE  order_id='$order_id'")or die(mysqli_error($conn));
            
                   echo  "<meta http-equiv=\"refresh\"content=\"0;URL=dashboard.php\">";
}
else{
 mysqli_query($conn,"UPDATE order_file SET task_id='$task_id',subject_id='$subject_id',order_pages='$order_pages',deadline_id='$deadline_id',academic_level_id='$academic_level_id',quality_id='$quality_id',order_sources='$order_sources',order_pptslides='$order_pptslides',order_citation='$order_citation',order_instructions='$order_instructions',endDate='$endDate' WHERE  order_id='$order_id'")or die(mysqli_error($conn));
            
                   echo  "<meta http-equiv=\"refresh\"content=\"0;URL=dashboard.php\">";

}

}
else{

 if (move_uploaded_file($file, $destination)) {
 mysqli_query($conn,"UPDATE order_file SET task_id='$task_id',topic= '$topic',subject_id= '$subject_id',order_pages='$order_pages',deadline_id='$deadline_id',academic_level_id='$academic_level_id',quality_id='$quality_id',order_sources='$order_sources',order_pptslides='$order_pptslides',order_citation='$order_citation',order_instructions='$order_instructions',order_amount='$order_amount',name= '$filename',endDate='$endDate' WHERE  order_id='$order_id'")or die(mysqli_error($conn));
            
                   echo  "<meta http-equiv=\"refresh\"content=\"0;URL=dashboard.php\">";
}
else{
 mysqli_query($conn,"UPDATE order_file SET task_id='$task_id',subject_id='$subject_id',order_pages='$order_pages',deadline_id='$deadline_id',academic_level_id='$academic_level_id',quality_id='$quality_id',order_sources='$order_sources',order_pptslides='$order_pptslides',order_citation='$order_citation',order_instructions='$order_instructions',order_amount='$order_amount',endDate='$endDate' WHERE  order_id='$order_id'")or die(mysqli_error($conn));
            
                   echo  "<meta http-equiv=\"refresh\"content=\"0;URL=dashboard.php\">";

}
}


}





 



          ?>