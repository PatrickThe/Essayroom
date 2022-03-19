<?php
//include('connect.php');

require_once("../include/connection.php");
//require_once("include/connection.php");
if(isset($_POST['res'])){
  $id = $_POST['id'];
?>
<?php
                
              $q = mysqli_query($conn , "select * from notifications where status='0' AND logi_id='$id' ORDER BY noti_id DESC LIMIT 8");
              
              while ($res = mysqli_fetch_object($q)) {
                echo '<li><a class="label label-warning" href="">'. $res->noti_message.'</a></li>';
              }
            }        
?>