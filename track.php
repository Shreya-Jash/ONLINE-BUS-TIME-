<head>
<link rel="stylesheet" href="css/track.css"/>

<?php include('java script/myscript.php');
include('Admin/connect.php');
?>
</head>


<body onLoad="startTime()">
<div id="txt"></div>
	<div id="main">
		<div id="menu">
			<ul>
				<li><a href="home.php">Home</a></li>
				<li><a href="track.php">Track</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="CONTACT.PHP">Contact</a></li>
				<li><a href="feedback.php">FeedBack</a></li>
			</ul><br><br><brs><br>
		</div>
		<div>	
		<?php
		$q="Select distinct route from buses ";
				$result=mysqli_query($conn,$q);
				
				?>
				<center>
				<form action="" method="post" >
				<label for "route" ><font  color="Blue">Route</font></label>
				<select name="route">
				<?php 
				while($row=mysqli_fetch_array($result))
				{				
				?>
				<option ><?php echo $row['route'];}?>    </option>
				</select>
				
				<input type="submit" name="submit" value="Search"/>
				</form>
				</center>
		</div>
		</div>
		<center><table id="t">
		<?php
			if(isset($_POST['submit']))
			{
				$route=$_POST['route'];
				
				$q="Select * from buses where route='$route'";
				$result=mysqli_query($conn,$q);
				echo '<tr><td>name</td>'.' '.'<td>route</td>'.' '.'<td>arr_time</td>'.' '.'<td>dept_time</td></tr>'.'<br>';
					
			while($row=mysqli_fetch_assoc($result))
				{
					if($row)
					{
					
					echo '<tr><td>'.$row['name'].'</td><td> '.$row['route'].'</td><td> '.$row['arr_time'].'</td><td> '.$row['dept_time'].'</td></tr>';
					}
				
				
				}
			}	
		?>
		</table></center>
</html>