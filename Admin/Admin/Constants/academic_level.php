<div id="zoomInDown5" class="modal modal-adminpro-general modal-zoomInDown fade" role="dialog">
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
                                                                                                <input type="text" name="academic_name" class="form-control" placeholder="Name" required="Compulsory" />
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group-inner">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-4">
                                                                                                <label class="login2">rate</label>
                                                                                            </div>
                                                                                            <div class="col-lg-8">
                                                                                                <input type="text" name="rate"  required="Compulsory" class="form-control" placeholder="1.2" />
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="login-btn-inner">
                                                            
                                                                                        <div class="row">
                                                                                            <div class="col-lg-4"></div>
                                                                                            <div class="col-lg-8">
                                                                                                <div class="login-horizental">
                                                                                                    <button class="btn btn-sm btn-primary login-submit-cs" name="savea" type="submit">ADD</button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                             </form>
<?php
 
  require_once("include/connection.php");




if (isset($_POST['savea'])) { // if save button on the form is clicked
    // name of the uploaded file

  $academic_name = $_POST['academic_name'];
  $rate=$_POST['rate'];

 $sql1 = "INSERT INTO order_aclevel (academic_name,rate) VALUES ('$academic_name','$rate')";
      

           if (mysqli_query($conn, $sql1)) {
                   echo  "<meta http-equiv=\"refresh\"content=\"0;URL=setconstant.php\">";
}
           
    }



   
?>
                                                                                
                                                                            </div>
                                                                    

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="x-editable-list shadow-reset">
                                <div class="alert-title">
                                    <h2>ACADEMIC LEVEL SETTINGS</h2>
                                    
                                </div>
                                <table id="user" class="table table-bordered table-striped x-editor-custom">
                                    
                                    <thead>
                                        
                                        <tr>
                                          <th></th>
                                            <th>NAME</th>
                                            <th>RATE</th>
                                            <th>ACTION</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                    <?php
         //require_once("include/connection.php");

            $query="SELECT * FROM order_aclevel ";
$result_set=mysqli_query($conn,$query);
            while($row=mysqli_fetch_array($result_set)){
             
            $id=$row['id'];
            $academic_name=$row['academic_name'];
            $rate=$row['rate'];



                                                     
                                                     ?>
                                                        <tr>
                                                        <form method="Post" action="">
                                                    <td><input type='text' name='id' value='<?php echo $id ?>'/hidden></td>
                                                     <td><?php echo $academic_name ?></td>
                                                     <td><?php echo $rate ?></td>
                                                     <td><button class="btn btn-sm btn-primary login-submit-cs" name="delete0" type="submit">DELETE</button>
                                                     </td>
                                                     </form>
                                                    <?php
 require_once("include/connection.php");
 


if (isset($_POST['delete0'])) { // if save button on the form is clicked
    // name of the uploaded file
$id=$_POST['id'];
 
 mysqli_query($conn,"delete from `order_aclevel` where `id`='$id'")or die(mysqli_error($conn));
    //delete from `jobs` where `id`='$jjid' and `owner`='$umail'

            
                   echo  "<meta http-equiv=\"refresh\"content=\"0;URL=setconstant.php\">";

            
          }
                                                     

                                                     } ?>
                                       
                                                   
                                                    </tr>
                                                   
                              

                                    
                                    </tbody>
                               
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- x-editable End-->
        </div>
    </div>