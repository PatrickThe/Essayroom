
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <!-- favicon ends -->

        <!--- LOAD FILES -->
        
        <!-- Custom styles -->
      <link rel="stylesheet" href="css/comm.css"> 

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
                <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>


    <body><br><br>
     <div class="qs-container">
  <div class="row">
  <div class="col-lg-12">
    <div class= "panel panel-default">
      <div class="panel-heading">
        <div class="panel-tittle" style="color: black;">
        <div class="pull-left">
          <strong><i>Chats</strong></div><center><i class="fa fa-eye"></i>   Our Live video call  and  chat</center><i><h4><strong><span style="color: silver"></span></strong></h4></i></center>
          <div class="pull-right"><h><strong> You are at: Home/Viewers</strong></h></div></div></i>
          <div class="panel-body"></div>
        </div>
      </div></div>
    </div>
  </div>
</div>
<div class="agile-grids">      <div class="agile-tables">
          <div class="w3l-table-info">
   
        <div class="qs-container">
            <div class="row">
            <div class="col-sm-3 col-sm-2 sidebar" id="sidebar">
    <h2 class="page-tittle"><div class="">
                                        <center><img src="../img/9.jpg" alt="user" class="img-circle" width="100" height="100"></center>
                                    </div></h2>
    <br>
    <ul class="nav nav-sidebar">
  <a href="../client/entertainer.php" class="list-group-item">Start Live show</a><br>

 
     </p></center>

  <a href="../client/chat.php" class="list-group-item"><i class="fa fa-eye"></i>   &nbsp;&nbsp; Online Users</a><br>
  <a href="../client/entertainer.php" class="list-group-item"><i class="fa fa-magic"></i>   &nbsp;&nbsp;Video recording</a><br>



    </ul>

    </div>
            <div class="col-sm-2">
                
           
                <!-- Remote Video -->
                <video id="peerVid" poster="img/vidbg.png" playsinline autoplay></video>
                <!-- Remote Video -->
            </div>

<div class="col-sm-4">
            <div class="row margin-top-20">
                <!-- Call Buttons -->

                <div class="col-sm-12 text-center" id="callBtns" tabindex="-1" style="margin:0; margin-top:1em !important;">
               
<p></p>
                    <div class="col-sm-2"> <p>Audio call<button class="btn btn-success btn-sm initCall" id="initAudio"><i class="fa fa-phone"></i></button></div></p> <p></p> <div class="col-sm-2">  <p>Video call                <button class="btn btn-info btn-sm initCall" id="initVideo"><i class="fa fa-video-camera"></i></button></p></div><div class="col-sm-2"> <p>Reject call
                    <button class="btn btn-danger btn-sm" id="terminateCall" disabled><i class="fa fa-phone-square"></i></button></p></div>
                </div>
                <!-- Call Buttons -->

                <!-- Timer -->
                <div class="col-sm-12 text-center margin-top-5" style="color:#fff">
                   <div class="col-sm-2"> <span id="countHr"></span>h:</div>
                    <div class="col-sm-2"> <span id="countMin"></span>m:</div>
                    <div class="col-sm-2"> <span id="countSec"></span>s</div>
                </div>
                <!-- Timer -->
            </div></div></div></div>


            <!-- Local Video -->
     <!-- <div class="row">
                <div class="col-sm-12">
                    <video id="myVid" poster="img/vidbg.png" muted autoplay></video>
                </div>
            </div>   -->
            <!-- Local Video -->
        </div>

        <div class="container-fluid chat-pane">
        <div class="col-md-6">
            
        </div>
        <div class="col-sm-6">
            
        
            <!-- CHAT PANEL-->
            <div class="row chat-window col-xs-12 col-md-4" tabindex="-1" style="margin:0; margin-top:15em !important;">
                <div class="">
                    <div class="panel panel-default chat-pane-panel">
                        <div class="panel-heading chat-pane-top-bar">
                            <div class="col-xs-10" style="margin-left:-20px">
                                <i class="fa fa-comment" id="remoteStatus"></i> Remote
                                <b id="remoteStatusTxt">(Offline)</b>
                            </div>
                            <div class="col-xs-2 pull-right">
                                <span id="minim_chat_window" class="panel-collapsed fa fa-plus icon_minim pointer"></span>
                            </div>
                        </div>

                        <div class="panel-body msg_container_base" id="chats"></div>

                        <div class="panel-footer">
                            <span id="typingInfo"></span>
                            <div class="input-group">
                                <input id="chatInput" type="text" class="form-control input-sm chat_input" placeholder="Type message here...">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary btn-sm" id="chatSendBtn">Send</button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CHAT PANEL -->
        </div></div>

<br><br><br>
<center>
<div class="container" tabindex="-1" style="margin:0; margin-top:15em !important;">
    <div class="row">
       <div class="col-sm-12">
        <!--Modal to show that we are calling-->
        <div id="callModal" class="modal">
            <div class="modal-content text-center">
                <div class="modal-header" id="callerInfo"></div>

                <div class="modal-body">
                    <button type="button" class="btn btn-danger btn-sm" id='endCall'>
                        <i class="fa fa-times-circle"></i> End Call
                    </button>
                </div>
            </div>
        </div></div> 
    </div>
</div></center>
        <!--Modal end-->
<center>
<div class="container" >
<div class="row">
    
 
<div class="col-sm-6">
        <!--Modal to give options to receive call-->
        <div id="rcivModal" class="modal" tabindex="-1" style="margin:0; margin-top:15em !important;">
            <div class="modal-content">
                <div class="modal-header" id="calleeInfo"></div>

                <div class="modal-body text-center">
                <div class="col-sm-4">
                    <button type="button" class="btn btn-success btn-sm answerCall" id='startAudio'>
                        <i class="fa fa-phone"></i> Audio Call
                    </button></div>
                    <div class="col-sm-4">
                    <button type="button" class="btn btn-success btn-sm answerCall" id='startVideo'>
                        <i class="fa fa-video-camera"></i> Video Call
                    </button></div>
                    <div class="col-sm-4">
                    <button type="button" class="btn btn-danger btn-sm" id='rejectCall'>
                        <i class="fa fa-times-circle"></i> Reject Call
                    </button></div>
                </div></div>
            </div>
        </div></div></div></center>
        <!--Modal end-->

        <!--Snackbar -->
        
        <!-- Snackbar -->

        <!-- custom js -->
        <script src="js/config.js"></script>
        <script src="js/adapter.js"></script>
        <script src="js/comm.js"></script>
        <audio id="callerTone" src="media/callertone.mp3" loop preload="auto"></audio>
        <audio id="msgTone" src="media/msgtone.mp3" preload="auto"></audio>
    </body>
    <!-- <script>
window.onbeforeunload = function () {
    document.createElement('img').src = '../cn/functions.php';
}
</script> -->
</html>
