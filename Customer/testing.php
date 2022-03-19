<?php

require_once("include/connection.php");
$q="select * from notifications where status='0' ";
$res=mysqli_query($conn,$q);
echo mysqli_num_rows($res);
?>