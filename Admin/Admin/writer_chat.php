                                
    <?php require 'Functions/header.php' ?>

                                <div class="col-lg-9">
                                    <div class="tab-content">
                                        <div id="inbox" class="tab-pane fade in animated zoomInDown custom-inbox-message shadow-reset active">
                                            <div class="mail-title inbox-bt-mg">
                                                <h2>CHAT INBOXES</h2>
                                                


                                            </div>
                                            <div class="datatable-dashv1-list custom-datatable-overright">
                                                <div id="toolbar1">
                                                   
                                                </div>
                                                <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar1">
                                                    <thead>
                                                        <tr>
                                                            <th data-field="state" data-checkbox="true"></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th data-field="sender">SENDER</th>
                                                            <th data-field="chat_msg">MESSAGE</th>
                                                             <th >DATE</th>
                                                            
                                                      </tr>
                                                    </thead>
                                                    <tbody>
                                                         <?php
         require_once("include/connection.php");

            $query="select * from `chat` left join `order_file` on order_file.ID=chat.chat_room_id where statusA='1' and to_user='writer' order by chatid desc";
            
$result_set=mysqli_query($conn,$query);
            while($row=mysqli_fetch_object($result_set)){
             






             
                                                       echo" <tr>";
                                                     echo" <td></td>";

                                                   echo" <form action='' method='Post'>";
                                                         echo"<td><input type='hidden' name='chatid' value='$row->chatid'/> </td>";
                                                    echo"  <td><input type='submit' value='MARK READ' name='markred' /></td>";
                                                    echo" </form>";

                                                      echo"  <td>$row->order_id</td>";
                                                        echo"  <td>$row->chat_msg</td>";
                                                         echo"  <td>$row->chat_date</td>";
                                                         echo" <form action='chat_writer.php' method='Post'>";
                                                         echo"<td><input type='hidden' name='chatid' value='$row->chat_room_id'/> </td>";
                                                    echo"  <td><input type='submit' value='REPLY' name='chat_writer' /></td>";
                                                    echo" </form>";
                                                   echo" </tr>";
                                                   
                                                    
                                                     
                                                    
                                                  
                                                    
                                     } ?>
                                                    </tbody>

                                                </table>

                                            </div>
                                        </div>
 <div class="sparkline11-graph">
                                    <div class="basic-login-form-ad">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="modal-bootstrap modal-login-form">
                                                    <a class="zoomInDown mg-t" href="#" data-toggle="modal" data-target="#zoomInDown1">
                                                    <i class="fa fa-reply"></i> START CHAT WITH CLIENT</a>
                                                </div>
                                                 <?php include 'chat_status.php' ?>
                                             </div>


                                         </div>
                                     </div>
                                 </div>
                                    </div>

                                     
                                                
<?php

//include 'include/connection.php';
if (isset($_POST['markred'])) { 
    //$ID = mysqli_real_escape_string($conn, $_POST["ID"]); 
$chatid =$_POST['chatid'];
mysqli_query($conn,"UPDATE chat SET statusA='0' WHERE  chatid='$chatid'")or die(mysqli_error($conn));
        "<meta http-equiv=\"refresh\"content=\"0;\">";          
}
?>

                                         </div>
                                     </div>
                                 </div>
                                 
                                    <?php require 'Functions/footer.php' ?>