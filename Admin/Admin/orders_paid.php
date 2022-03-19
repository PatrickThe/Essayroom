                                
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
                                                            <th data-field="order_id">Order Id</th>
                                                            <th data-field="task">Type of Task</th>
                                                            <th data-field="topic">Topic</th>
                                                            <th data-field="subject">Subject</th>
                                                            <th data-field="page_no">Number of Pages</th>
                                                            <th data-field="deadline"> Deadline</th>
                                                            <th data-field="academic_level"> Academic level</th>
                                                            <th data-field="quality">Quality Level</th>
                                                            <th data-field="source">  Sources</th>
                                                            <th data-field="presentation">PowerPoint Slides</th>
                                                            <th data-field="paper_format">Paper format</th>
                                                            <th data-field="order_instructions">Order Instructions </th>
                                                            <th data-field="price">Price </th>
                                                            <th data-field="date">Date </th>
                                                            
                                                      </tr>
                                                    </thead>
                                                    <tbody>
                                                         <?php
         require_once("include/connection.php");

            $query="SELECT * FROM order_file Where  status='2' order by id desc";
$result_set=mysqli_query($conn,$query);
            while($row=mysqli_fetch_object($result_set)){
             





             
                                                        echo "<tr>";
                                                      echo "<td></td>";
                                                    echo "<td>$row->ID</td>";
                                                    echo "<td>$row->order_id</td>";
                                                    echo "<td>$row->task_id</td>";
                                                    echo "<td>$row->topic</td>";
                                                    echo "<td>$row->subject_id</td>";
                                                    echo "<td>$row->order_pages</td>";
                                                    echo "<td>$row->deadline_id</td>";
                                                    echo "<td>$row->academic_level_id</td>";
                                                    echo "<td>$row->quality_id</td>";
                                                    echo "<td>$row->order_sources</td>";
                                                    echo "<td>$row->order_pptslides</td>";
                                                    echo "<td>$row->order_citation</td>";
                                                    echo "<td>$row->order_instructions</td>";
                                                    echo "<td>$row->order_amount</td>";
                                                    echo "<td>$row->date</td>";
                                                    echo "</tr>";
                                                     } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
 
                                    </div>


                                    <div class="container">
  
                                    <?php require 'Functions/footer.php' ?>