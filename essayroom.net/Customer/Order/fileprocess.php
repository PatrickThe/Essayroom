<?php
// connect to the database
require_once("include/connection.php");

// Uploads files
if (isset($_POST['save'])) { // if save button on the form is clicked
    // name of the uploaded file

  $task = $_POST['order_tpaper'];
  $topic=$_POST['order_title'];
   $subject = $_POST['order_subject'];
  $page_no=$_POST['order_pages'];
   $deadline = $_POST['order_deadline'];
  $academic_level=$_POST['ops_aclevel'];
   $quality = $_POST['order_wquality'];
  $source=$_POST['order_sources'];
   $presentation = $_POST['order_pptslides'];
  $paper_format=$_POST['order_citation'];
   $order_instructions = $_POST['order_instructions'];
  $p_writer=$_POST['p_writer'];

   $filename = $_FILES['myfile']['name'];

    // $Admin = $_FILES['admin']['name'];
    // destination of the file on the server
    $destination = 'uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if ( in_array($extension, ['pdf'])) {
                echo '<script type = "text/javascript">
                            alert("You file extension must be:  .pdf");
                            window.location = "Order.php";
                    </script>
                     ';
    } elseif ($_FILES['myfile']['size'] > 5000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else{


  $query=mysqli_query($conn,"SELECT * FROM `order_file` WHERE `name` = '$filename'")or die(mysqli_error($conn));
           $counter=mysqli_num_rows($query);
            
            if ($counter == 1) 
              { 
                   echo '
                <script type = "text/javascript">
                    alert("Files already taken");
                    window.location = "Order.php";
                </script>


               ';
              } 
      
        date_default_timezone_set("asia/manila");
         $time = date("M-d-Y h:i A",strtotime("+0 HOURS"));

        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO order_file (task,topic,subject,page_no,deadline,academic_level,quality,source,presentation,paper_format,order_instructions,p_writer,name, size) VALUES ('$order_tpaper','$order_title','$order_subject','$order_pages','$order_deadline','$ops_aclevel','$order_wquality','$order_sources','$order_pptslides','$order_citation','$order_instructions','$p_writer','$filename', $size)";
            if (mysqli_query($conn, $sql)) {
                   echo '
                     <script type = "text/javascript">
                    alert("File Upload");
                    window.location = "Order.php";
                </script>';

            }
        } else {
             echo "Failed Upload files!";
        }
    
  }
}
