
<html>
<head>
<link rel="stylesheet" href="css/mystyle.css"/>
<?php include('java script/myscript.php');
include('Admin/db.php');

?>
</head>

	<body onLoad="startTime()">
		
	<div id="main">
	<button type="submit" class="btn" ><a href="Admin/adminlog.php" >Admin LOG IN</a></button>
		<div id="txt"></div>
		
			<div id="menu">
			<ul>
				<li><a href="home.php">Home</a></li>
				<li><a href="track.php">Track</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="CONTACT.PHP">Contact</a></li>
				<li><a href="feedback.php">FeedBack</a></li>
			</ul>
		</div>
		<?php
		
		
    $sql = "UPDATE counter SET id = id+1 ";
   $stmt=$conn->prepare($sql);
   $stmt->execute();
    $sql1 = "SELECT id FROM Counter ";
   $stmt=$conn->prepare($sql1);
   $stmt->execute();
	  $arr=$stmt->fetchAll(PDO::FETCH_ASSOC);
	  
            $counter = $arr[0]['id'];
			$count=strlen($counter);
    ?>
		 		
		
		
			<div class="footer">
			<div>
			<ul id="counter" >
		
		<?php
					for($i=0;$i<$count;$i++){
			?>
			
				<li > <?php echo  $counter[$i]; ?></li>
				<?php }
				?>
				</ul>
				<p>Author: Bibhas Biswas<br>
  			&copy;All Right Reversed 2020</p>
			</div>
		
  			
			</div>
	
</div>
		
</html>