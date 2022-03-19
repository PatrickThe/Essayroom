

<?php require_once 'header.php' ;?>
<section id="main-content">
      <section class="wrapper site-min-height">
        <div class="row mt">
          <div class="col-lg-12">
            <div class="row content-panel">
            <?php
         require_once("../include/connection.php");
if (isset($_POST['pay'])) { // if save button on the form is clicked
    // name of the uploaded file
$ID=$_POST['ID'];
            $query="SELECT * FROM order_file where ID = '$ID'";
$result_set=mysqli_query($conn,$query);
            while($row=mysqli_fetch_array($result_set)){
              $order_amount=$row['order_amount'];
              $order_id=$row['order_id'];
              
            }
                                                    } ?>
            


            

                       <div id="edit" class="tab-pane">
                    <div class="row">
                      <div class="col-lg-8 col-lg-offset-2 detailed">
                        <h4 class="mb">ORDER INVOICE</h4>
                        <div role="form" class="form-horizontal" >
                          <div class="form-group">
                            
                          </div>
                          
                          <div class="form-group">
                            <label class="col-lg-2 control-label">ORDER ID</label>
                            <div class="col-lg-6">
                            
                              <input type="text" placeholder=" " name="order_id" value=" <?php echo ucwords(htmlentities($order_id));?>" class="form-control" /readonly>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">PRICE</label>
                            <div class="col-lg-6">
                             
                              <input type="text" placeholder=" " name="amount" value="<?php echo $order_amount ?>" class="form-control" /readonly>
                            </div>
                          </div>
                     <?php
// Include configuration file
include_once 'config.php';

// Include database connection file
include_once 'dbConnect.php';
?>    
          <form action="<?php echo PAYPAL_URL; ?>" method="post">
          <!-- Identify your business so that you can collect the payments. -->
          <input type="hidden" name="business" value="<?php echo PAYPAL_ID; ?>">
          <input type="hidden" name="cmd" value="_xclick">
          <input type="hidden" name="item_name" value="Order Placement">
          <input type="hidden" name="item_number" value="<?php echo $order_id ?>">
          <input type="hidden" name="amount" value="<?php echo $order_amount ?>">
          <input type="hidden" name="currency_code" value="<?php echo PAYPAL_CURRENCY; ?>">
          <input type="hidden" name="return" value="<?php echo PAYPAL_RETURN_URL; ?>">
          <input type="hidden" name="cancel_return" value="<?php echo PAYPAL_CANCEL_URL; ?>">
          <input type="hidden" name="notify_url" value="<?php echo PAYPAL_NOTIFY_URL; ?>">
          
          <!-- Display the payment button. -->
          <input type="image" name="submit" border="0" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif">
        </form>


                        </div>
                      </div>
                         
          </div>
          <!-- /row -->
        </div>
        <!-- /container -->
      </section>
      <!-- /wrapper -->
    </section>
    <?php include 'footer.php' ; ?>