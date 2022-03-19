<?php include 'header.php' ;?>


<section id="main-content">
      <section class="wrapper site-min-height">
        <!-- page start-->
        <div class="chat-room mt">
          <aside class="mid-side">
            <div class="chat-room-head">
              <h3>Referral Page Room</h3>
              <form action="#" class="pull-right position">
                <input type="text" placeholder="Search" class="form-control search-btn ">
              </form>
            </div>
            <div class="room-desk">
              <h4 class="pull-left">Referals</h4>
              <button onclick="myFunction()" class="pull-right btn btn-theme02">+ Copy Link</button>
              <div class="room-box">
           
 <input type="text" value="http://localhost/essayfinal/register.php?<?php echo $name;?>id=<?php echo $user_id;?>" id="myInput" /readonly>
                                        <script>
function myFunction() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  //alert("Copied the text: " + copyText.value);
}
</script>
                <div class="col-md-4 col-sm-4 mb">
                
                <!--  /darkblue panel -->
              </div>
              <div class="darkblue-panel pn">
                  <div class="darkblue-header">
                    
                  </div>
                  <h1 class="mt"><i class="fa fa-user fa-3x"></i></h1>
                  <p>+ <?php
   $q="select * from referal where user_id='$user_id' AND status='1'";
$res=mysqli_query($conn,$q);
echo mysqli_num_rows($res);
?></p>
                </div>
              </div>
              
          
          </aside>
         
        </div>
        <!-- page end-->
      </section>
      <!-- /wrapper -->
    </section>

 <?php include 'footer.php' ; ?>