<?php include 'header.php' ;?>
    <section id="main-content">
      <section class="wrapper site-min-height" style="background-color:#F6C1BE ">
    <section id="unseen">
              <table class="table table-bordered table-striped table-condensed">
                <thead>
                  <tr>
                    <td>
               
                  </td>
                </tr>
                  <tr>
                   
                                                            <th></th>
                                                             <th>SENDER</th>
                                                            <th>MESSAGE</th>
                                                            <th class="numeric"> DATE</th>
                                                            <th class="numeric"> </th>
                                                            <th class="numeric"> REPLY </th>
                                                            
                  </tr>
                </thead>
                <tbody>
                  
              <?php
         require_once("include/connection.php");

            $query="select * FROM `chat` Where status='1' and username='writer' order by chatid desc";
$result_set=mysqli_query($conn,$query);
            while($row=mysqli_fetch_object($result_set)){
              //$username=$row['username'];
              //$chat_msg=$row['chat_msg'];
              //$chatid=$row['chatid'];
              //$chat_date=$row['chat_date'];
              //$order_id=$row['order_id'];
                                             echo" <tr>";
                                                     echo" <td></td>";
                                                       //echo" <td>$row->chat_room_id</td>";
                                                      echo"  <td>$row->username</td>";
                                                        echo"  <td>$row->chat_msg</td>";
                                                         echo"  <td>$row->chat_date</td>";
                                                         echo" <form action='chat_writer.php' method='Post'>";
                                                         echo"<td><input type='hidden' name='chatid' value='$row->chat_room_id' /></td>";
                                                    echo"  <td><input type='submit' value='REPLY' name='chat_writer' /></td>";
                                                    echo" </form>";
                                                   echo" </tr>";
                                                   
                                                    
                                                     
                                                    }
                                                  
                                                    
                                      ?>



                                                    </tbody>
                
              </table>
             
            </section>
           
        </div>
      </section>
      <!-- /wrapper -->
    </section>
    <script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
<?php include 'footer.php' ; ?>
