<?php include 'header.php' ;?>
<?php
require_once("include/connection.php");
                    if (isset($_POST['view_file'])) {
                   
                    $order_id=$_POST['order_id'];
                   

             $query=mysqli_query($conn,"select * FROM customer_file left join `order_file` on order_file.ID=customer_file.order_id ") or die(mysqli_error());
             
             while($row=mysqli_fetch_object($query)){
 
              //$order=$row['order_id'];
              
    }
              ?>
             
 
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
                  
            

     
                                                    <tr>
                                                   
                                                    <td class='numeric'><?php echo $row['NAME']; ?></td>
                                                    <td class='numeric'><?php echo $order_id; ?></td>
                                                    <td class='numeric'><?php echo $row['status']; ?></td>
                                                    <td> 
                                                      <form action="downloads.php" method="POST">
                                                        <input type="text" name="order_id" value="<?php echo $row['ID']; ?>">
                                                        <input type="submit" name="view_file" value="DOWNLOAD">
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
