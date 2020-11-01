<link rel="stylesheet" href="../css/delete.css"/>


<?php include('../java script/myscript.php');

include('connect.php');	
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

			
			
			
			?></div>
		<button type="submit" class="btn" ><a href="logout.php" >  Logout</a></button>
</div>
<center>
				<table id="t1">
				<form action="" method="post">
				
				<tr><td><label for "busname">Bus Name</label></td>
				<td><input type="text"name="bus_name"value="<?php echo $_GET['name'];?>"/> </td></tr>
				<tr><td><label for "busno">Bus Number</label></td>
				<td><input type="text"name="bus_no" value=" <?php echo $_GET['bus_no'];?>"/> </td></tr>
				<tr><td><label for "route">Route</label></td>
				<td><select name="route"  value="<?php echo $_GET['route'];?>">
				<option >Bardhaman   </option>
				<option > Kalna</option>
				<option >Kusumgram</option>
				<option >Maldanga   </option>
				<option >Malamba   </option>
				<option >Memari</option>
				<option >Monteswar   </option>
				</select></td></tr>
				<tr><td><label for "arr_time" required>Arr_Time</label></td>
				<td><input type="time"name="arr_time" value="<?php echo $_GET['arr_time'];?>"/> </td></tr>
				<tr><td><label for "dept_time">Dept_Time</label></td>
				<td><input type="time"name="dept_time" value="<?php echo $_GET['dept_time'];?>"/> </td></tr>
				<tr><td><input type="submit" name="submit" value="DELETE" class="btn" id="d"/></td>
				<td><button type="submit" class="btn" ><a href="INSERT.php" >  INSERT NEW RECORD</a></button>
				</td></tr>
				</form>
				</table>
				</center>
<?php
	if(isset($_POST['submit']))
	{
		$id=$_GET['id'];
			
		$q="delete from buses  where id='$id' ";
		$r=mysqli_query($conn,$q);
	
		if($r)
		{
		

		header('Location:insert.php');	
		}
		
	}
	?>
	<script type="text/javascript">
    $(".remove").click(function(){
        var id = $(this).parents("tr").attr("id");


        if(confirm('Are you sure to remove this record ?'))
        {
            $.ajax({
               url: '/delete.php',
               type: 'GET',
               data: {id: id},
               error: function() {
                  alert('Something is wrong');
               },
               success: function(data) {
                    $("#"+id).remove();
                    alert("Record removed successfully");  
               }
            });
        }
    });


</script>