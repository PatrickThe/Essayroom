<?php
//include('connect.php');

require_once("../include/connection.php");
//require_once("include/connection.php");
if(isset($_POST['res'])){
  $id = $_POST['id'];
?>
<?php
                 $q="select * from notifications where status='0' AND logi_id='$id'";
$res=mysqli_query($conn,$q);
$number_of_noti_to_show_to_user=mysqli_num_rows($res);
$number_of_noti_to_show_to_user1='No Noti';
                  if($number_of_noti_to_show_to_user>=0){
                      echo '<div id="no-number" class="text-danger">'. $number_of_noti_to_show_to_user .'</div>';
                  }else{
                      echo '<div id="no-number" class="text-danger hide">'. $number_of_noti_to_show_to_user1 .'</div>';
                  }
                }
?>