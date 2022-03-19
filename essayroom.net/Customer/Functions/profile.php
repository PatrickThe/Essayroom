<?php include 'header.php' ;?>
<section id="main-content">
      <section class="wrapper site-min-height">
        <div class="row mt">
          <div class="col-lg-12">
            <div class="row content-panel">
            <?php
         require_once("include/connection.php");

            $query="SELECT * FROM login_user where email_address = '$userid'";
$result_set=mysqli_query($conn,$query);
            while($row=mysqli_fetch_array($result_set)){
              $name=$row['name'];
              //$user_password=$row['user_password'];
              
            
                                                    } ?>
                                                    <div id="edit" class="tab-pane">
                    <div class="row">
                      <div class="col-lg-8 col-lg-offset-2 detailed">
                        <h4 class="mb"></h4>
                         <button class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">
                CHANGE PASSWORD
                </button>
                      </div>
                      </div>
                    </div>
                                                    
             <div id="edit" class="tab-pane">
                    <div class="row">
                      <div class="col-lg-8 col-lg-offset-2 detailed">
                        <h4 class="mb">Personal Information</h4>
                        <form role="form" class="form-horizontal" action="server.php" method="post"  enctype="multipart/form-data">
                          <div class="form-group">
                            <label class="col-lg-2 control-label"> Avatar/Profile Pic</label>
                            <div class="col-lg-6">
                              <input type="file" name="myfile" id="exampleInputFile" class="file-pos">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">USERNAME</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " name="name" value="<?php echo $name;?>" class="form-control">
                              <input type="hidden" placeholder=" " name="email_address" value="<?php echo $userid ?>" class="form-control">
                            </div>
                          </div>
                         
                          <button class="btn btn-sm btn-primary login-submit-cs" name="editprof" type="submit">Edit Prof</button>
                        </form>
                      </div>
                      </div>
                    </div>




                   
                        




<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Enter your old password</h4>
                    </div>
                    <div class="modal-body">
                      <div class="form-group">
                        <form role="form" class="form-horizontal" action="server.php" method="post">
                            <label class="col-lg-2 control-label">PASSWORD</label>
                            <div class="col-lg-6">
                              <input type="password" placeholder=" " name="user_password" value="" class="form-control">
                              <input type="hidden" placeholder=" " name="email_address" value="<?php echo $userid ?>" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary" name="pass" >CONTINUE</button>
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





<script src="https://wchat.freshchat.com/js/widget.js"></script>
<script> window.fcWidget.init({ token: "54dd382f-b685-48ba-9e68-c59139e80e92", host: "https://wchat.freshchat.com",config: {
                                     disableEvents: true,
                                     cssNames: {
                                         widget: 'fc_frame',
                                         open: 'fc_open',
                                         expanded: 'fc_expanded'
                                     },
                                     showFAQOnOpen: true,
                                     hideFAQ: true,
                                     agent: {
                                         hideName: false,
                                         hidePic: false,
                                         hideBio: false,
                                     },
                                     headerProperty: {
                                         //If you have multiple sites you can use the appName and appLogo to overwrite the values.
                                         appName: 'HR CAPTURE',
                                         appLogo: 'https://d1qb2nb5cznatu.cloudfront.net/startups/i/2473-2c38490d8e4c91660d86ff54ba5391ea-medium_jpg.jpg?buster=1518574527',
                                         backgroundColor: '#FFFF00',
                                         foregroundColor: '#333333',
                                         backgroundImage: 'https://wchat.freshchat.com/assets/images/texture_background_1-bdc7191884a15871ed640bcb0635e7e7.png'
                                     },
                                     content: {
                                         placeholders: {
                                             search_field: 'Search',
                                             reply_field: 'Reply',
                                             csat_reply: 'Add your comments here'
                                         },
                                        }
                                 }
                                   }); </script> <script> window.fcWidget.setExternalId("<?php echo $email_address; ?>"); window.fcWidget.user.setFirstName("<?php echo $name; ?>"); window.fcWidget.user.setEmail("<?php echo $email_address; ?>"); window.fcWidget.user.setProperties({ location: window.location.href }); </script>









          <!-- /row -->
        </div>
        <!-- /container -->
      </section>
      <!-- /wrapper -->
    </section>
    <?php include 'footer.php' ; ?>