
<?php
require 'connection.php';
$db=mysqli_connect("localhost","root","","task3");
if(isset($_POST['email'])&&isset($_POST['password']))
{

	$e=$_POST['email'];
	$p=$_POST['password'];
	if(!empty($u)&&!empty($p))
	{
		$query="SELECT id FROM task3 WHERE email='$e' AND password='$p'";
		$res=mysqli_query($db,$query);
		if($res)
		{
			if(mysqli_num_rows($res))
			{
		    	$id=mysqli_fetch_assoc($res);
		     	$_SESSION['id']=$id['id'];
		     	header('Location: task3login.php');
			}
			else
			{
				header("Location: index.php");
			}
		}
	}
	else
		header("Location: index.php");
}
else
	header("Location: logi_page.html");

?>