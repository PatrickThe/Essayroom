
 <section id="main-content">
      <section class="wrapper site-min-height" style="background-color:#f2f2f2">
      
        <div class="row mt">
          <div class="col-lg-12">
    <?php
         //require_once("include/connection.php");
if (isset($_POST['chat_writer'])) {
$chatid=$_POST['chatid'];
            $query="SELECT * FROM order_file where ID = '$chatid'";
$result_set=mysqli_query($conn,$query);
            while($row=mysqli_fetch_array($result_set)){
              $ID=$row['ID'];
              $order_id=$row['order_id'];
              
            }
                                                    ?>         
<table id="chat_room" align="center" border="2px">
  <tr>
 

<th style="background-color:#8533ff; height:100px; width: 100px;"><center><h3><i class="fa fa-angle-right"></i> <a href class="logo"><b>ORDER NUMBER<span>:<?php echo $order_id ; }?></span></b></a> </h3></center></th>

  </tr>
 
        <div>
        <tr>
        <td></td><br><br>
        </tr>
        </div>
      <tr>
        <td>
        <div id="result" style="overflow-y:scroll; height:300px; width: 605px;"></div>
        <form class="form" id="poster">
<script type="text/javascript">
  function refresh(){
    $('.poster').each(function(){
        var post_id = this.dataset.id; 
        var self = _this;
        setInterval(function(){
            $(self ).load("post.php?post_id="+post_id);
        },500);
    });
}
           </script>

          <!--<input type="text" id="msg">--><br/>
          <textarea id="msg" rows="4" cols="100%" style="background-color:lightgrey"></textarea><br/>
          <input type="hidden" value="<?php echo $ID; ?>" id="id">
          <?php 

$query="SELECT * FROM login_user where email_address = '$userid'";
$result_set=mysqli_query($conn,$query);
            while($row=mysqli_fetch_array($result_set)){
              $name=$row['name'];
              //$order_id=$row['order_id'];
              
            }

          ?>
          <input type="hidden" value="<?php echo $name; ?>" name="username" id="username">
          <button type="button" id="send_msg" class="button button2">Send</button>
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
          url: "chat_writer1.php",
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
          url: "chat_writer1.php",
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
      url: 'chat_writer1.php',
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
 