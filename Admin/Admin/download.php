<?php 

require_once("include/connection.php");

 if (isset($_POST['view_file'])) {
   $order_id=$_POST['order_id'];


    // fetch file to download from database
    $sql = "select * FROM general_files where order_id='$order_id'";
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
        readfile('../../Customer/Order/uploads/' . $file['NAME']);

        // Now update downloads count
        $newCount = $file['DOWNLOADS'] + 1;
        $updateQuery = "UPDATE customer_files SET DOWNLOADS=$newCount WHERE ID=$id";
        mysqli_query($conn, $updateQuery);
        exit;
    }

}

?>