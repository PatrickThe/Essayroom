<div id="zoomInDown1b" class="modal modal-adminpro-general modal-zoomInDown fade" role="dialog">
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
                                                                                     <div class="login-form-area mg-t-30 mg-b-40">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <form id="adminpro-contact-form" class="adminpro-form">
                            <div class="col-lg-6">
                                <div class="login-bg">
                                    
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="login-title">
                                                <h1>Contacts Form</h1>
                                            </div>
                                        </div>
                                    </div>
                                   
                                   
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>Subject</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="login-input-area">
                                                <input type="text" name="blog_name" />
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>Message</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="login-textarea-area">
                                                <textarea name="description" class="contact-message" cols="30" rows="10"></textarea>
                                            
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                                                                            <div class="col-lg-4">
                                                                                                <label class="login2">IMAGE</label>
                                                                                            </div>
                                                                                            <div class="col-lg-8">
                                                                                                <input type="file" name="myfile" id="exampleInputFile" >
                                                                                            </div>
                                                                                        </div>
                                    <div class="row">
                                        <div class="col-lg-4"></div>
                                        <div class="col-lg-8">
                                            <div class="login-button-pro">
                                                <button type="submit" class="login-button login-button-lg" name="upload">UPLOAD</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="col-lg-3"></div>
                    </div>
                </div>
            </div>
<?php
require_once("include/connection.php");

if (isset($_POST['upload'])) { // if save button on the form is clicked
    // name of the uploaded file

  $blog_name = $_POST['blog_name'];
  $description = $_POST['description'];
  $filename = $_FILES['myfile']['name'];
$destination = '../../blogs/' . $filename;
$extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server 
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

if (move_uploaded_file($file, $destination)) {
 //$sql1 = "INSERT INTO customer_file (NAME,SIZE,order_id) VALUES ('$filename','$SIZE','$order_id')";
  
       mysqli_query($conn,"INSERT INTO blog_events (NAME,size,blog_name,description) VALUES ('$filename','$size','$blog_name','$description')")or die(mysqli_error($conn));
                              

          
    }

else{

        echo "not UPLOADED";
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