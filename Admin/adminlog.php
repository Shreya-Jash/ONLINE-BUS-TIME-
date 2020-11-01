<?php
include('../java script/myscript.php')


 ?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/admin.css">
	<style>
	




/* Dropdown Button */
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #3e8e41;}
.btn {
	padding: 10px;
	font-size: 15px;
	color: white;
	background: #5F9EA0;
	border: none;
	border-radius: 5px;
	
}
.btn a{
text-decoration:none;
color:#CCCC33;s
}
	</style>
</head>
<body onLoad="startTime()">
			<div id="txt"></div>

<header>
	<form method="post" action="">
	<p align="center" style="color:#99CC00;">ADMIN LOGIN PAGE</p>
	<?php
		if(isset($_GET['error']))
		{
			
						
			 	if($_GET['error']="wrongpassword")
				{
					echo '<p class="loginerror">Username or password wrong<b>';
				}
				 
			
		}
		else if(isset($_GET['error1']))
		{
					if($_GET['error']="emptyfields")
					{
						echo '<p class="loginerror">Fill in all fields!<b>';
					}	
		}
		else if(isset($_GET['error']))
		{
					if($_GET['error']="wronguser")
					{
						echo '<p class="loginerror">Wrong User<b>';
					}	
		}
		?>

	<div class="input-group">
		<label>Username</label>
		<input type="text" name="user" value="">
	</div>
		<div class="input-group">
		<label>Password</label>
		<input type="password" name="pass" >
	
	<div class="input-group">
		<button type="submit" class="btn" name="submit">Sign In</button>
		<button type="submit" class="btn" ><a href="../index.php">Welcome Page</a></button>
	</div>
	</form>
</header>

<?php
include('connect.php');
//session_start();

if(isset($_POST['submit']))
{
	$username = $_POST['user'];
	$password = $_POST['pass'];
	 
		if(empty($username)|| empty($password))
		{
			header("Location: adminlog.php?error1=emptyfields");
			exit();	
		
		}
	
	else
	{
	
		$sql = " select * from  admintable where user=? ";
		
		$stmt=mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt,$sql))
		{
			header("Location: adminlog.php?error=sqlerror");
			exit();
		}
		else
		{
			mysqli_stmt_bind_param($stmt,"s",$username);
			mysqli_stmt_execute($stmt);
			$result=mysqli_stmt_get_result($stmt);
			if($row=mysqli_fetch_assoc($result)){
			
			
				if ($password!=$row['pass'])
				{
							
							header("Location: adminlog.php?error=Wrongpassword");
							exit();
						
				}
				
					else if($password==$row['pass']){
					session_start();
					$_SESSION['user']=$row['user'];
					header("Location: insert.php?login=Success");
						exit();
					}
				}
			}
		}
		
	}
	
	?>

</body>
</html>