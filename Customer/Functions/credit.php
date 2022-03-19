    
<?php require_once 'header.php' ;?>
    <section id="main-content">
      <section class="wrapper site-min-height">
        <div class="col-lg-12 mt">
          <div class="row content-panel">
            <div class="col-lg-10 col-lg-offset-1">
              <div class="invoice-body">
                <div class="pull-left">
                  <h1>ESSAYROOM</h1>
                 
                </div>
                <!-- /pull-left -->
                <div class="pull-right">
                  <h2>ACCOUNT BALANCE</h2>
                </div>
                <!-- /pull-right -->
                <div class="clearfix"></div>
                <br>
                <br>
                <br>
                <div class="row">
                  <div class="col-md-9">
                    <h4><?php echo $userid ;?></h4>
                    <address>
                  <strong>Essayroom Account.</strong><br>
                 
                </address>
                  </div>
                  <!-- /col-md-9 -->
                  <div class="col-md-3">
                    <br>
                    <div>
                      <div class="pull-left"> INVOICE NO : </div>
                      <div class="pull-right"> 00<?php echo $user_id ;?> </div>
                      <div class="clearfix"></div>
                    </div>
                    <div>
                      <!-- /col-md-3 -->
                      <div class="pull-left"> INVOICE DATE : </div>
                      <div class="pull-right"> <?php echo date("Y-M-D");?> </div>
                      <div class="clearfix"></div>
                    </div>
                    <!-- /row -->
                    <br>
                    <div class="well well-small green">
                      <div class="pull-left"> Total Due : </div>
                      <div class="pull-right">  <?php echo $account_bal ;?>USD </div>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                  <!-- /invoice-body -->
                </div>
                 <h4>Terms and Conditions</h4>
                        <p>Thank you for your business. We do expect payment within 21 days, so please process this invoice within that time. There will be a 1.5% interest charge per month on late invoices.</p>
                <!-- /col-lg-10 -->
                <table class="table" style="height:50px">
                  <thead>
                   
                  </thead>
                  <tbody>
                   
                   <a class="btn btn-theme" href="invoice3.php">Add Funds</a>
                  </tbody>
                </table>
                <br>
                <br>
              </div>
              <!--/col-lg-12 mt -->
      </section>
      <!-- /wrapper -->
    </section>

    <?php include 'footer.php' ; ?>