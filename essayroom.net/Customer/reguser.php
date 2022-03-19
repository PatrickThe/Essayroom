<?php 
	session_start();

	// variable declaration
	require_once("include/connection.php");
   
  if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$name = mysqli_real_escape_string($conn, $_POST['name']);
		$email_address = mysqli_real_escape_string($conn, $_POST['email_address']);
        $password = password_hash($_POST['password'],PASSWORD_DEFAULT, array('cost' => 12));
	

		
         $ip = $_SERVER["REMOTE_ADDR"];
         $host = gethostbyaddr($_SERVER['REMOTE_ADDR']);

	
			$user_password = ($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO login_user (name, email_address, user_password,ip,host) 
					  VALUES('$name', '$email_address', '$password','$ip','$host')";
			mysqli_query($conn, $query);

			 mysqli_query($conn,"INSERT INTO notifications(noti_message,logi_id) VALUES('new account created','0')")or die(mysqli_error($conn));
               
    


			$_SESSION['email_address'] = $email_address;
			$_SESSION['success'] = "You are now logged in";
			header('location: Functions/dashboard.php');
		}

	
	// ... 

	// LOGIN USER
if(isset($_POST["logIn"])){

  date_default_timezone_set("asia/manila");
  $date = date("M-d-Y h:i A",strtotime("+0 HOURS"));

 $email_address = mysqli_real_escape_string($conn, $_POST["email_address"]);  
 $user_password = mysqli_real_escape_string($conn, $_POST["user_password"]);


$query=mysqli_query($conn,"select * from login_user where email_address='$email_address'");
$row=mysqli_fetch_array($query);
	
	if (mysqli_num_rows($query)<1){
	
		echo "<script>window.alert('Login Error. No such account .')</script>";
		echo "<script>window.location.href='../register.php'</script>";
	
	}
	else
			  {
			  if(password_verify($user_password, $row["user_password"]))  
                 {
				  //$_SESSION['email_address']=$row['email_address'];	
			
                        if (!empty($_SERVER["HTTP_CLIENT_IP"]))
							{
							 $ip = $_SERVER["HTTP_CLIENT_IP"];
							}
							elseif (!empty($_SERVER["HTTP_X_FORWARDED_FOR"]))
							{
							 $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
							}
							else
							{
							 $ip = $_SERVER["REMOTE_ADDR"];
							}

							$host = gethostbyaddr($_SERVER['REMOTE_ADDR']);


                           $remarks="Has LoggedIn the system at";  
                         $id=0;
                          mysqli_query($conn,"INSERT INTO history_log(id,email_address,action,ip,host,login_time) VALUES('$id','$email_address','$remarks','$ip','$host','$date')")or die(mysqli_error($conn));
 $_SESSION['email_address'] = $email_address;
			header('location: Functions/dashboard.php');
	}else{

		echo "<script>window.alert('Login Error. Wrong credentials.')</script>";
		echo "<script>window.location.href='../login.php'</script>";
	}
}
}








    if (isset($_POST['contact'])) {
		// receive all input values from the form
		$name = mysqli_real_escape_string($conn, $_POST['name']);
		$email_address = mysqli_real_escape_string($conn, $_POST['email_address']);
        $subject=mysqli_real_escape_string($conn,$_POST['subject']);
         $message=mysqli_real_escape_string($conn,$_POST['message']);
        
		
	  mysqli_query($conn,"INSERT INTO contact(name,email_address,subject,message) VALUES('$name','$email_address','$subject','$message')")or die(mysqli_error($conn));
			

	}
?>