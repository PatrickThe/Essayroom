<div class="modal fade" id="Chatorder" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Order Chatting section</h4>
                    </div>
                    <div class="modal-body">
                      <div class="form-group">
                        <form action="chat_writer.php" method="post">
                            <label class="col-lg-2 control-label">ORDER Number</label>
                            <div class="col-lg-6">
                              <select name="chatid" class="form-control custom-select border-default col-sm-12" id="exampleSelect1">

<?php 
                  //query for courses
                  $sqi="SELECT * FROM order_file Where email_address='$userid' and status='1'";
                  $record=mysqli_query($conn,$sqi);
                  
                  while ($row=mysqli_fetch_array($record,MYSQLI_BOTH))
                  {
                    $cat=$row["ID"];
                    $cat2=$row["order_id"];
                     
                    echo "<option value=\"$cat\" class=\"text-center\">-- $cat2 --</option>";

                  }

                  ?>

</select>

                            </div>
                            <button type="submit" class="btn btn-primary" name="chat_writer" >CONTINUE to Chat</button>
                            </form>
                          </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>