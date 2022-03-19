                                
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
                                                            <th data-field="order_id">Order Id</th>
                                                            <th data-field="date">Date </th>
                                                            <th data-field="date">CHECK DEADLINE </th>
                                                            
                                                      </tr>
                                                    </thead>
                                                    <tbody>
                                                         <?php
         require_once("include/connection.php");

            $query="SELECT * FROM order_file Where email_address!='not'and status='1' order by id desc";
$result_set=mysqli_query($conn,$query);
            while($row=mysqli_fetch_object($result_set)){
             





             
                                                        echo "<tr>";
                                                      echo "<td></td>";
                                                    
                                                    echo "<td>$row->order_id</td>";
                                                    echo "<td>$row->date</td>";
                                                    echo "<td> ";


                                                echo"  <script>

var trig = setInterval(timer,1000);

    var counter=0;
    var min=4;
    var sec=60;

    function timer(){

    sec=--sec;

    if(sec===0){
    min=--min;
    sec=59;
    counter=++counter;
    }

    if(counter===5){
    sec=0;
    min=0;
    clearInterval(trig);
     functionSubmit();
     document.write('Submitted');
     }

     document.getElementById('output').innerHTML = min+': '+sec;

     }

                                                  </script>";
                                                  echo "<p id='output'></p>";

                                                    echo "</td>";
                                                    echo "</tr>";
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
                                                    <i class="fa fa-reply"></i> Upload</a>
                                                </div>
                                                 <?php include 'customer_file.php' ?>
                                             </div>


                                         </div>
                                     </div>
                                 </div>
                                </div>

                                <div class="timer">
            <time id="countdown">5:00</time>
        </div>
                                    <?php require 'Functions/footer.php' ?>