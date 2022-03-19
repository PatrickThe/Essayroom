<?php
require_once("include/connection.php");

session_start();
if(!isset($_SESSION["email_address"])){
    header("location:/../../index.php");

} else{
    $admin = $_SESSION['email_address'];
}
?>
      

<?php include '../Order/1235.php' ;?>

                
            
    
    
  
 