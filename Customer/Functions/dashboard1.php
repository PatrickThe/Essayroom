<?php include 'header.php' ;?>
 <section id="main-content" style="background-color:#F398C0">
      <section class="wrapper site-min-height">
        <h3><i class="fa fa-angle-right"></i> DASHBOARD</h3>
       
      
     
              <table class="table table-bordered table-striped table-condensed">
                <thead>
                  <tr>
                    <td>
                    <form method="POST" action="neworder.php" >
                  <input type='submit'  class="btn btn-success btn-lg" name='new' value='New Order'/>
                  </form>
                </td>
                <td>
                    <input type='submit'   value='Upload File to Writer' class='btn btn-success btn-lg' data-toggle='modal' data-target='#FileUpload'/>
                </td>
                <td>
                   <input type='submit'  name='pay' value='Edit Order' class='btn btn-success btn-lg' data-toggle='modal' data-target='#myModal'/>
                  </td>
                  <td>
                   <input type='submit'  n value='Chat with Writter' class='btn btn-success btn-lg' data-toggle='modal' data-target='#Chatorder'/>
                  </td>
                   <td>
                   <input type='submit'   value='Chat with Admin' class='btn btn-success btn-lg' onclick="window.fcWidget.open();window.fcWidget.show();"/>
                  </td>
                </tr>
                  <tr>
                   
                                                            <th></th>
                                                             <th>ORDER NUMBER</th>
                                                            <th>Type of Task</th>
                                                            <th>Subject</th>
                                                            <th class="numeric"> Deadline</th>
                                                            <th class="numeric"> Academic level</th>
                                                            <th class="numeric"> Price </th>
                                                             <th class="numeric">Progress </th>

                  </tr>
                </thead>
                <tbody>
                  
                   <?php
        

            $query="SELECT * FROM order_file Where email_address='$userid' ";
$result_set=mysqli_query($conn,$query);
            while($row=mysqli_fetch_object($result_set)){
             
                                      
                                       $date = date('Y-m-d H:i', time());
                                              $datep=date('Y-m-d H:i',strtotime($row->deadline_id,strtotime($date)));
                                              
                                              $deadline=date('Y-m-d H:i',strtotime('+0 hour +00 minutes',strtotime($row->endDate)));
                                              $date1 = new DateTime($deadline);
                                              $date2 = new DateTime($datep);

                                              $diff = $date2->diff($date1);

                                              $hours = $diff->h;
                                              $hours = $hours + ($diff->days*24);
                                             
                                              $deadline1=(int)$row->deadline_id*0.5;


echo "$deadline1";
echo"</br>";
echo "$hours";


}
                                                     ?>
                                                    </tbody>
                                                     
                
              </table>
              <?php include 'edit_order.php' ?>
              <?php include 'chat_order.php' ?>
               <?php include 'upload_file.php' ?>
            </section>
           
        </div>
      
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
          </div>
        </div>
      </section>
      <!-- /wrapper -->
    </section>

<?php
        

            $query="SELECT * FROM login_user Where email_address='$userid' ";
$result_set=mysqli_query($conn,$query);
            while($row=mysqli_fetch_array($result_set)){
               $name=$row['name'];
              $email_address=$row['email_address'];
             
}
?>
 <script src="https://wchat.freshchat.com/js/widget.js"></script>
<script> 
var restoreId = restoreId
  window.fcWidget.init({ 
  token: "04030d95-ad70-4974-a46d-b029d7faf1a5", 
  host: "https://wchat.freshchat.com",
  open:true,
  externalId:'<?php echo $email_address; ?>',
 FirstName:'<?php echo $name; ?>', 
email:'<?php echo $email_address; ?>',    // user’s email address
restoreId: '<?php echo $email_address; ?>',
   siteId:'EssayRoom',                                
  config: {
                                     disableEvents: true,
                                     cssNames: {
                                         widget: 'fc_frame',
                                         open: 'fc_open',
                                         expanded: 'fc_expanded'
                                     },
                                     showFAQOnOpen: true,
                                     hideFAQ: true,
                                     agent: {
                                         hideName: false,
                                         hidePic: false,
                                         hideBio: false,
                                     },
                                     headerProperty: {
                                         //If you have multiple sites you can use the appName and appLogo to overwrite the values.
                                         appName: 'Essay Room',
                                        
                                         backgroundColor: '#FFFF00',
                                         foregroundColor: '#333333',
                                         backgroundImage: 'https://wchat.freshchat.com/assets/images/texture_background_1-bdc7191884a15871ed640bcb0635e7e7.png'
                                     },
                                     content: {
                                         placeholders: {
                                             search_field: 'Search',
                                             reply_field: 'Reply',
                                             csat_reply: 'Add your comments here'
                                         },
                                        }
                                 }
                                   }); </script> 


 <?php include 'footer.php' ; ?>
