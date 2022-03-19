<?php require_once 'header.php' ;?>
<section id="main-content">
      <section class="wrapper site-min-height">
        <div class="row mt">
          <div class="col-lg-12">
            <div class="row content-panel">
            <?php
         require_once("../include/connection.php");

$payer_id=$_POST['payer_id'];
//$payerId= $_GET['PayerID'];
            $query="SELECT * FROM order_file where order_id = '$payer_id'";
$result_set=mysqli_query($conn,$query);
            while($row=mysqli_fetch_array($result_set)){
              $order_amount=$row['order_amount'];
              $order_id=$row['order_id'];
              
            
                                                    } ?>
            


            

                       <div id="edit" class="tab-pane">
                    <div class="row">
                      <div class="col-lg-8 col-lg-offset-2 detailed">
                        <h4 class="mb">PAYMENT FINAL</h4>
                        <form role="form" class="form-horizontal" action="paynow.php" method="Get" >
                          <div class="form-group">
                            
                          </div>
                          
                          <div class="form-group">
                            <label class="col-lg-2 control-label">ORDER ID</label>
                            <div class="col-lg-6">
                            
                              <input type="text" placeholder=" " name="order_id" value=" <?php echo $order_id;?>" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">PRICE</label>
                            <div class="col-lg-6">
                             
                              <input type="text" placeholder=" " name="amount" value="<?php echo $order_amount ?>" class="form-control">
                            </div>
                          </div>
                          <button class="btn btn-sm btn-primary login-submit-cs" name="paynow" type="submit">Payvia Paypal</button>
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