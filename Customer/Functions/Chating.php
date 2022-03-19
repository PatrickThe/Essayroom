


<style>
.open-button {
  background-image: url( 
'../../img/chat.png'); 
 
  color: gray;
  padding: 16px 20px;
  border-radius: 15px 50px 30px 5px;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  
}

/* The popup chat - hidden by default */
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border-radius: 25px solid #09231E;
  border: 3px solid #09231E;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;

}

/* Full-width textarea */


/* Set a style for the submit/send button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>




<div class="chat-popup1" id="myForm">
   
<?php
        require_once("include/connection.php");
if (isset($_POST['chat_writer'])) {
$chatid=$_POST['chatid'];
            $query="SELECT * FROM order_file where ID = '$chatid'";
$result_set=mysqli_query($conn,$query);
            while($row=mysqli_fetch_array($result_set)){
              $ID=$row['ID'];
              $order_id=$row['order_id'];
              
            }
                                                    ?>  

 <div  style="height:60px; width: 300px; background-color:#5A6C69;" ><span style="color:#5EF3F5 "><a href class="logo"><b>Admin Inbox<span>:</span></b></a></span></div>
  <div id="result" style="overflow-y:scroll; height:300px; width: 300px; background-color:#FFFFFF ;" id="myForm"></div>
        <form class="form-container">
          <!--<input type="text" id="msg">--><br/>
          <textarea id="msg" rows="2" cols="37" style="background-color:#D7DED3" height="10px"></textarea><br/>
          <input type="hidden" value="<?php echo $user_id; ?>" id="id">
          <input type="hidden" value="<?php echo $name; ?>" name="username" id="username">
       
            <button type="submit" id="send_msg" style="background-color:#68D5BC;padding: 15px 130px;" width="80">Send</button></br>
    <button type="button" onclick="closeForm()" style="background-color:red;padding: 15px 130px;" width="80">CLOSE</button>
    
     
        </form>
       
</div>








<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>


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
 



