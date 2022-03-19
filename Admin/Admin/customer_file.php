<div id="zoomInDown1" class="modal modal-adminpro-general modal-zoomInDown fade" role="dialog">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-close-area modal-close-df">
                                                                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="modal-login-form-inner">
                                                                    
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="basic-login-inner modal-basic-inner">
                                                                                <form action="" method="POST" enctype="multipart/form-data">
                                                                                    <div class="form-group-inner">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-4">
                                                                                                <label class="login2">ORDER_ID</label>
                                                                                            </div>
                                                                                            <div class="col-lg-8">
                                                                                                <select name="order_id" class="form-control col-sm-12 custom-select border-default" id="exampleSelect2">
     

<?php 
                  //query for courses
                  $sqi="select * from order_file where paid_status='1' order by id desc";
                  $record=mysqli_query($conn,$sqi);
                  
                  while ($row=mysqli_fetch_array($record,MYSQLI_BOTH))
                  {
                    $cat=$row["order_id"];
                     //$cat1=$row["ID"];
                    echo "<option value=\"$cat\" class=\"text-center\">-- $cat --</option>";

                  }

                  ?>




   </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group-inner">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-4">
                                                                                                <label class="login2">FILE</label>
                                                                                            </div>
                                                                                            <div class="col-lg-8">
                                                                                                <input type="file" name="myfile" id="exampleInputFile" >
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="login-btn-inner">
                                                            
                                                                                        <div class="row">
                                                                                            <div class="col-lg-4"></div>
                                                                                            <div class="col-lg-8">
                                                                                                <div class="login-horizental">
                                                                                                    <button class="btn btn-sm btn-primary login-submit-cs" name="upload" type="submit">Upload</button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <?php
 
  require_once("include/connection.php");




if (isset($_POST['upload'])) { // if save button on the form is clicked
    // name of the uploaded file

  $order_id = $_POST['order_id'];
  $filename = $_FILES['myfile']['name'];
$destination = '../../Customer/Order/uploads/' . $filename;
$extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server 
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

if (move_uploaded_file($file, $destination)) {
 //$sql1 = "INSERT INTO customer_file (NAME,SIZE,order_id) VALUES ('$filename','$SIZE','$order_id')";
   $sql1="update order_file set status='3' where order_id='$order_id'";
       mysqli_query($conn,"INSERT INTO customer_file (NAME,SIZE,order_id) VALUES ('$filename','$SIZE','$order_id')")or die(mysqli_error($conn));
                              

  if(mysqli_query($conn, $sql1)){
echo  "<meta http-equiv=\"refresh\"content=\"0;URL=order_file1.php\">";                   }

           

}
     else{

        echo "not okay";
     }      
    }



   
?>
                                                                             </form>

                                                                                
                                                                            </div>
                                                                    

                   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- x-editable End-->
        </div>
    </div>