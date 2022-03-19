                                
    <?php require 'Functions/header.php' ?>

                                <div class="col-lg-9">
                                    <div class="tab-content">
                                        <div id="inbox" class="tab-pane fade in animated zoomInDown custom-inbox-message shadow-reset active">
                                            <div class="mail-title inbox-bt-mg">
                                                <h2>Inbox</h2>
                                                <div class="view-mail-action view-mail-ov-d-n">
                                                    
                                                </div>
                                            </div>
                                           
                                                
                                                <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar1">
                                                    <thead>
                                                        <tr>
                                                          
                                                            
                                                            <th data-field="name">Name</th>
                                                            <th data-field="email">EMAIL ADDRESS</th>
                                                             <th data-field="topic"></th>


                                                      </tr>
                                                    </thead>
                                                    <tbody>
                                                         <?php
         //require_once("include/connection.php");

            $query="SELECT * FROM login_user Where status='1'";

            $result=mysqli_query($conn,$query);
            while($row=mysqli_fetch_object($result)){
              
         
                                                  echo "<tr>";
                                                     
                                                     
                                                     echo "<td>$row->name</td>";
                                                     echo "<td>$row->email_address</td>";
                                                      echo" <form action='customer_chat.php' method='Post'>";
                                                     echo"<td><input type='hidden' name='chatid' value='$row->user_id'/> </td>";
                                                    echo"  <td><input type='submit' value='CHAT' name='chat_writer' /></td>";
                                                    echo" </form>";
                                                    echo "</tr>";
                                                     //} 
                                                   }?>
                                                        
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>


                                    </div>
                                    <?php require 'Functions/footer.php' ?>