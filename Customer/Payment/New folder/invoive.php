<?php require_once '../Functions/header.php' ;?>
<section id="main-content">
      <section class="wrapper site-min-height">
        <div class="row mt">
          <div class="col-lg-12">
            <div class="row content-panel">
            <?php
         require_once("../include/connection.php");

            $query="SELECT * FROM order_file where order_id = '$order_id'";
$result_set=mysqli_query($conn,$query);
            while($row=mysqli_fetch_array($result_set)){
              $order_amount=$row['order_amount'];
              //$user_password=$row['user_password'];
              
            
                                                    } ?>
            

                       <div id="edit" class="tab-pane">
                    <div class="row">
                      <div class="col-lg-8 col-lg-offset-2 detailed">
                        <h4 class="mb">ORDER INVOICE</h4>
                        <form role="form" class="form-horizontal" action="server.php" method="post" >
                          <div class="form-group">
                            
                          </div>
                          
                          <div class="form-group">
                            <label class="col-lg-2 control-label">PRICE</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " name="user_password" value="" class="form-control">
                              <input type="hidden" placeholder=" " name="" value="<?php echo $order_amount ?>" class="form-control">
                            </div>
                          </div>
                          <button class="btn btn-sm btn-primary login-submit-cs" name="changepass" type="submit">ChangePass</button>
                        </form>
                      </div>
                         
          </div>
          <!-- /row -->
        </div>
        <!-- /container -->
      </section>
      <!-- /wrapper -->
    </section>
    <?php include 'footer.php' ; ?>