<?php
	require 'coreinc.php'; 
	$db=mysqli_connect("localhost","root","","members");
	
	if(isset($_SESSION['id'])&&!empty($_SESSION['id']))
	{
		header("Location: index.php");
	}
else
	{
		header("Location: logi_page.html");
	}
 ?>