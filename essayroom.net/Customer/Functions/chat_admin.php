
<?php
	
	require_once("include/connection.php");
	//session_start();
	if(isset($_POST['msg'])){	
	date_default_timezone_set("East Africa/Nairobi");
  $date = date("M-d-Y h:i A",strtotime("+0 HOURS"));
	
		$msg = addslashes($_POST['msg']);
		$id = $_POST['id'];
        $username = $_POST['username'];
        $to_user = $_POST['to_user'];
		mysqli_query($conn,"insert into `chat` (chat_id_admin, chat_msg, username,to_user, chat_date) values ('$id', '$msg' , '$username','admin','$date')") or die(mysqli_error());
	}
?>
<?php
	if(isset($_POST['res'])){
		$id = $_POST['id'];
	?>
	<?php
		$query=mysqli_query($conn,"select * from `chat` left join `order_file` on order_file.ID=chat.username where chat_id_admin='$id' order by chatid asc") or die(mysqli_error());
		while($row=mysqli_fetch_array($query)){
			$username=$row['username'];
         $chat_msg=$row['chat_msg'];
         $chat_date=$row['chat_date'];
	if($username=='admin'){
		$username='ADMIN';
		echo "<div align='right' style='background-color:#EC6E66' >";
		echo "<strong><i>$username </i></strong></br>  $chat_msg; <br>";
		echo "<i><h20>$chat_date</h20></i><br>";
		echo "</div>";
		echo"<br>";

	}
	else{
		$username='ME';
		//$username='ME';
		echo "<div align='left' style='background-color:#03a9f4' >";
		echo "<strong>$username </strong></br> $chat_msg; <br>";
		echo "<span>$chat_date</span><br>";
		echo "</div>";
		echo"<br>";
	}
	
		}
	}	
?>

