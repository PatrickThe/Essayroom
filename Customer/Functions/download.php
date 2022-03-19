<?php 

require_once("include/connection.php");

 if (isset($_POST['view_file'])) {
   $email_address=$_POST['email_address'];


    // fetch file to download from database
    $sql = "select * FROM customer_file where email_address='$email_address'";
    $result = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = '../Order/uploads/' . $file['NAME'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('../Order/uploads/' . $file['NAME']));
        readfile('../Order/uploads/' . $file['NAME']);

        // Now update downloads count
        $newCount = $file['DOWNLOADS'] + 1;
        $updateQuery = "UPDATE customer_files SET DOWNLOADS=$newCount WHERE ID=$id";
        mysqli_query($conn, $updateQuery);
        exit;
    }

}

?>