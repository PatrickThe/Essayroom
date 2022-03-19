<div class="modal fade" id="FileUpload" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">File Upload to Writer</h4>
                    </div>
                    <div class="modal-body">
                      <div class="form-group">
                        <form action="" method="post" enctype="multipart/form-data">
                            <label class="col-lg-2 control-label">ORDER Number</label>
                            <div class="col-lg-6">
                              <select name="order_id" class="form-control custom-select border-default col-sm-12" id="exampleSelect1">

<?php 
                  //query for courses
                  $sqi="SELECT * FROM order_file Where email_address='$userid' and status='1'";
                  $record=mysqli_query($conn,$sqi);
                  
                  while ($row=mysqli_fetch_array($record,MYSQLI_BOTH))
                  {
                    
                    $cat2=$row["ID"];
                    $cat=$row["order_id"];
                     
                    echo "<option value=\"$cat2\" class=\"text-center\">-- $cat --</option>";

                  }

                  ?>

</select>
  
                            </div>
                            <input type="hidden" name="email_address" value="<?php echo $userid ;?>"  >
                             <input type="file" name="myfile" class="form-control" >
                            <button type="submit" class="btn btn-primary" name="upload" >CONTINUE to Upload</button>
                            </form>
                          </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <?php
 
  require_once("include/connection.php");




if (isset($_POST['upload'])) { // if save button on the form is clicked
    // name of the uploaded file

  $order_id = $_POST['order_id'];
  $email_address = $_POST['email_address'];
  $filename = $_FILES['myfile']['name'];
$destination = 'uploads/' . $filename;
$extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server 
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

if (move_uploaded_file($file, $destination)) {
 //$sql1 = "INSERT INTO customer_file (NAME,SIZE,order_id) VALUES ('$filename','$SIZE','$order_id')";
       mysqli_query($conn,"INSERT INTO general_files (NAME,SIZE,from_user,to_user,order_id) VALUES ('$filename','$SIZE','$email_address','writer','$order_id')")or die(mysqli_error($conn));
                              
echo  "<meta http-equiv=\"refresh\"content=\"0;URL=dashboard.php\">";
           

}
     else{

       echo  "<meta http-equiv=\"refresh\"content=\"0;URL=dashboard.php\">";
     }      
    }



   
?>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>