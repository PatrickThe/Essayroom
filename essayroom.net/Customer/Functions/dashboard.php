<?php include 'header.php' ;?>
 <section id="main-content" >
      <section class="wrapper site-min-height">
        <h3><i class="fa fa-angle-right"></i> DASHBOARD </h3>
       
      
               <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <thead>
                  <tr>
              
               <tr>
                    <form method="POST" action="neworder.php" >
                  <input type='submit'  class="btn btn-success btn-lg" name='new' value='New Order'/>
                  </form>

                    <input type='submit'   value='Upload File to Writer' class='btn btn-success btn-lg' data-toggle='modal' data-target='#FileUpload'/>
               
                   <input type='submit'  name='pay' value='Edit Order' class='btn btn-success btn-lg' data-toggle='modal' data-target='#myModal'/>
                   <input type='submit'   value='Chat with Writter' class='btn btn-success btn-lg' data-toggle='modal' data-target='#Chatorder'/>
                   <input type='submit'   value='View Completed Files' class='btn btn-success btn-lg' data-toggle='modal' data-target='#Chatorder1'/>
                 
                 
                   
              
                </tr>
                  <tr>
                    
                                                            <th></th>
                                                             <th class="numeric">ORDER NUMBER</th>
                                                           
                                                            <th class="numeric"> DEADLINE</th>
                                                            <th class="numeric"> PRICE </th>
                                                             <th class="numeric">PROGRESS </th>
                                                             <th></th>

                  </tr>
                </thead>
                <tbody>
                  
                   <?php
        

            $query="SELECT * FROM order_file Where email_address='$userid' order by ID desc ";
$result_set=mysqli_query($conn,$query);
            while($row=mysqli_fetch_object($result_set)){
             

              
                                                 if($row->status=='1'){
                                                  $status='UNPAID';
                                                  

                                                   }
                                                    if($row->status=='2'){
                                                   $status="<span class='badge bg-warning'>IN PROGRESS</span>";

                                                   }
                                                    if($row->status=='3'){
                                                  $status="
                                                 <form action='downloads.php' method='post' >
                                                  <span class='label label-success'>COMPLETE</span>
                                                    <input type='hidden'   name='order_id' value='$row->order_id'  /hidden>
                                                    <input type='submit'  src='img/download.png' name='view_file'  style='background:url(img/download.png)' />
                                                   
                                                    </form>";
                                                   }
                                                if($row->status=='4'){
                                                   $status="<span class='badge bg-warning'>CANCELLED</span>";
                                                 
                                                  echo "<tr";
                                                    echo "<td></td>";
                                                    echo "<form action='invoice1.php' method='post'>";
                                                     echo "<input type='text'   name='ID' value='$row->ID'  /hidden>";
                                                      echo "<input type='text'   name='logi_id' value='$user_id'  /hidden>";
                                                     echo "<td class='numeric'><input type='submit'  name='add_fund' class='btn btn-theme' value='Add Funds'  /disabled></td>";
                                                     echo "</form>";
                                                     echo "<td class='numeric'>$row->order_id</td>";
                                                    echo "<td class='numeric'>";
                                                  echo date('Y-m-d H:i',strtotime('+0 hour 0 minutes',strtotime($row->endDate)));
                                                   echo" </td>";
                                                    echo "<td class='numeric'>$row->order_amount</td>";
                                                    echo "<td class='numeric'>$status</td>";
                                                    echo "<td class='numeric'>";
                                                   
                                                    echo"</td>";
                                                    echo "<input type='text'   name='ID' value='$row->ID'  /hidden>";
                                                     
                                                     echo "<form action='refundPay.php' method='post'>";
                                                      echo "<input type='text'   name='payer_id' value='$row->ID'  /hidden>";
                                                      echo "<td class='numeric'><input type='submit' class='btn btn-theme04' name='cancelpay' value='Cancel Order'  /disabled></td>";
                                                    echo "</form>";
                                                    echo "</tr>";
                                                   }
                                                else{
                                                   if($row->paid_status=='0'){
                                               $date = date('m/d/Y h:i:s a', time());
                                              $datep=date('Y-m-d H:i',strtotime($row->deadline_id,strtotime($date)));
                                              
                                              $deadline=date('Y-m-d H:i',strtotime('+0 hour +00 minutes',strtotime($row->endDate)));
                                              $date1 = new DateTime($deadline);
                                              $date2 = new DateTime($datep);

                                              $diff = $date2->diff($date1);

                                              $hours = $diff->h;
                                              $hours = $hours + ($diff->days*24);
                                             
                                              $deadline1=(int)$row->deadline_id*0.5;
                                                   if($hours<$deadline1){

                                                  echo "<tr";
                                                    echo "<td></td>";
                                                    echo "<form action='server.php' method='post'>";
                                                     echo "<input type='text'   name='ID' value='$row->ID'  /hidden>";
                                                      echo "<input type='text'   name='logi_id' value='$user_id'  /hidden>";
                                        echo "<input type='text' name='order_id' value='$row->order_id'  /hidden>";
                                                     echo "<td class='numeric'><input type='submit' class='btn btn-theme04' name='delete' value='Delete Order'  />
                                                      </form></td>";
                                                     echo "<td class='numeric'>$row->order_id</td>";
                                                     echo "<td class='numeric'>";
                                                    echo date('Y-m-d H:i',strtotime('0 hour 0 minutes',strtotime($row->endDate)));
                                                    echo" </td>";
                                                    echo "<td class='numeric'>$row->order_amount</td>";
                                                    echo "<td class='numeric'><span class='badge bg-important'>$status</span></td>";
                                                    echo "<td></td>";
                                                    echo "<input type='text'   name='ID' value='$row->ID'  /hidden>";
                                                    
                                                     echo "<form action='invoice.php' method='post'>";
                                                       echo "<input type='text'   name='ID' value='$row->ID'  /hidden>";
                                                      echo "<td><input type='submit' class='btn btn-theme' name='pay' value='Pay Order'/>";
                                                       echo "</form>";
                                                       echo "<form action='order_details.php' method='post'>";
                                                       echo "<input type='text'   name='ID' value='$row->ID'  /hidden>";
                                                      echo "<input type='submit' class='' name='view_details' value='View Details'  />
                                                      </td>";
                                                    echo "</form>";
                                                    echo "</tr>";
                                                    }
                                                    else{
                                                       $date = date('m/d/Y h:i:s a', time());
                                                        if($date<$row->endDate){
                                                   echo "<tr";
                                                    echo "<td></td>";
                                                    echo "<td class='numeric'><form action='server.php' method='post'>";
                                                     echo "<input type='text'   name='ID' value='$row->ID'  /hidden>";
                                                    echo "<input type='text'   name='logi_id' value='$user_id'  /hidden>";
                                                    echo "<input type='text'   name='order_id' value='$row->order_id'  /hidden>";
                                                     echo "<input type='submit' class='btn btn-theme04' name='delete' value='Delete Order'  />
                                                      </form></td>";
                                                     echo "<td class='numeric'>$row->order_id</td>";
                                                     echo "<td class='numeric'>";
                                                    echo date('Y-m-d H:i',strtotime('0 hour 0 minutes',strtotime($row->endDate)));
                                                    echo" </td>";
                                                    echo "<td class='numeric'>$row->order_amount</td>";
                                                    echo "<td class='numeric'><span class='badge bg-important'>time Expired</span></td>";
                                                    echo "<td></td>";
                                                   
                                                     echo "<form action='pay_edit.php' method='post'>";
                                                      echo "<input type='text'   name='ID' value='$row->ID'  /hidden>";
                                                      echo "<td><input type='submit' class='btn btn-theme' name='pay_edit' value='Pay Order'/disabled>";
                                                       echo "</form>";
                                                       echo "<form action='order_details.php' method='post'>";
                                                       echo "<input type='text'   name='ID' value='$row->ID'  /hidden>
                                                    
                                                      </td>";
                                                    echo "</form>";
                                                    echo "</tr>";
                                                     }
                                                     else{
                                                      echo "<tr";
                                                    echo "<td></td>";
                                                    echo "<td class='numeric'><form action='server.php' method='post'>";
                                                     echo "<input type='text'   name='ID' value='$row->ID'  /hidden>";
                                                    echo "<input type='text'   name='logi_id' value='$user_id'  /hidden>";
                                                    echo "<input type='text'   name='order_id' value='$row->order_id'  /hidden>";
                                                     echo "<input type='submit' class='btn btn-theme04' name='delete' value='Delete Order'  />
                                                      </form></td>";
                                                     echo "<td class='numeric'>$row->order_id</td>";
                                                     echo "<td class='numeric'>";
                                                    echo date('Y-m-d H:i',strtotime('0 hour 0 minutes',strtotime($row->endDate)));
                                                    echo" </td>";
                                                    echo "<td class='numeric'>$row->order_amount</td>";
                                                    echo "<td class='numeric'><span class='badge bg-important'>$status</span></td>";
                                                    echo "<td></td>";
                                                    echo "<input type='text'   name='ID' value='$row->ID'  /hidden>";
                                                     echo "</form>";
                                                     echo "<form action='pay_edit.php' method='post'>";
                                                      echo "<input type='text'   name='ID' value='$row->ID'  /hidden>";
                                                      echo "<td><input type='submit' class='btn btn-theme' name='pay_edit' value='Pay Order'/>";
                                                       echo "</form>";
                                                       echo "<form action='order_details.php' method='post'>";
                                                       echo "<input type='text'   name='ID' value='$row->ID'  /hidden>";
                                                      echo "<input type='submit' class='' name='view_details' value='View Details 22'  />
                                                      </td>";
                                                    echo "</form>";
                                                    echo "</tr>";
                                                     }
                                                    }
                                                  




                                                   }
                                                        
                                                  
                                                  else{

                                                   echo "<tr";
                                                    echo "<td></td>";
                                                    echo "<td class='numeric'><form action='invoice1.php' method='post'>";
                                                     echo "<input type='text'   name='ID' value='$row->ID'  /hidden>";
                                                     echo "<input type='text'   name='logi_id' value='$user_id'  /hidden>";
                                                     
                                                     echo "<input type='submit'  name='add_fund' class='btn btn-theme' value='Add Funds'  /></td>";
                                                     echo "</form>";
                                                     echo "<td class='numeric'>$row->order_id</td>";
                                                    echo "<td class='numeric'>";
                                                  echo date('Y-m-d H:i',strtotime('+0 hour 0 minutes',strtotime($row->endDate)));
                                                   echo" </td>";
                                                    echo "<td class='numeric'>$row->order_amount</td>";
                                                    echo "<td class='numeric'>$status</td>";
                                                    echo "<td class='numeric'>";
                                                   
                                                    echo"</td>";
                                                    echo "<input type='text'   name='ID' value='$row->ID'  /hidden>";
                                                     
                                                     echo "<form action='refundPay.php' method='post'>";
                                                      echo "<input type='text'   name='payer_id' value='$row->ID'  /hidden>";
                                                      echo "<td class='numeric'><input type='submit' class='btn btn-theme04' name='cancelpay' value='Cancel Order'  /></td>";
                                                    echo "</form>";
                                                    echo "</tr>";


                                                  }
                                                     } }?>
                                                    </tbody>
                
              </table>
            </div>
          </div>

           
              <?php include 'edit_order.php' ?>
              <?php include 'chat_order.php' ?>
               <?php include 'writer_files.php' ?>
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
 


 <?php include 'footer.php' ; ?>
