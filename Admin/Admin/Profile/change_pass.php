<div id="zoomInDown2" class="modal modal-adminpro-general modal-zoomInDown fade" role="dialog">
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
                                                                                <form action="" method="post">
                                                                                    <div class="form-group-inner">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-4">
                                                                                                <label class="login2">Name</label>
                                                                                            </div>
                                                                                            <div class="col-lg-8">
                                                                                                <input type="text" name="subject_name" class="form-control" placeholder="Name" required="Compulsory" />
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group-inner">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-4">
                                                                                                <label class="login2">Avarta</label>
                                                                                            </div>
                                                                                            <div class="col-lg-8">
                                                                                                <input type="file" name="Myfile"  required="Compulsory" class="form-control" placeholder="1.2" />
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="login-btn-inner">
                                                            
                                                                                        <div class="row">
                                                                                            <div class="col-lg-4"></div>
                                                                                            <div class="col-lg-8">
                                                                                                <div class="login-horizental">
                                                                                                    <button class="btn btn-sm btn-primary login-submit-cs" name="save1" type="submit">Update</button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                             </form>
<?php
 
  //require_once("../include/connection.php");




if (isset($_POST['save1'])) { // if save button on the form is clicked
    // name of the uploaded file

  $name = $_POST['name'];
  $rate=$_POST['rate'];

 $sql1 = "INSERT INTO order_subject (subject_name,rate) VALUES ('$subject_name','$rate')";
      

           if (mysqli_query($conn, $sql1)) {
                   echo  "<meta http-equiv=\"refresh\"content=\"0;URL=setconstant.php\">";
}
           
    }



   
?>
                                                                                
                                                                            </div>
                                                                    

                   