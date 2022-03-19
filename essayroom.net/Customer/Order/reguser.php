<?php 
	session_start();

	// variable declaration
	require_once("../include/connection.php");
   
  if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$name = mysqli_real_escape_string($conn, $_POST['name']);
		$email_address = mysqli_real_escape_string($conn, $_POST['email_address']);
        $password_1 = password_hash($_POST['password_1'],PASSWORD_DEFAULT, array('cost' => 12));
		$password_2 = password_hash($_POST['password_2'],PASSWORD_DEFAULT, array('cost' => 12));

		 //$user_password = password_hash($_POST['user_password'], PASSWORD_DEFAULT, array('cost' => 12)); 
         $ip = $_SERVER["REMOTE_ADDR"];
         $host = gethostbyaddr($_SERVER['REMOTE_ADDR']);

		// form validation: ensure that the form is correctly filled
		if (empty($name)) { array_push($errors, "Username is required"); }
		if (empty($email_address)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$user_password = ($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO login_user (name, email_address, user_password,ip,host) 
					  VALUES('$name', '$email_address', '$user_password','$ip','$host')";
			mysqli_query($conn, $query);

 mysqli_query($conn,"UPDATE order_file SET email_address= '$email_address' WHERE ip = '$ip' And email_address='not'")or die(mysqli_error($conn));
           
			$_SESSION['email_address'] = $email_address;
			$_SESSION['success'] = "You are now logged in";
			header('location: ../Functions/dashboard.php');
		}

	}
	// ... 

	// LOGIN USER
if(isset($_POST["logIn"])){

  date_default_timezone_set("asia/manila");
  $date = date("M-d-Y h:i A",strtotime("+0 HOURS"));

 $email_address = mysqli_real_escape_string($conn, $_POST["email_address"]);  
 $user_password = mysqli_real_escape_string($conn, $_POST["user_password"]);

// $pass=sha1($pass1);
// $salt="a1Bz20ydqelm8m1nel";
// $pass1=$salt.$pass;

$query=mysqli_query($conn,"SELECT * FROM  login_user WHERE email_address = '$email_address'")or die(mysqli_error($conn));
		$row=mysqli_fetch_array($query);
           $id=$row['email_address'];
           //$email_address=$row['email_address'];
           $_SESSION["email_address"] = $row["email_address"];
           //$_SESSION["user_no"] = $row["email_address"];
		   //$_SESSION["email_address"] = $row["email_address"];
    
           $counter=mysqli_num_rows($query);
            
		  	if ($counter == 0) 
			  {	
				  echo "<script type='text/javascript'>alert('Invalid Email Address or Password,Please try again!');
				  document.location='login.php'</script>";
			  } 
			  else
			  {
			  if(password_verify($user_password, $row["user_password"]))  
                 {
				  //$_SESSION['email_address']=$email_address;	
			
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
                      
                          mysqli_query($conn,"INSERT INTO history_log(id,email_address,action,ip,host,login_time) VALUES('0','$user','$remarks','$ip','$host','$date')")or die(mysqli_error($conn));

                           mysqli_query($conn,"UPDATE order_file SET email_address= '$email_address' WHERE ip = '$ip' And email_address='not'")or die(mysqli_error($conn));
           
			$_SESSION['email_address'] = $email_address;
			$_SESSION['success'] = "You are now logged in";
			header('location: ../Functions/dashboard.php');
                 
			  	//echo "<script type='text/javascript'>document.location=' Functions/dashboard.php'</script>";  
		 }else{
                 echo "<script type='text/javascript'>alert('Invalid Password,Please try again!');
				  document.location='login.php'</script>";

		 }

	  }
   }
?>