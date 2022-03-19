<?php 
	session_start();

	// variable declaration
	require_once("include/connection.php");
   
if(isset($_POST["ResetPass"])){


 $email_address = mysqli_real_escape_string($conn, $_POST["email_address"]);  
$pass_code=mysqli_real_escape_string($conn,$_POST['pass_code']);


$query=mysqli_query($conn,"select * from login_user where email_address='$email_address'");
$row=mysqli_fetch_array($query);
	 //$id=$row['email_address'];
    // $email_address=$row['email_address'];
  $_SESSION["email_address"] = $row["email_address"];
	if (mysqli_num_rows($query)<1){
		/* $_SESSION['message']="Login Error. Please Try Again"; */
		echo "<script>window.alert('Error. No such Email account .')</script>";
		echo "<script>window.location.href='../password_reset.php'</script>";
		//header('location:index.php');
	}
	else
			  {
			 




							
	 mysqli_query($conn,"UPDATE login_user SET pass_code= '$pass_code' WHERE  email_address='$email_address'")or die(mysqli_error($conn));
			header('location:../reset_password.php');
			$_SESSION['email_address'] = $email_address;


	}
}







if(isset($_POST["UpdatePass"])){

 $email_address = mysqli_real_escape_string($conn, $_POST["email_address"]);  
$pass_code=mysqli_real_escape_string($conn,$_POST['pass_code']);
 $password = password_hash($_POST['password'],PASSWORD_DEFAULT, array('cost' => 12));
$user_id = mysqli_real_escape_string($conn,$_POST['user_id']);




 $sql1="INSERT INTO notifications(noti_message,logi_id) VALUES('you changed password','$user_id')";

 mysqli_query($conn,"UPDATE login_user SET user_password= '$password' WHERE  email_address='$email_address' And pass_code='$pass_code'")or die(mysqli_error($conn));
            if(mysqli_query($conn, $sql1)){
                   echo  "<meta http-equiv=\"refresh\"content=\"0;URL=../login.php\">";
                   }
            




}
   
  ?>