                                
    <?php require 'Functions/header.php' ?>

                                <div class="col-lg-9">
                                    <div class="tab-content">
                                        <div id="inbox" class="tab-pane fade in animated zoomInDown custom-inbox-message shadow-reset active">
                                            <div class="mail-title inbox-bt-mg">
                                                <h2>ORDER FILES YOU SENT</h2>
                                                


                                            </div>
                                            <div class="datatable-dashv1-list custom-datatable-overright">
                                                <div id="toolbar1">
                                                   
                                                </div>
                                                <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar1">
                                                    <thead>
                                                        <tr>
                                                            <th data-field="state" data-checkbox="true"></th>
                                                            
                                                            <th data-field="order_id">Order Id</th>
                                                            
                                                             <th >ACTION</th>
                                                             <th >EXPIRY DATE</th>
                                                             
                                                            
                                                            
                                                      </tr>
                                                    </thead>
                                                    <tbody>
                                                         <?php
         require_once("include/connection.php");

            $query="select * FROM customer_file left join `order_file` on order_file.ID=customer_file.order_id ";
$result_set=mysqli_query($conn,$query);
            while($row=mysqli_fetch_object($result_set)){
             






             
                                                       echo" <tr>";
                                                     echo" <td></td>";
                                                     
                                                       echo" <td>$row->order_id</td>";
                                                       
                                                    echo" <td>";
echo"YOU SENT";
                                                    echo" </td>";
                                                    echo"  <td>$row->endDate</td>";
                                                   echo" </tr>";
                                                   
                                                    
                                                     
                                                    
                                                  
                                                    
                                     } ?>
                                                    </tbody>

                                                </table>

                                            </div>
                                        </div>
 
                                    </div>

                                     <div class="sparkline11-hd">
                                    
                                </div>
                                 <div class="sparkline11-hd">
                                    
                                </div>
                                
                                    <?php require 'Functions/footer.php' ?>