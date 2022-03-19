<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Order Payment section</h4>
                    </div>
                    <div class="modal-body">
                      <div class="form-group">
                        <form action="../Functions/server.php" method="post">
                            <label class="col-lg-2 control-label">ORDER ID</label>
                            <div class="col-lg-6">
                              <select name="order_id" class="form-control custom-select border-default col-sm-12" id="exampleSelect1">

<?php 
                  //query for courses
                  $sqi="SELECT * FROM order_file Where email_address='$userid' ";
                  $record=mysqli_query($conn,$sqi);
                  
                  while ($row=mysqli_fetch_array($record,MYSQLI_BOTH))
                  {
                    $cat=$row["order_id"];
                    $cat2=$row["order_amount"];
                     
                    echo "<option value=\"$cat.($cat2)\" class=\"text-center\">-- $cat --</option>";

                  }

                  ?>

</select>

                            </div>
                            <button type="submit" class="btn btn-primary" name="pay" >CONTINUE</button>
                          </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>