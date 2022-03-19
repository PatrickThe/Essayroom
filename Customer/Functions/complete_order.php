<?php include 'header.php' ;?>

    <section id="main-content">
      <section class="wrapper site-min-height">
    <section id="unseen">
              <table class="table table-bordered table-striped table-condensed">
                <thead>
                  <tr>
                    <form method="POST" action="neworder.php" >
                  <input type='submit'  class="btn btn-large btn-primary" name='new' value='New Order'/>
                  </form>
                  </tr>
                  <tr>
                   
                                                           
                                                            <th> NAME</th>
                                                            <th class='numeric'> ORDER ID </th>
                                                             <th class='numeric'>STATUS </th>
                                                             <th class='numeric'>ACTION </th>


                  </tr>
                </thead>
                <tbody>
                  
             <?php 

             require_once("include/connection.php");


               //$id = mysqli_real_escape_string($conn,$_SESSION['admin_user']);


              $r = mysqli_query($conn,"SELECT * FROM order_file where email_address = '$userid'") or die (mysqli_error($con));

              $rw = mysqli_fetch_array($r);

               $id=$rw['order_id'];
               // $fname=$row['fname'];
               // $lname=$row['lname'];

            ?>

             <?php

             $query=mysqli_query($conn,"select * FROM customer_file where order_id='$id'") or die(mysqli_error());
              //select * from `chat` left join `user` on user.userid=chat.userid where chat_room_id='$id' order by 
             while($row=mysqli_fetch_array($query)){
    
              ?>
             
 

     
                                                    <tr>
                                                    <td></td>
                                                    <td class='numeric'><?php echo $row['NAME']; ?></td>
                                                    <td class='numeric'><?php echo $row['order_id'];; ?></td>
                                                    <td class='numeric'><?php echo $row['status']; ?></td>
                                                    <td> 
                                                      <form action="download.php" method="POST">
                                                        <input type="text" name="email_address" value="<?php echo $userid; ?>">
                                                        <input type="submit" name="view_file" value="DOWNLOAD" />
                                                      </form>
                                                    </td>
                                                    </tr>
                                                     <?php } ?>
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
