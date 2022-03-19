                                
    <?php require 'Functions/header.php' ?>

                                <div class="col-lg-9">
                                    <div class="tab-content">
                                        <div id="inbox" class="tab-pane fade in animated zoomInDown custom-inbox-message shadow-reset active">
                                            <div class="mail-title inbox-bt-mg">
                                                <h2>ORDER FILES</h2>
                                                


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
                                                            <th data-field="order_id">Order Id</th>
                                                            <th data-field="NAME">FILE NAME</th>
                                                            <th data-field="SIZE">FILE SIZE</th>
                                                             <th >ACTION</th>
                                                             <th >ACTION2</th>
                                                            
                                                            
                                                            
                                                      </tr>
                                                    </thead>
                                                    <tbody>
                                                         <?php
         require_once("include/connection.php");

            $query="SELECT * FROM order_file Where NAME!='NULL'and status='1' order by ID desc";
$result_set=mysqli_query($conn,$query);
            while($row=mysqli_fetch_object($result_set)){
             






             
                                                       echo" <tr>";
                                                     echo" <td></td>";
                                                      echo"  <td>$row->ID</td>";
                                                       echo" <td>$row->order_id</td>";
                                                        echo"  <td>$row->NAME</td>";
                                                         echo"  <td>$row->SIZE</td>";
                                                    
                                                   
                                                    echo" <td>";
echo" <a href='../../Customer/Order/uploads/$row->NAME'; download='$row->NAME'>DOWNLOAD<img src='images/down.png'>";
                                                    echo" </td>";
                                                    echo" <form action='swq' method='Post'>";
                                                    echo"  <td><input type='submit' value='REPLY' /></td>";
                                                    echo" </form>";
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
                                <div class="sparkline11-graph">
                                    <div class="basic-login-form-ad">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="modal-bootstrap modal-login-form">
                                                    <a class="zoomInDown mg-t" href="#" data-toggle="modal" data-target="#zoomInDown1">
                                                    <i class="fa fa-reply"></i> Upload</a>
                                                </div>
                                                 <?php include 'customer_file.php' ?>
                                             </div>


                                         </div>
                                     </div>
                                 </div>
                                    <?php require 'Functions/footer.php' ?>