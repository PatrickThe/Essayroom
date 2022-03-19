
<?php require 'Functions/header.php' ?>
 <?php
                       require_once("include/connection.php");

                             $sql ="SELECT id,status,sum(status)  FROM order_file order by id desc;";
                             $result = mysqli_query($conn,$sql);
                             
                             while ($row = mysqli_fetch_array($result)) { 
                     
                               $status=$row['status'];
                               $status=$row['sum(status)'];
                            }
                     
                    ?>

<div class="income-order-visit-user-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="income-dashone-total income-monthly shadow-reset nt-mg-b-30">
                                
                                <div class="income-dashone-pro">
                                    <div class="income-rate-total">
                                        <div class="price-adminpro-rate">
                                            <h3><span>Total Orders</span></h3></br><span class="counter"><?php echo $status ;?></span></h3>
                                        </div>
                                        <div class="price-graph">
                                            <span id="sparkline1"></span>
                                        </div>
                                    </div>
                                    </div>

                                   
                                   
                            </div>
                        </div>
                    </div>
                </div>

            </div>















<?php
                       require_once("include/connection.php");

                             $sql ="SELECT user_id,status,sum(status)  FROM login_user order by user_id desc;";
                             $result = mysqli_query($conn,$sql);
                             
                             while ($rw=mysqli_fetch_array($result)) { 
                     
                               $status=$rw['status'];
                               $status=$rw['sum(status)'];
                            }
                     
                    ?>

<div class="income-order-visit-user-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="income-dashone-total income-monthly shadow-reset nt-mg-b-30">
                                
                                <div class="income-dashone-pro">
                                    <div class="income-rate-total">
                                        <div class="price-adminpro-rate">
                                            <h3><span>Total Customer</span></h3></br><span class="counter"><?php echo $status ;?></span></h3>
                                        </div>
                                        <div class="price-graph">
                                            <span id="sparkline1"></span>
                                        </div>
                                    </div>
                                    </div>

                                   
                                   
                            </div>
                        </div>
                    </div>
                </div>

            </div>











            <?php
                       
                             $sql2 ="SELECT ID,sum(status)  FROM order_file  where email_address='Not' order by ID desc;";
                             $result = mysqli_query($conn,$sql2);
                             
                             while ($r = mysqli_fetch_array($result)) { 
                     
                               //$status=$r['status'];
                               $status=$r['sum(status)'];
                            }
                     
                    ?>

<div class="income-order-visit-user-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="income-dashone-total income-monthly shadow-reset nt-mg-b-30">
                                
                                <div class="income-dashone-pro">
                                    <div class="income-rate-total">
                                        <div class="price-adminpro-rate">
                                            <h3><span>Total Complete Orders</span></h3></br><span class="counter"><?php echo $status ;?></span></h3>
                                        </div>
                                        <div class="price-graph">
                                            <span id="sparkline1"></span>
                                        </div>
                                    </div>
                                    </div>

                                   
                                   
                            </div>
                        </div>
                    </div>
                </div>

            </div>

                          <?php require 'Functions/footer.php' ?>