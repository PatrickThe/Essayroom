
<?php
include('include/connection.php');
if (isset($_POST['pay_edit'])) { 
$ID = mysqli_real_escape_string($conn, $_POST["ID"]); 
 $query="SELECT * FROM order_file where ID = '$ID'";
$result_set=mysqli_query($conn,$query);
            while($row=mysqli_fetch_array($result_set)){
             $order_amount=$row['order_amount'];
              $ID=$row['ID'];
              $task_id = $row['task_id'];
              $topic=$row['topic'];
              $subject_id =$row['subject_id'];
              $order_pages=$row['order_pages'];
              $deadline_id =$row['deadline_id'];
              $academic_level_id=$row['academic_level_id'];
              $quality_id = $row['quality_id'];
              $order_sources=$row['order_sources'];
              $order_pptslides =$row['order_pptslides'];
              $order_citation=$row['order_citation'];
              $order_instructions = $row['order_instructions'];
              $order_amount=$row['order_amount'];
              $order_id=$row['order_id'];
              $endDate=$row['endDate'];

              }
            
                                                    } ?>
<?php include 'header.php' ;?>
   <section id="main-content" >
      <section class="wrapper site-min-height">
    <form method="POST" action="orderFinal1.php">
    <input type="hidden" name="ID" value="<?php echo $ID ?>">
    <input type='submit'  class="btn btn-success btn-lg" name='editorder' value='EDIT to Change price'/>
     </form>
<div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
             
              <div class="form-horizontal style-form" >
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Task</label>
                 <div class="col-lg-10">
                    <p class="form-control-static"><?php echo $task_id ;?></p>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Topic</label>
                   <div class="col-lg-10">
                    <p class="form-control-static"><?php echo $topic ;?></p>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Subject</label>
                   <div class="col-lg-10">
                    <p class="form-control-static"><?php echo $subject_id ;?></p>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Number of Pages</label>
                   <div class="col-lg-10">
                    <p class="form-control-static"><?php echo $order_pages ;?></p>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Deadline</label>
                   <div class="col-lg-10">
                    <p class="form-control-static"><?php echo $endDate ;?></p>
                    <div id="countdown" class='badge bg-important'></div>

                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Academic Level</label>
                   <div class="col-lg-10">
                    <p class="form-control-static"><?php echo $academic_level_id ;?></p>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Quality</label>
                   <div class="col-lg-10">
                    <p class="form-control-static"><?php echo $quality_id ;?></p>
                  </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Sources</label>
                   <div class="col-lg-10">
                    <p class="form-control-static"><?php echo $order_sources ;?></p>
                  </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Powerpoint slides</label>
                   <div class="col-lg-10">
                    <p class="form-control-static"><?php echo $order_pptslides ;?></p>
                  </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Paper Format</label>
                   <div class="col-lg-10">
                    <p class="form-control-static"><?php echo $order_citation ;?></p>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">prices </label>
                   <div class="col-lg-10">
                    <p class="form-control-static"><?php echo $order_amount ;?></p>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Instructions </label>
                   <div class="col-lg-10">
                    <p class="form-control-static"><?php echo $order_instructions ;?></p>
                  </div>
                </div>
             <?php
                                             $date = date('m/d/Y h:i:s a', time());
                                              $datep=date('Y-m-d H:i',strtotime($deadline_id,strtotime($date)));
                                              
                                              $deadline=date('Y-m-d H:i',strtotime('+0 hour +00 minutes',strtotime($endDate)));
                                              $date1 = new DateTime($deadline);
                                              $date2 = new DateTime($datep);

                                              $diff = $date2->diff($date1);

                                              $hours = $diff->h;
                                              $hours = $hours + ($diff->days*24);
                                             
                                             
                                             
                                             
                                              ?>
               <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">New deadline </label>
                   <div class="col-lg-10">
                    <?php echo $hours ;?>
                     
<?php 
                  //query for courses
                  $sqi="select * from order_deadline where name='$deadline_id' order by id desc";
                  $record=mysqli_query($conn,$sqi);
                  
                  while ($row=mysqli_fetch_array($record,MYSQLI_BOTH))
                  {
                    $cat=$row["name"];
                     $cat1=$row["rate"];
                    //echo "<option value=\"$cat1.($cat)\" class=\"text-center\">$cat</option>";

                     
                  $deadline=(double)$cat1/(int)$deadline_id;
                  $deadline1=(double)$order_amount/($deadline);
                  //echo $deadline1;
                  }


                  ?>


                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">price </label>
                   <div class="col-lg-10">
                    <p class="form-control-static"><?php echo $order_amount ;?></p>
                  </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">New price </label>
                   <div class="col-lg-10">
                    <p class='badge bg-important'><?php echo (int)$deadline1 ;?></p>
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
          <input type="hidden" name="amount" value="<?php echo (int)$deadline1 ;?>">
          <input type="hidden" name="currency_code" value="<?php echo PAYPAL_CURRENCY; ?>">
          <input type="hidden" name="return" value="<?php echo PAYPAL_RETURN_URL; ?>">
          <input type="hidden" name="cancel_return" value="<?php echo PAYPAL_CANCEL_URL; ?>">
          <input type="hidden" name="notify_url" value="<?php echo PAYPAL_NOTIFY_URL; ?>">
          
          <!-- Display the payment button. -->
           <input type='submit'  class="btn btn-success btn-lg" name='submit' value='Pay Now'/>
           
        </form>
              </div>
            </div>
          </div>

 <script>
      function countdownTimer() {
        const difference = +new Date("<?php echo $endDate ;?>") - +new Date();
        let remaining = "Time's up!";

        if (difference > 0) {
          const parts = {
            days: Math.floor(difference / (1000 * 60 * 60 * 24)),
            hours: Math.floor((difference / (1000 * 60 * 60)) % 24),
            minutes: Math.floor((difference / 1000 / 60) % 60),
            seconds: Math.floor((difference / 1000) % 60)
          };

          remaining = Object.keys(parts)
            .map(part => {
              if (!parts[part]) return;
              return `${parts[part]} ${part}`;
            })
            .join(" ");
        }

        document.getElementById("countdown").innerHTML = remaining;
      }

      countdownTimer();
      setInterval(countdownTimer, 1000);
    </script>

</div>
        </div>
      </section>
      <!-- /wrapper -->
    </section>
<?php include 'footer.php' ;?>












