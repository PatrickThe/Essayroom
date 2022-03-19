<?php
$q="select * from location where community='Zoo' AND status='1'";
$res=mysqli_query($con,$q);
echo mysqli_num_rows($res);
?>