                                
    <?php require 'Functions/header.php' ?>

                                <div class="col-lg-9">
                                    <div class="tab-content">
                                        <div id="inbox" class="tab-pane fade in animated zoomInDown custom-inbox-message shadow-reset active">
                                            
                                            <div class="datatable-dashv1-list custom-datatable-overright">
                                                
                                                <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar1">
                                                    <thead>
                                                        <tr>
                                                            <th data-field="state" data-checkbox="true"></th>
                                                            <th data-field="id">Order Number</th>
                                                            <th data-field="name">Amount</th>
                                                            <th data-field="ip">Reasons</th>
                                                            <th data-field="date">Date</th>
                                                             <th data-field="host">Action</th>
                                                           
                                                      </tr>
                                                    </thead>
                                                    <tbody>
    <?php
         require_once("include/connection.php");
            $query="SELECT * FROM refund_order where status='0'";
            $result=mysqli_query($conn,$query);
            while($row=mysqli_fetch_object($result)){
                                                      echo "<tr>";
                                                      echo "<td></td>";
                                                     echo "<td>$row->order_id</td>";
                                                     echo "<td>$row->amount</td>";
                                                     echo "<td>$row->description</td>";
                                                     echo "<td>$row->date</td>";
                                                     echo "<td><form action='server.php' method='POST'><td>";
                                                      echo "<input type='hidden' name='order_id' value='$row->order_id' />";
                                                     echo "<input type='hidden' name='user_id' value='$row->user_id' />";
                                                     echo "<input type='submit'  name='cancel_order' value='Confirmed cancel' /></td>";
                                                     echo "</td></form>";
                                                     echo "</tr>";
                                                   }?>
                                                        
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>


                                    </div>
                                    <?php require 'Functions/footer.php' ?>