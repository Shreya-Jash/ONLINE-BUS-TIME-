<?php
include('../Database/connect.php');
session_start();

if(isset($_POST['submit'])){
	$username = $_POST['user'];
	$password = $_POST['pass'];

	$sql = " select * from  admintable where user='$username' and pass='$password' ";
	$query = mysqli_query($conn,$sql);

	$row = mysqli_num_rows($query);
		if($row == 1){
			echo "<script>alert('login successful');</script>";
			$_SESSION['user'] = $username;
			header('location:../Database/insert.php');
		}else{
			echo "<script>alert('login failed');</script>";
			header('location:adminlog.php');
		}

}


?>