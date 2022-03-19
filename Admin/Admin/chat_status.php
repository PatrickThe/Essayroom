<div id="zoomInDown1" class="modal modal-adminpro-general modal-zoomInDown fade" role="dialog">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-close-area modal-close-df">
                                                                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="modal-login-form-inner">
                                                                    
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="basic-login-inner modal-basic-inner">
                                                                                <form action="chat_writer.php" method="POST" >
                                                                                    <div class="form-group-inner">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-4">
                                                                                                <label class="login2">ORDER NUMBER</label>
                                                                                            </div>
                                                                                            <div class="col-lg-8">
                                                                                                <select name="chatid" class="form-control col-sm-12 custom-select border-default" id="exampleSelect2">
     

<?php 
                  //query for courses
                  $sqi="select * from order_file where status!='0' order by id desc";
                  $record=mysqli_query($conn,$sqi);
                  
                  while ($row=mysqli_fetch_array($record,MYSQLI_BOTH))
                  {
                    $cat=$row["order_id"];
                     $cat1=$row["ID"];
                    echo "<option value=\"$cat1\" class=\"text-center\">-- $cat --</option>";

                  }

                  ?>




   </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group-inner">
                                                                                        <div class="row">
                                                                                            
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="login-btn-inner">
                                                            
                                                                                        <div class="row">
                                                                                            <div class="col-lg-4"></div>
                                                                                            <div class="col-lg-8">
                                                                                                <div class="login-horizental">
                                                                                                    <button class="btn btn-sm btn-primary login-submit-cs" name="chat_writer" type="submit">INBOX</button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    
                                                                             </form>

                                                                                
                                                                            </div>
                                                                    

                   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- x-editable End-->
        </div>
    </div>