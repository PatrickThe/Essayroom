<?php 
$conn = mysqli_connect("localhost","root","","essayroom");

if(!$conn){
	die("Connection error: " . mysqli_connect_error());	
}
?>