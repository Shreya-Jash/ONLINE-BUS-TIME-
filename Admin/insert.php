<link rel="stylesheet" href="../css/insert.css"/>
<?php

session_start();
if(!isset($_SESSION['user'])){
	header('location:adminlog.php');
}
include('../java script/myscript.php');
include('connect.php');
?>

	
<body onLoad="startTime()">
<div id="txt"></div>
			
<div class="container center-div shadow">
<div class="ss"> Welcome::

			<?php 
			
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
			</div><button type="submit" class="btn" ><a href="logout.php" >  Logout</a></button>
</div>
						
				<center>
				<table id="t1" align="center">
				<form action="" method="post">
				<tr><td><label for "busname">Bus Name</label></td>
				<td><input type="text"name="bus_name" required/> </td></tr>
				<tr><td><label for "busno">Bus Number</label></td>
				<td><input type="text"name="bus_no" required/> </td></tr>
				<tr><td><label for "route">Route</label></td>
				<td><select name="route">
				<option > </option>
				<option >Bardhaman   </option>
				<option > Kalna</option>
				<option >Kusumgram</option>
				<option >Maldanga   </option>
				<option >Malamba   </option>
				<option >Memari</option>
				<option >Monteswar   </option>
				</select></td></tr>
				<tr><td><label for "arr_time" required>Arr_Time</label></td>
				<td><input type="time"name="arr_time" required/> </td></tr>
				<tr><td><label for "dept_time">Dept_Time</label></td>
				<td><input type="time"name="dept_time" required/> <br /></td></tr>
				<tr><td><input type="submit" name="submit" class="btn" value="Insert"/></td>
				<td><input type="reset" class="btn" value="Reset All Values"s/></td></tr>
				</form>
				</table>
				</center>
<?php
	if(isset($_POST['submit']))
	{
		$bus_name=$_POST['bus_name'];
		$bus_no=$_POST['bus_no'];
		$route=$_POST['route'];
		$arr_time=$_POST['arr_time'];
		$dept_time=$_POST['dept_time'];
		$q="insert into buses (name,bus_no,route,arr_time,dept_time )values('$bus_name','$bus_no','$route','$arr_time','$dept_time')";
	
			if($r=mysqli_query($conn,$q))
		{
			echo"<script> alert('Record Inserted');</script>";
		}
		
	}
	
	
?>

<?php
	
	error_reporting(0);
$query1="select * from buses order by id";
$data1=mysqli_query($conn,$query1);
	
	$total=mysqli_num_rows($data1);
	if ($total!= 0) {
	?>
	<br />
	<br />
<table id="t" align="center" border="2">
		<tr>
			
			<th>Bus_Name</th>
			<th>Bus_Number</th>
			<th>Route</th>
			<th>Arr_Time</th>
			<th>Dept_Time</th>
			
			<th colspan="2">Operations </th>
		</tr>
		<?php
  while($row = mysqli_fetch_assoc($data1)) {
  
  	
	
    echo "<tr> <td> " .$row["name"]."</td>"."<td> " . $row["bus_no"]."</td> "."<td> ". $row["route"]. "</td>" ."<td> " . $row["arr_time"]."</td>" ."<td> " . $row["dept_time"]. "</td>".
	"<TD><a href='update.php?id=$row[id]& name=$row[name]& bus_no=$row[bus_no]& route=$row[route]& arr_time=$row[arr_time]& dept_time=$row[dept_time]' class='a'> Edit</a></td>
	
	
	<TD><a href='delete.php? id=$row[id]& name=$row[name]& bus_no=$row[bus_no]& route=$row[route]& arr_time=$row[arr_time]& dept_time=$row[dept_time]' class='b'> Delete</a></td>
	</tr>";
	
  											}
	} 
	else 
	{
 		 echo "<script>alert('Please insert information'); </script>";
		 	}
$conn->close();
?>
</table>