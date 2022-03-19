
 <section id="main-content">
      <section class="wrapper site-min-height" style="background-color:#F1CFCD">
      
        <div class="row mt">
          <div class="col-lg-12">
    <?php
         //require_once("include/connection.php");
if (isset($_POST['chat_writer'])) {
$chatid=$_POST['chatid'];
            $query="SELECT * FROM order_file where ID = '$chatid'";
$result_set=mysqli_query($conn,$query);
            while($row=mysqli_fetch_array($result_set)){
              $ID=$row['ID'];
              $order_id=$row['order_id'];
              
            }
                                                    ?>         
<table id="chat_room" align="center" border="2px">
  <tr>
 

<th style="background-color:#8533ff; height:100px; width: 100px;"><center><h3><i class="fa fa-angle-right"></i> <a href class="logo"><b>ORDER NUMBER<span>:<?php echo $order_id ; }?></span></b></a> </h3></center></th>

  </tr>
 
        <div>
        <tr>
        <td></td><br><br>
        </tr>
        </div>
      <tr>
        <td>
        