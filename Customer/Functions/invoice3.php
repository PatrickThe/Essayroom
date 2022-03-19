<?php require_once 'header.php' ;?>
<section id="main-content">
      <section class="wrapper site-min-height">
        <div class="row mt">
          <div class="col-lg-12">
            <div class="row content-panel">


               <?php
// Include configuration file
include_once 'config.php';

// Include database connection file
include_once 'dbConnect.php';
?>     
            <?php
         require_once("../include/connection.php");
$permitted_chars = '123456789';
 
function generate_string($input, $strength = 16) {
    $input_length = strlen($input);
    $random_string = '';
    for($i = 0; $i < $strength; $i++) {
        $random_character = $input[mt_rand(0, $input_length - 1)];
        $random_string .= $random_character;
    }
 
    return $random_string;
}
 

//echo generate_string($permitted_chars, 20);
 

 
?>


            

                       <div id="edit" class="tab-pane">
                    <div class="row">
                      <div class="col-lg-8 col-lg-offset-2 detailed">
                        <h4 class="mb">ESSAYROOM PAYMENT SECTION</h4>
                        <form role="form" class="form-horizontal" action="<?php echo PAYPAL_URL; ?>" method="post" >
                          <div class="form-group">
                            
                          </div>
                          
                          <div class="form-group">
                           
                            <div class="col-lg-6">
                            
                              <input type="hidden" placeholder=" " name="order_id" value="<?php echo generate_string($permitted_chars, 6); ?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">AMOUNT IN</label>
                            <div class="col-lg-6">
                             <input type="hidden" name="business" value="<?php echo PAYPAL_ID; ?>">
                             <input type="hidden" name="cmd" value="_xclick">
                             <input type="hidden" name="item_name" value="Refund Placement">
                             <input type="hidden" name="item_number" value="<?php echo $order_id ?>">
                             
                             <input type="hidden" name="currency_code" value="<?php echo PAYPAL_CURRENCY; ?>">
                            <input type="hidden" name="return" value="<?php echo PAYPAL_RETURN_URL; ?>">
                            <input type="hidden" name="cancel_return" value="<?php echo PAYPAL_CANCEL_URL; ?>">
                             <input type="hidden" name="notify_url" value="<?php echo PAYPAL_NOTIFY_URL; ?>">
                              <input type="text" placeholder="$30" name="amount" value="" class="form-control" /required>
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