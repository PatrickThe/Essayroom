<div class="modal fade" id="Chatorder1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Order Chatting section</h4>
                    </div>
                    <div class="modal-body">
                      <div class="form-group">
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

             $query=mysqli_query($conn,"select * FROM customer_file where email_address='$userid'") or die(mysqli_error());
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
              
                          </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>