<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content=""><meta name="author" content="">
  <title>essayroom Login</title><!-- Bootstrap core CSS --><!-- Custom fonts for this template -->
  <link rel="stylesheet" href="css/css-fontawesome-all.min.css"><!-- Custom styles for this template -->
  <link href="css/public-opskill-styles.css" rel="stylesheet">
  <link href="css/css-bootstrap.min.css" rel="stylesheet">
  <script src="js/js-jquery.min.js"></script>
  <script src="js/js-bootstrap.min.js"></script>
</head>
  <div id="content" class="site-content">

    <div class="ast-container">
    </div>
  </div>
</div>
<link rel="stylesheet" type="text/css" href="css/dropzone-basic.min.css">
<script type="text/javascript" src="js/dropzone-jquery.js"></script>
<script type="text/javascript" src="js/dropzone-dropzone.min.js"></script>
<script src="js/ckeditor-ckeditor.js"></script>
<section class="features" id="features">
  <body style="background-color:lightgray">
<?php include '../include/connection.php';?>
<table height="30%" width="100%" border="2px" style="background-color:lightblue">
  <thead>
    <th></th>

   <th>SUBJECT</th> 
   <th>DEADLINE</th> 
   <th>ORDER NUMBER</th> 
   <th>PRICE</th> 
    <th></th> 


  </thead>
  <tbody>
    <?php
         
 $host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$ip = $_SERVER["REMOTE_ADDR"];
            $query="SELECT * FROM order_file where host='$host' and email_address='not'";
$result_set=mysqli_query($conn,$query);
            while($row=mysqli_fetch_object($result_set)){
             





             
                                                        echo "<tr>";
                                                         echo "<form action='server.php' method='post'>";
                                                          echo "<input type='hidden'   name='order_id' value='$row->order_id'  />";
                                                      echo "<td><input type='submit' class='btn col-sm-12 btn-warning' name='delete' value='Delete Order'  /></td>";
                                                   echo "</form>";
                                                     echo "<td>$row->subject_id</td>";
                                                     echo "<td>$row->deadline_id</td>";
                                                     echo "<td>$row->order_id</td>";
                                                    echo "<td>$row->order_amount</td>";
                                                
                                                    echo "<form action='orderFinal1.php' method='post'>";
                                                          echo "<input type='hidden'   name='order_id' value='$row->order_id'  />";
                                                    echo "<td><input type='submit' class='btn col-sm-12 btn-warning' name='editorder' value='Edit Order'  /></td>";
                                                     echo "</form>";
                                                    echo "</tr>";
                                                     } ?>


  </tbody>
</table>





<hr><button  type="submit" name="save"  class="btn col-sm-12 btn-warning" data-toggle="modal" data-target="#exampleModallogin" >I AGREE WITH THE TERMS AND CONDITION</button></div>


</form>






<div class="row">
<div class="col-lg-9 col-md-12">
<!-- Modal -->
<div class="modal fade" id="exampleModallogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">CUSTOMER LOGIN or SIGN UP</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

<ul class="nav nav-tabs text-center row" id="myTab" role="tablist"><li class="nav-item col-sm-4">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">New Customer</a>
  </li>
  <li class="nav-item col-sm-6">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Returning Customer</a>
  </li>

</ul><div class="tab-content" id="myTabContent">
  <div class="tab-pane fade p-3 show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                
<form action="reguser.php" method="POST">
 
      <div class="form-group">
    <label  class="col-sm-12 col-form-label text-muted">Your Name</label>
    <div class="col-sm-12">
    <input type="text" name="name" class="form-control" placeholder="Your Name" ></div>
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail1" class="col-sm-12 col-form-label text-muted">Email address</label>
    <div class="col-sm-12">
    <input type="email" name="email_address" class="form-control" id="inputEmail3" placeholder="Email" required></div>
  </div>

      <div class="form-group">
      <label for="inputPassword3" class="col-sm-12 col-form-label text-muted">Password</label>
      <div class="col-sm-12">
        <input type="password" name="password_1" class="form-control" id="inputPassword3" placeholder="Password" required></div>
      </div>
       <div class="form-group">
      <label for="inputPassword3" class="col-sm-12 col-form-label text-muted">Confirm Password</label>
      <div class="col-sm-12">
        <input type="password" name="password_2" class="form-control" id="inputPassword3" placeholder="Password" required></div>
      </div>
    <div class="col-sm-7 mx-auto">
  <button type="submit" id="loginprocess"  name="reg_user" class="btn col-sm-12 btn-warning">Continue</button>
</div>
</form>




  </div>
  <div class="tab-pane p-3 fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
<form  class="form-login" action="reguser.php" method="POST">
                
    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-12 col-form-label text-muted">Email</label>
      <div class="col-sm-12">
        <input type="text" name="email_address" class="form-control" id="" placeholder="Email" required="" /></div>
    </div>
    <div class="form-group row">
      <label for="inputPassword3" class="col-sm-12 col-form-label text-muted">Password</label>
      <div class="col-sm-12">
        <input type="password" name="user_password" class="form-control" placeholder="Password" required="" /><small>
          <a href="resetpass.html">Forgot Password</a></small>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-sm-12 mx-auto">
        <button type="submit" name="logIn" class="btn col-sm-12 btn-warning">Sign in</button>
      </div>
    </div>
  </form>
</div>
</div>


      </div>

    </div>
  </div>
</div>


