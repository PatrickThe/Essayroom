

    <?php include 'notify.php' ?>




<footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>essayroom</strong>. All Rights Reserved
        </p>
        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
          Created with Essayroom developer by <a href="https://templatemag.com/">for online writting</a>
        </div>
        <a href="index.html" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
              
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>

  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="lib/gritter-conf.js"></script>
  <!--script for this page-->
  <script src="lib/sparkline-chart.js"></script>
  <script src="lib/zabuto_calendar.js"></script>
  <script src="main.js"></script>
  <?php
require_once("include/connection.php");

//session_start();
if(!isset($_SESSION["email_address"])){
    header("location:../../index.html");

} else{
    $admin = $_SESSION['email_address'];
}


     


   $userid = mysqli_real_escape_string($conn,$_SESSION['email_address']);

$query="SELECT * FROM order_file Where email_address='$userid'";
$result_set=mysqli_query($conn,$query);
  while($rw=mysqli_fetch_object($result_set)){

     //$paid_status = $rw['paid_status'];
     //$email_address = $rw['email_address'];

   
  if($rw->paid_status=='0'){
 $query1="SELECT * FROM login_user Where email_address='$userid'";
$result_set=mysqli_query($conn,$query1);
            while($row=mysqli_fetch_object($result_set)){

   echo "<script type='text/javascript'>
    $(document).ready(function() {
      var unique_id = $.gritter.add({
        // (string | mandatory) the heading of the notification
        title: 'hey $row->name,Welcome to Essayroom!',
        // (string | mandatory) the text inside the notification
        text: 'Kindly complete payment for your order $rw->order_id.Go to ,My Orders on your dashboard and select unpaid orders and make the payment please!!',
        // (string | optional) the image to display on the left
        image: 'img/ui-sam.jpg',
        // (bool | optional) if you want it to fade out on its own or just sit there
        sticky: false,
        // (int | optional) the time you want it to be alive for before fading out
        time: 8000,
        // (string | optional) the class name you want to apply to that specific message
        class_name: 'my-sticky-class'
      });

      return false;
    });
  </script>";
}
}

 }
  ?>

  
  <script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script>
</body>
 <script type="text/javascript">
  $(window).on('load', function(){
    //you remove this timeout
    setTimeout(function(){
          $('#loader').fadeOut('slow');  
      });
      //remove the timeout
      //$('#loader').fadeOut('slow'); 
  });
</script>
</html>