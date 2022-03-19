
<?php
include('include/connection.php');
if (isset($_POST['view_details'])) { 
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
     
<div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
             
              <form class="form-horizontal style-form" method="get">
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
                  <label class="col-lg-2 col-sm-2 control-label">Instructions </label>
                  <div class="col-lg-10">
                    <p class="form-control-static"><?php echo $order_instructions ;?></p>
                  </div>
                </div>
              </form>
            </div>
          </div>
                                           
 <script>
      function countdownTimer() {
        const difference = +new Date("<?php echo $endDate ;?>") - +new Date();
        let remaining = "Time expired!";

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












