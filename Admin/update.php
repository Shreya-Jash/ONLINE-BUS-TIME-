<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Update</title>
<?php include('../java script/myscript.php')?>

<link rel="stylesheet" href="../css/update.css"/>
</head>
<?php
include("connect.php");
error_reporting(0);
 
?>
<body onLoad="startTime()">
<div id="txt"></div>


<div class="container center-div shadow">
		<div class="ss"> Welcome::
			<?php session_start(); 
			
			if(isset($_SESSION['user']))
			{
				echo $_SESSION['user'];
				
			}
			else
			{
				echo"<script> alert('Login Failed');</script>";
				header('location:adminlog.php');
			}
			?>
		<button type="submit" class="btn" ><a href="../Admin/logout.php" >  Logout</a></button>
</div>
				<center>
				<table id="t1">
				<form action="" method="post">
				<tr><td><label for "busname">Bus Name</label></td>
				<td><input type="text"name="bus_name"value="<?php echo $_GET['name'];?>"/> </td></tr>
				<tr><td><label for "busno">Bus Number</label></td>
				<td><input type="text"name="bus_no" value=" <?php echo $_GET['bus_no'];?>"/> </td></tr>
				<tr><td><label for "route">Route</label></td>
				<td><select name="route" >
				<option ><?php echo $_GET['route'];?>  </option>
				<option >   </option>
				<option >Bardhaman   </option>
				<option > Kalna</option>
				<option >Kusumgram</option>
				<option >Maldanga   </option>
				<option >Malamba   </option>
				<option >Memari</option>
				<option >Monteswar   </option>
				</select></td></tr>
				<tr><td><label for "arr_time" required>Arr_Time</label></td>
				<td><input type="time"name="a_time" value="<?php echo $_GET['arr_time'];?>"/> </td></tr>
				<tr><td><label for "dept_time">Dept_Time</label></td>
				<td><input type="time"name="d_time" value="<?php echo $_GET['dept_time'];?>"/> <br /></td></tr>
				<tr><td><input type="submit" class="btn" value="Update"name="submit"></td>
				
				<td><button type="submit" class="btn" ><a href="INSERT.php" >  INSERT NEW RECORD</a></button>
</td></tr>
				</form>
				</table>
				</center>
				<?php
if($_POST['submit'])
{



	$id= $_GET['id'];
	$bus_name=$_POST['bus_name'];
	$bus_no=$_POST['bus_no'];
  	$route=$_POST['route'];
 	$arr_time=$_POST['a_time'];
	$dept_time=$_POST['d_time'];
 	
	
	
	$query = "update buses set name='$bus_name', bus_no='$bus_no',route='$route',arr_time='$arr_time',
 	dept_time='$dept_time' where id='$id'";
	$data=mysqli_query($conn,$query);
		if($data)
		{
			header('Location:insert.php');	
		}
		else
		{
			echo "Record not Updated";
		}
}
else
{
		echo "<center><font color='green' size='5'>Click on update button to save the changes</font></center>";
}

?>
</body>
</html>
