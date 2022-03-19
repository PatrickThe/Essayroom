<?php
require_once("include/connection.php");

session_start();
if(!isset($_SESSION["email_address"])){
    header("location:/../../index.php");

} else{
    $admin = $_SESSION['email_address'];
}
?>

<!DOCTYPE html>
<html lang="en">


<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Essayroom customer</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
 
  <link href="style1.css" rel="stylesheet">
<script src="jquery-3.1.1.js"></script> 
   <style type="text/css">
    #loader{
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background: url('Loader/loading.gif') 50% 50% no-repeat rgb(249,249,249);
        opacity: 1;
    }
       /* jssor slider loading skin spin css */
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }


        .jssorb052 .i {position:absolute;cursor:pointer;}
        .jssorb052 .i .b {fill:#000;fill-opacity:0.3;}
        .jssorb052 .i:hover .b {fill-opacity:.7;}
        .jssorb052 .iav .b {fill-opacity: 1;}
        .jssorb052 .i.idn {opacity:.3;}

        .jssora053 {display:block;position:absolute;cursor:pointer;}
        .jssora053 .a {fill:none;stroke:#fff;stroke-width:640;stroke-miterlimit:10;}
        .jssora053:hover {opacity:.8;}
        .jssora053.jssora053dn {opacity:.5;}
        .jssora053.jssora053ds {opacity:.3;pointer-events:none;}

    p.aaa {
  text-indent: 50px;
}
  </style>
</head>
<?php 

     require_once("include/connection.php");


   $userid = mysqli_real_escape_string($conn,$_SESSION['email_address']);


  $r = mysqli_query($conn,"SELECT * FROM login_user where email_address = '$userid'") or die (mysqli_error($con));

  $row = mysqli_fetch_array($r);

   $email_address=$row['email_address'];
   $avarta=$row['avarta'];
   $user_id=$row['user_id'];
   $last_seen_noti=$row['last_seen_noti'];
?>
<?php
 //require_once("include/connection.php");
$user_id = $user_id;

$q = mysqli_query($conn,"select * from `notifications` left join `login_user` on login_user.user_id=notifications.logi_id ORDER BY noti_id DESC LIMIT 1");
  while ($result = mysqli_fetch_object($q)) {
    $last_noti_id = $result->noti_id;
  }


?>
<div class="last_noti_id hide"><?php echo $last_noti_id;?></div>
<div class="last_seen_noti hide"><?php echo $last_seen_noti;?></div>
<body>
  <div id="loader"></div>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="login.html" class="logo"><b>Essay<span>Room</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
    
    
          <!-- settings start -->
          
          <input type="hidden" name="" value="<?php echo $user_id ?>" id="id" />
          <!-- inbox dropdown end -->
          <!-- notification dropdown start-->
          <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-bell-o"></i>
            
               <span class="caret"></span>
              <span class="badge bg-warning" id="result">
   
               
               <script>
    function displayResult(){
      $id= $('#id').val();
    $.ajax({
      url: 'noti/fetch.php',
      type: 'POST',
      async: false,
      data:{
        id: $id,
        res: 1,
      },
      success: function(response){
        $('#result').html(response);
      }
    });
  }
  setInterval('displayResult()' ,450);
 </script>
              </span>
              </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-yellow"></div>
              <li>
                <p class="yellow">
              <form method="POST" action="" >
              <input type="hidden" name="user_id" value="<?php echo $user_id ; ?>">
             <input type="submit" value="Mark Viewed" name="noted" />
             <?php 
      



      if (isset($_POST['noted'])) { 
$user_id=$_POST['user_id'];
          
 mysqli_query($conn,"UPDATE notifications SET status='1' WHERE  logi_id='$user_id'")or die(mysqli_error($conn));
    echo '<meta http-equiv="refresh" content="0">';
            
          }
             ?>
           </form>
             <?php 
              $q = mysqli_query($conn , "select * from `notifications` left join `login_user` on login_user.user_id=notifications.logi_id where logi_id='$user_id' ORDER BY noti_id DESC LIMIT 8");
              
              while ($res = mysqli_fetch_object($q)) {
                echo '<li><a class="label label-warning" href="">'. $res->noti_message.'</a></li>';
              }
               ?>
                </p>
              </li>
             
            
            </ul>
          </li>
         
        </ul>
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="logout.php">Logout</a></li>
        </ul>
      </div>
    </header>
     


    
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
     <aside>
      <div id="sidebar" class="nav-collapse ">
        
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.php"><img src="uploads/<?php echo $avarta;?>" class="img-circle" width="80"></a></p>
          <h5 class="centered"><?php echo ucwords(htmlentities($userid)); ?></h5></br>

          <li class="mt">
            <a class="active" href="dashboard.php">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span> MY ORDERS</span>
              </a>
            <ul class="sub">
              <li><a href="dashboard.php">All Orders</a></li>
              <li><a href="complete_order.php">Complete Orders</a></li>
            </ul>
          </li>
         <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-comments-o"></i>
              <span>Chat Room</span>
              </a>
            <ul class="sub">
              <li><a href="writer_chat.php">Chat With Writer</a></li>
              <li><a href="chat.php"> Chat With Admin</a></li>
            </ul>
          </li>
           <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-cogs"></i>
              <span>Settings</span>
              </a>
            <ul class="sub">
              <li><a href="profile.php">EDIT Profile</a></li>
              <li><a href="logout.php">Log Out</a></li>
            </ul>
          </li>
         
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
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