
<?php require 'Functions/header.php' ?>

<div class="inbox-mailbox-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-3">
                                    
<link rel="stylesheet" href="home.css">
<script src="jquery-3.1.1.js"></script> 
<script src="home.js"></script>                 
<script type="text/javascript">

$(document).keypress(function(e){ //using keyboard enter key
  displayResult();
  /* Send Message */  
  
    if(e.which === 13){ 
        if($('#msg').val() == ""){
        alert('Please write message first');
      }else{
        $msg = $('#msg').val();
        $id = $('#id').val();
         $to_user = $('#to_user').val();
        $.ajax({
          type: "POST",
          url: "admin_chat.php",
          data: {
            msg: $msg,
            id: $id,
            to_user: $to_user,
          },
          success: function(){
            displayResult();
            $('#msg').val(''); //clears the textarea after submit
          }
        });
      } 

      /* $("form").submit(); 
       alert('You press enter key!'); */
    } 
  }
); 


$(document).ready(function(){ //using send button
  displayResult();
  /* Send Message */  
    
    $('#send_msg').on('click', function(){
      if($('#msg').val() == ""){
        alert('Please write message first');
      }else{
        $msg = $('#msg').val();
        $id = $('#id').val();
         $to_user = $('#to_user').val();
        $.ajax({
          type: "POST",
          url: "admin_chat.php",
          data: {
            msg: $msg,
            id: $id,
             to_user: $to_user,
          },
          success: function(){
            displayResult();
            $('#msg').val(''); //clears the textarea after submit
          }
        });
      } 
    });
  /* END */
  });
  
  function displayResult(){
    $id = $('#id').val();
    $.ajax({
      url: 'admin_chat.php',
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

</head>

<body>
   <?php
         require_once("include/connection.php");
if (isset($_POST['chat_writer'])) { // if save button on the form is clicked
    // name of the uploaded file
$chatid=$_POST['chatid'];
            $query="SELECT * FROM login_user where user_id = '$chatid'";
$result_set=mysqli_query($conn,$query);
            while($row=mysqli_fetch_array($result_set)){
              $user_id=$row['user_id'];
              $name=$row['name'];
              $email_address=$row['email_address'];
              
            }
                                                   ?>
<table id="chat_room" align="center">
  <tr>
  <th><h4>,CUSTOMER USERNAME:<?php echo $name;?></h4></th>
  </tr>
           
        <div>
        <tr>
        <td></td><br><br>
        </tr>
        </div>
      <tr>
        <td>
        <div id="result" style="overflow-y:scroll; height:300px; width: 605px;"></div>
        <form class="form">
          <!--<input type="text" id="msg">--><br/>
          <textarea id="msg" rows="4" cols="85"></textarea><br/>
          <input type="hidden" value="<?php echo $user_id;?>" id="id">
<?php   


 $query="SELECT * FROM login_user where email_address = '$email_address'";
$result_set=mysqli_query($conn,$query);
            while($row=mysqli_fetch_array($result_set)){
              $name=$row['name'];
              //$order_id=$row['order_id'];
              $email_address=$row['email_address'];
              
            }
                    


 ?>

          <input type="hidden" value="<?php echo $email_address;?>" name="to_user" id="to_user">
          <button type="button" id="send_msg" class="button button2">Send</button>
        </form>
        </td>
      </tr>
<?php }?>
</table>











    <?php require 'Functions/footer.php' ?>