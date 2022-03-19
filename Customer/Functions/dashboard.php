<?php include 'header.php' ;?>

 <section id="main-content" >
      <section class="wrapper site-min-height">
        <h3><i class="fa fa-angle-right"></i> DASHBOARD </h3>
       







 <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
              
                    <form method="POST" action="neworder.php" >
                  <input type='submit'  class="btn btn-success btn-lg" name='new' value='New Order'/>
                  </form>

                    <input type='submit'   value='Upload File to Writer' class='btn btn-success btn-lg' data-toggle='modal' data-target='#FileUpload'/>
               
                   <input type='submit'  name='pay' value='Edit Order' class='btn btn-success btn-lg' data-toggle='modal' data-target='#myModal'/>
                   <input type='submit'   value='Chat with Writter' class='btn btn-success btn-lg' data-toggle='modal' data-target='#Chatorder'/>
                   <input type='submit'   value='View Completed Files' class='btn btn-success btn-lg' data-toggle='modal' data-target='#Chatorder1'/>
                 
                <hr>

  <div class="col-lg-6">
<select   id="task_id" onchange="task(this);enableButton()" value=""  required  >
   <option value='' selected>select order number</option>
<?php 
                  //query for courses
                  $sqi="SELECT * FROM order_file Where email_address='$userid' and status='1'";
                  $record=mysqli_query($conn,$sqi);
                  
                  while ($row=mysqli_fetch_array($record,MYSQLI_BOTH))
                  {
                    $cat=$row["ID"];
                    $cat2=$row["order_id"];
                     
   

                    //echo "<option value='$cat' class=\"text-center\">--$cat2--</option>";
                    echo "<option value='$cat' class=\"text-center\">$cat2</option>";

                  }

                  ?>

</select>
 <script type="text/javascript">  
    function enableButton()
{
    var selectelem = document.getElementById('task_id');
    var btnelem = document.getElementById('seedoc');
    btnelem.disabled = !selectelem.value;
}                                  
</script>
<button class="open-button2" onclick="openForm2()" id="seedoc" disabled>CHAT</button>

      <?php include 'chat_writer.php' ?>
 
   </div>







                <thead>
                 

                </thead>
                <tbody>
                

                </tbody>
              </table>
            </div>






               <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <thead>
                  <tr>
            
               
                 
                 
                   
              
                </tr>
                  <tr>
                    
                                                        
                                                             <th><i class="fa fa-bullhorn"></i>ORDER NO</th>
                                                            <th><i class="fa fa-bookmark"></i> DEADLINE</th>
                                                            <th><i class="fa fa-edit"></i>  PRICE </th>
                                                             <th><i class="fa fa-bullhorn"></i> PROGRESS </th>
                                                              <th><i class="fa fa-bullhorn"></i>Buttons</th>
                                                               <th><i class="fa fa-bullhorn"></i>action NO</th>
                                                                <th><i class="fa fa-bullhorn"></i></th>
                                                           
                                                              

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
                                                  
                                                   echo "<td>";
                                                   //echo "<form action='invoice1' method='post'>";
                                                    //echo "<input type='text'   name='ID' value='$row->ID'  /hidden>";
                                                     // echo "<input type='text'   name='logi_id' value='$user_id'  /hidden>";
                                                    //echo "<input type='submit'  name='add_fund' class='' value='Add Funds'  /disabled>";
                                                    //echo "</form>";
                                                    echo "</td>";

                                                     echo "<td >$row->order_id</td>";
                                                    echo "<td>";
                                                  echo date('Y-m-d H:i',strtotime('+0 hour 0 minutes',strtotime($row->endDate)));
                                                   echo" </td>";
                                                    echo "<td>$row->order_amount</td>";
                                                    echo "<td>$status</td>";
                                                   
                                                    echo "<td>
                                                    <input type='text'   name='ID' value='$row->ID'  /hidden>";
                                                     echo "<form action='refundPay.php' method='post'>";
                                                      echo "<input type='hidden'   name='payer_id' value='$row->ID'  />";
                                                      echo "<input type='submit' name='cancelpay' value='Cancel'  /disabled>";
                                                    echo "</form>";
                                                     echo "<form action='invoice1.php' method='post'>";
                                                    echo "<input type='text'   name='ID' value='$row->ID'  /hidden>";
                                                     echo "<input type='text'   name='logi_id' value='$user_id'  /hidden>";
                                                    echo "<input type='submit'  name='add_fund' class='' value='Add Funds'  /disabled>";
                                                    echo "</form>";
                                                    echo "</td>";
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
                                                 
                                                    echo "<td>";
                                                    //echo "<form action='server' method='post'>";
                                                     //echo "<input type='text'   name='ID' value='$row->ID'  /hidden>";
                                                      //echo "<input type='text'   name='logi_id' value='$user_id'  /hidden>";
                                        //echo "<input type='text' name='order_id' value='$row->order_id'  /hidden>";
                                                  //echo "<input type='submit' class='' name='delete' value='Delete Order'  />";
                                                    // echo "</form>";
                                                     echo"</td>";

                                                     echo "<td>$row->order_id</td>";
                                                     echo "<td>";
                                                    echo date('Y-m-d H:i',strtotime('0 hour 0 minutes',strtotime($row->endDate)));
                                                    echo" </td>";
                                                    echo "<td>$row->order_amount</td>";
                                                    echo "<td><span class='badge bg-important'>$status</span></td>";
                                                    echo "<input type='text'   name='ID' value='$row->ID'  /hidden>";
                                                     echo "<td>";
                                                     echo "<form action='invoice.php' method='post'>";
                                                       echo "<input type='text'   name='ID' value='$row->ID'  /hidden>";
                                                      echo "<input type='submit' class='' name='pay' value='Pay'/>";
                                                       echo "</form>";
                                                       echo "<form action='order_details' method='post'>";
                                                       echo "<input type='text'   name='ID' value='$row->ID'  /hidden>";
                                                      echo "<input type='submit' class='' name='view_details' value='View Details'  />";
                                                    echo "</form>";
                                                     echo "<form action='server.php' method='post'>";
                                                     echo "<input type='text'   name='ID' value='$row->ID'  /hidden>";
                                                      echo "<input type='text'   name='logi_id' value='$user_id'  /hidden>";
                                                    echo "<input type='text' name='order_id' value='$row->order_id'  /hidden>";
                                                  echo "<input type='submit' class='' name='delete' value='Delete Order'  />";
                                                    echo "</form>";
                                                     echo "</td>";
                                                    echo "</tr>";
                                                    }
                                                    else{
                                                       $date = date('m/d/Y h:i:s a', time());
                                                        if($date<$row->endDate){
                                                   echo "<tr";
                                                    echo "<td>";
                                                   //echo "<form action='server' method='post'>";
                                                    //echo "<input type='text'   name='ID' value='$row->ID'  /hidden>";
                                                    //echo "<input type='text'   name='logi_id' value='$user_id'  /hidden>";
                                                   //echo "<input type='text'   name='order_id' value='$row->order_id'  /hidden>";
                                                    //echo "<input type='submit' class='' name='delete' value='Delete Order'  />";
                                                     //echo" </form>";
                                                     echo "</td>";
                                                     echo "<td>$row->order_id</td>";
                                                     echo "<td>";
                                                    echo date('Y-m-d H:i',strtotime('0 hour 0 minutes',strtotime($row->endDate)));
                                                    echo" </td>";
                                                    echo "<td>$row->order_amount</td>";
                                                    echo "<td><span class='badge bg-important'>time Expired</span></td>";
                                                     echo "<td><form action='pay_edit.php' method='post'>";
                                                      echo "<input type='text'   name='ID' value='$row->ID'  /hidden>";
                                                      echo "<input type='submit' class='' name='pay_edit' value='Pay'/disabled>";
                                                       echo "</form>";
                                                       echo "<form action='order_details' method='post'>";
                                                       echo "<input type='text'   name='ID' value='$row->ID'  /hidden>";
                                                    echo "</form>";
                                                      echo "<form action='server.php' method='post'>";
                                                    echo "<input type='text'   name='ID' value='$row->ID'  /hidden>";
                                                    echo "<input type='text'   name='logi_id' value='$user_id'  /hidden>";
                                                   echo "<input type='text'   name='order_id' value='$row->order_id'  /hidden>";
                                                    echo "<input type='submit' class='' name='delete' value='Delete Order'  />";
                                                     echo" </form>";
                                                    echo "</td>";
                                                    echo "</tr>";
                                                     }
                                                     else{
                                                      echo "<tr";
                                                 
                                                    echo "<td>";
                                                    //echo "<form action='server' method='post'>";
                                                     //echo "<input type='text'   name='ID' value='$row->ID'  /hidden>";
                                                    //echo "<input type='text'   name='logi_id' value='$user_id'  /hidden>";
                                                    //echo "<input type='text'   name='order_id' value='$row->order_id'  /hidden>";
                                                     //echo "<input type='submit' class='' name='delete' value='Delete Order'  />";
                                                     //echo" </form>";
                                                     echo "</td>";

                                                     echo "<td>$row->order_id</td>";
                                                     echo "<td>";
                                                    echo date('Y-m-d H:i',strtotime('0 hour 0 minutes',strtotime($row->endDate)));
                                                    echo" </td>";
                                                    echo "<td>$row->order_amount</td>";
                                                    echo "<td><span class='badge bg-important'>$status</span></td>";
                                                    echo "<input type='text'   name='ID' value='$row->ID'  /hidden>";
                                                     echo "</form>";
                                                     echo "<td><form action='pay_edit' method='post'>";
                                                      echo "<input type='text'   name='ID' value='$row->ID'  /hidden>";
                                                      echo "<input type='submit' class='' name='pay_edit' value='Pay Order'/>";
                                                       echo "</form>";
                                                       echo "<form action='order_details' method='post'>";
                                                       echo "<input type='text'   name='ID' value='$row->ID'  /hidden>";
                                                      echo "<input type='submit' class='' name='view_details' value='View Details '  />";
                                                     
                                                    echo "</form>";
                                                     echo "<form action='server.php' method='post'>";
                                                     echo "<input type='text'   name='ID' value='$row->ID'  /hidden>";
                                                    echo "<input type='text'   name='logi_id' value='$user_id'  /hidden>";
                                                    echo "<input type='text'   name='order_id' value='$row->order_id'  /hidden>";
                                                     echo "<input type='submit' class='' name='delete' value='Delete Order'  />";
                                                     echo"</form>";
                                                     echo " </td>";
                                                    echo "</tr>";
                                                     }
                                                    }
                                                  

                                                   }
                                                        
                                                  
                                                  else{

                                                   echo "<tr";
                                                 
                                                   
                                                    echo "<td>";
                                                    //echo "<form action='invoice1' method='post'>";
                                                    //echo "<input type='text'   name='ID' value='$row->ID'  /hidden>";
                                                     //echo "<input type='text'   name='logi_id' value='$user_id'  /hidden>";
                                                     
                                                     //echo "<input type='submit'  name='add_fund' class='' value='Add Funds'  />";
                                                     //echo "</form>";
                                                     echo "</td>";
                                                     echo "<td>$row->order_id</td>";
                                                    echo "<td>";
                                                  echo date('Y-m-d H:i',strtotime('+0 hour 0 minutes',strtotime($row->endDate)));
                                                   echo" </td>";
                                                    echo "<td>$row->order_amount</td>";
                                                    echo "<td>$status</td>";
                                                    echo "<input type='text'   name='ID' value='$row->ID'  /hidden>";
                                                     
                                                     echo "<td><form action='refundPay' method='post'>";
                                                      echo "<input type='text'   name='payer_id' value='$row->ID'  /hidden>";
                                                      echo "<input type='submit' class='' name='cancelpay' value='Cancel'  />";
                                                       echo "<form action='invoice1' method='post'>";
                                                    echo "<input type='text'   name='ID' value='$row->ID'  /hidden>";
                                                     echo "<input type='text'   name='logi_id' value='$user_id'  /hidden>";
                                                     
                                                     echo "<input type='submit'  name='add_fund' class='' value='Add Funds'  />";
                                                     echo "</form>";
                                                      echo "</td>";
                                                    echo "</form>";
                                                    echo "</tr>";


                                                  }
                                                     } }?>
                                                    </tbody>
                
              </table>
            </div>
          </div>

               <?php include 'chat.php' ?>
              <?php include 'edit_order.php' ?>
              
               <?php //include 'writer_files.php' ?>
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
         

          <i class='open-button1 fas fa-comment-dots' style='font-size:75px;color:#242726 ' onclick="openForm()"></i>
          
          
          
          
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
