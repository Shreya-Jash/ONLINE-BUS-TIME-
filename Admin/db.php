<?php
	try{
	$conn=new PDO("mysql:host=localhost;dbname=Bibhas","root","");
	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
		}
	
?>
