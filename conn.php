
<?php
require 'coreinc.php';
$db=mysqli_connect("localhost","root","","members");
if(isset($_POST['username'])&&isset($_POST['password']))
{

	$u=$_POST['username'];
	$p=$_POST['password'];
	if(!empty($u)&&!empty($p))
	{
		$query="SELECT student_id FROM member_info WHERE student_id='$u' AND password='$p'";
		$res=mysqli_query($db,$query);
		if($res)
		{
			if(mysqli_num_rows($res))
			{
		    	$id=mysqli_fetch_assoc($res);
		     	$_SESSION['id']=$id['student_id'];
		     	header('Location: se.php');
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