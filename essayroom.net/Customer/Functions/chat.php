<?php include 'header.php' ;?>

 <section id="main-content" style="background-color:fff">
      <section class="wrapper site-min-height">
        
        <div class="row mt">
          <div class="col-lg-12">
    <?php
         require_once("include/connection.php");

            $query="SELECT * FROM login_user where email_address = '$userid'";
$result_set=mysqli_query($conn,$query);
            while($row=mysqli_fetch_array($result_set)){
              $user_id=$row['user_id'];
              $name=$row['name'];
              
            
                                                    } ?>         
<table id="chat_room" align="center" border="2px" style="background-color:#fff">
  <tr>
  <th style="background-color:#22242A; height:100px; width: 100px;"><center><h3><i class="fa fa-angle-right"></i> <b>ADMIN INBOX</b> </h3></center></th>
  </tr>
 
        <div>
        <tr>
        <td></td><br><br>
        </tr>
        </div>
      <tr>
        <td>
        <div id="result" style="overflow-y:scroll; height:300px; width: 605px; background-color:#fff"></div>
        <form class="form">
          <!--<input type="text" id="msg">--><br/>
          <textarea id="msg" rows="4" cols="100" style="background-color:#fff"></textarea><br/>
          <input type="hidden" value="<?php echo $user_id; ?>" id="id">
          <input type="hidden" value="<?php echo $name; ?>" name="username" id="username">
          <button type="button" id="send_msg" style="background-color:green;padding: 15px 32px;">Send</button>
        </form>
        </td>
      </tr>

</table>



          </div>
        </div>
      </section>
      <!-- /wrapper -->
    </section>


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
         $username = $('#username').val();
        $.ajax({
          type: "POST",
          url: "chat_admin.php",
          data: {
            msg: $msg,
            id: $id,
            username: $username,
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
        $username = $('#username').val();
        $.ajax({
          type: "POST",
          url: "chat_admin.php",
          data: {
            msg: $msg,
            id: $id,
            username: $username,
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
      url: 'chat_admin.php',
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
 <?php include 'footer.php' ; ?>
