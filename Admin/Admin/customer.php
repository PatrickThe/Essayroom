                                
    <?php require 'Functions/header.php' ?>

                                <div class="col-lg-9">
                                    <div class="tab-content">
                                        <div id="inbox" class="tab-pane fade in animated zoomInDown custom-inbox-message shadow-reset active">
                                            <div class="mail-title inbox-bt-mg">
                                                <h2>Inbox</h2>
                                                <div class="view-mail-action view-mail-ov-d-n">
                                                    <a href="#"><i class="fa fa-reply"></i> Reply</a>
                                                    <a class="compose-draft-bt" href="javascript:window.print()"><i class="fa fa-print"></i> Print</a>
                                                    <a class="compose-discard-bt" href="#"><i class="fa fa-trash-o"></i> Trash</a>
                                                </div>
                                            </div>
                                            <div class="datatable-dashv1-list custom-datatable-overright">
                                                <div id="toolbar1">
                                                    <select class="form-control">
                                                        <option value="">Export Basic</option>
                                                        <option value="all">Export All</option>
                                                        <option value="selected">Export Selected</option>
                                                    </select>
                                                </div>
                                                <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar1">
                                                    <thead>
                                                        <tr>
                                                            <th data-field="state" data-checkbox="true"></th>
                                                            <th data-field="id">ID</th>
                                                            <th data-field="name">Name</th>
                                                            <th data-field="email">EMAIL ADDRESS</th>
                                                            <th data-field="ip">IP ADDRESS</th>
                                                            <th data-field="host">MACHINE NAME</th>
                                                            <th data-field="status">USER Status</th>
                                                             <th data-field="topic">TOPIC ORDERD</th>


                                                      </tr>
                                                    </thead>
                                                    <tbody>
                                                         <?php
         require_once("include/connection.php");

            $query="SELECT * FROM login_user Where status='1'";

            $result=mysqli_query($conn,$query);
            while($row=mysqli_fetch_object($result)){
              
           //$ip=$row['ip'];
                                                  echo "<tr>";
                                                      echo "<td></td>";

                                                     echo "<td>$row->user_id</td>";
                                                     echo "<td>$row->name</td>";
                                                     echo "<td>$row->email_address</td>";
                                                     echo "<td>$row->ip</td>";
                                                     echo "<td>$row->host</td>";
                                                     if($status=1){
                                                      echo "<td>Active</td>";
                                                     }
                                                     else{
                                                      echo "<td>Deactivated</td>";
                                                     }
                                                      
                                                   //$ip=$row['ip'];
                                                    //$query="SELECT * FROM order_file";
                                                    //$result=mysqli_query($conn,$query);
                                                  //while($rw=mysqli_fetch_object($result)){
                                                    //echo "<td>$rw->topic</td>";
                                                    echo "</tr>";
                                                     //} 
                                                   }?>
                                                        
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>


                                    </div>
                                    <?php require 'Functions/footer.php' ?>