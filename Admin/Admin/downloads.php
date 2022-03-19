<?php 

require_once("include/connection.php");

if (isset($_POST['download'])) {
    $ID = mysqli_real_escape_string($conn,$_POST['ID']);

    // fetch file to download from database
    $sql = "SELECT * FROM  order_file WHERE ID=$ID";
    $result = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = '../uploads/' . $file['NAME'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('../uploads/' . $file['NAME']));
        readfile('../Customer/Order/uploads/' . $file['NAME']);

        // Now update downloads count
        $newCount = $file['DOWNLOAD'] + 1;
        $updateQuery = "UPDATE order_file SET DOWNLOAD=$newCount WHERE ID=$ID";
        mysqli_query($conn, $updateQuery);
        exit;
    }

}


?>