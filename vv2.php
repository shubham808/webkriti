<?php 
	require 'coreinc.php';
	$db=mysqli_connect("localhost","root","","usrinfo");
	if(isset($_SESSION['id'])&&!empty($_SESSION['id']))
	{
	$i=$_SESSION['id'];
	$q=1;
	$query="UPDATE users SET ev2='$q' WHERE id='$i'";
	$res=mysqli_query($db,$query);
	if($res){
		header("Location: sexy2.php");
}
}
else{
	header("Location: logi_page.html");
}
 ?>
