<head>
<link rel="stylesheet" href="css/feedback.css"/>
<style>
#respond {
  margin-top: 40px;
}

#respond input[type='text'],
#respond textarea {
  margin-bottom: 10px;
  display: block;
  width: 100%;
  border: 1px solid rgba(0, 0, 0, 0.1);
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -o-border-radius: 5px;
  -ms-border-radius: 5px;
  -khtml-border-radius: 5px;
  border-radius: 5px;

  line-height: 1.4em;
}

</style>

<?php include('java script/myscript.php');?>
<link rel="stylesheet" href="css/footer.css"/>

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
		<div id="respond">

  <h3 ><font color="#FF6666">Leave a Comment(Maximum 100 characters )</font></h3>

  <form action="" method="post" id="commentform">

    <label for="comment_author" class="required"><font color="#FF6666">Your name</font></label>
    <input type="text" name="name" id="comment_author" value="" tabindex="1" required="required" class="bt"><br />

    <label for="comment" class="required"><font color="#FF6666">Your message</font></label>
    <textarea name="comment" id="comment" rows="10" tabindex="4"  required="required" class="bt"></textarea>

    
    <input type="hidden" name="comment_post_ID" value="1" id="comment_post_ID" />
    <input name="submit" type="submit" value="Submit comment" class="bt" />

  </form>

</div>



<?php

include('Admin/connect.php');
    if (isset($_POST['submit']))
	 {

        $uname = $_POST['name'];
        $message = $_POST['comment'];
		$comm_length=strlen($message);
		//echo $comm_length;
		if ($comm_length>100)
		{
			echo"<script> alert('comment shoud be within 100 characters');</script>";
			//header('location:feedback.php');
		}
		else
		{
		
        $result = mysqli_query($conn,"INSERT INTO comment(name, comments) VALUES ('$uname','$message')");
		header('location:feedback.php');
		}
    }


    $sql = "SELECT * FROM comment";
    $result = mysqli_query($conn,$sql);
       while ($row = mysqli_fetch_assoc($result)) 
	{
        
		
            
             $cm= $row['name']."::".$row['comments'];
			//$c=$row['comment'];
			//$cm=$n $c;
            echo " <textarea name='comment' id='comment' rows='12' tabindex='6'   class='txt'>$cm</textarea>";
			            
        }
?>
</html>