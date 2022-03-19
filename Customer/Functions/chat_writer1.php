<style type="text/css">
	.right {
  position: relative;
  background: aqua;
  text-align: right;
  min-width: 45%;
  padding: 10px 15px;
  border-radius: 6px;
  border: 1px solid #ccc;
  float: right;
  right: 20px;
}

.right::before {
  content: '';
  position: absolute;
  visibility: visible;
  top: -1px;
  right: -10px;
  border: 10px solid transparent;
  border-top: 10px solid #ccc;
}

.right::after {
  content: '';
  position: absolute;
  visibility: visible;
  top: 0px;
  right: -8px;
  border: 10px solid transparent;
  border-top: 10px solid aqua;
  clear: both;
}



.left {
  position: relative;
  background: lightgreen;
  text-align: left;
  min-width: 45%;
  padding: 10px 15px;
  border-radius: 10px;
  border: 1px solid green;
  float: left;
  left: 20px;
}

.left::before {
  content: '';
  position: absolute;
  visibility: visible;
  top: -2px;
  right: -18px;
  border: 10px solid transparent;
  border-top: 10px solid lightgreen;
}

.left::after {
  content: '';
  position: absolute;
  visibility: visible;
  top: 0px;
  left: -8px;
  border: 10px solid transparent;
  border-top: 10px solid lightgreen;
  clear: both;
}
</style>
<?php
	
	require_once("include/connection.php");
	//session_start();
	if(isset($_GET['messo'])){	
	date_default_timezone_set("East Africa/Nairobi");
  $date = date("M-d-Y h:i A",strtotime("+0 HOURS"));
	
		$messo = addslashes($_GET['messo']);
		$chatid = $_GET['chatid'];
        $username= $_GET['username'];
        $to_user = $_GET['to_user'];
		mysqli_query($conn,"insert into `chat` (chat_room_id, chat_msg, username,to_user, chat_date) values ('$chatid', '$messo' , '$username','writer','$date')") or die(mysqli_error());
	}
?>
<?php
	if(isset($_GET['res'])){
		$chatid = $_GET['chatid'];
	?>
	<?php
	$query=mysqli_query($conn,"select * from `chat` where chat_room_id='$chatid' order by chatid asc") or die(mysqli_error());
		while($row=mysqli_fetch_array($query)){
		$username=$row['username'];
        $chat_msg=$row['chat_msg'];
        $chat_date=$row['chat_date'];
	if($username=='writer'){
		$username='Writer';
		echo "<div class='right' >";
		echo "<span><i style='text-align:right'>$username </i></span></br>  $chat_msg; <br>";
		echo "<i style='color:#F78677'><h20>$chat_date</h20></i><br>";
		echo "</div>";
		echo"<br>";



	}
	else{
		$username='ME';
		//$username='ME';
		echo "<div class='left'>";
		echo "<strong>$username </strong></br> $chat_msg; <br>";
		echo "<span style='color:#F78677'>$chat_date</span><br>";
		echo "</div>";
		echo"<br>";
	}
	
		}
	}	
?>

