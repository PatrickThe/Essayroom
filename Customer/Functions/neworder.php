

     <?php
require_once("include/connection.php");

session_start();
if(!isset($_SESSION["email_address"])){
    header("location:../login.html");

} else{
    $admin = $_SESSION['email_address'];
}
?>

<?php 
                   require_once("include/connection.php");
                  $sqi="select * from nav_table where id='1'";
                  $result_set=mysqli_query($conn,$sqi);
                  
                  while ($row=mysqli_fetch_array($result_set))
                  {
                    $cat=$row["url_name"];
                     $cat1=$row["url_link"];
                    
                   
                  }

                  ?>

 <?php require_once ("$cat1");?>





<script type="text/javascript">
    var IDLE_TIMEOUT = 10 * 60;  // 10 minutes of inactivity
    var _idleSecondsCounter = 0;
    document.onclick = function() {
        _idleSecondsCounter = 0;
    };
    document.onmousemove = function() {
        _idleSecondsCounter = 0;
    };
    document.onkeypress = function() {
        _idleSecondsCounter = 0;
    };
    window.setInterval(CheckIdleTime, 1000);
    function CheckIdleTime() {
        _idleSecondsCounter++;
        var oPanel = document.getElementById("SecondsUntilExpire");
        if (oPanel)
            oPanel.innerHTML = (IDLE_TIMEOUT - _idleSecondsCounter) + "";
        if (_idleSecondsCounter >= IDLE_TIMEOUT) {
            // destroy the session in logout.php 
            document.location.href = "logout.php";
        }
    }
</script>