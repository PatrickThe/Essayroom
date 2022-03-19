                                
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
                                                            <th data-field="id">USER ID</th>
                                                            <th data-field="name">EMAIL</th>
                                                            <th data-field="size">LOGED IN AT</th>
                                                            <th data-field="task">LOGED OUT</th>
                                                            <th data-field="topic">HOST GADGET</th>
                                                            <th data-field="subject">IP ADDRESS</th>
                                                      </tr>
                                                    </thead>
                                                    <tbody>
                                                         <?php
         require_once("include/connection.php");

            $query="SELECT * FROM history_log order by login_time desc";
$result_set=mysqli_query($conn,$query);
            while($row=mysqli_fetch_object($result_set)){
             





             
                                                        echo "<tr>";
                                                      echo "<td></td>";

                                                   echo "<td>$row->id</td>";
                                                     echo "<td>$row->email_address</td>";
                                                     echo "<td>$row->login_time</td>";
                                                     echo "<td>$row->logout_time</td>";
                                                     echo "<td>$row->host</td>";
                                                    echo "<td>$row->ip</td>";
                                                    
                                                    echo "</tr>";
                                                     } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
 
                                    </div>
                                    <?php require 'Functions/footer.php' ?>