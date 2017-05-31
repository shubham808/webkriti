<?php
$db=mysqli_connect("localhost","root","","members");
//taking inputs after validation
$f=$_POST['first'];
$l=$_POST['last'];
$e=$_POST['email'];
$u=$_POST['username'];
$p=$_POST['password'];
//for profile picture
$i=$_FILES['image']['name'];//getting name
$i=rand(99,1000).$i;//modifying name
$tmp_name=$_FILES['image']['tmp_name'];
$location='E:/xampp/htdocs/profile/'.$i;//using abosolute address
//moving to desired location
if(move_uploaded_file($_FILES['image']['tmp_name'], $location));
else
$location=1;
//querying to database
$query="INSERT INTO member_info (first,last,email,student_id,password,pic) VALUES ('$f','$l','$e','$u','$p','$location')";
$res=mysqli_query($db,$query);
//verifying 
if($res&&!empty($u)&&!empty($e)&&!empty($l)&&!empty($f)&&!empty($p))
{
	ob_start();
	session_start();
	$query="SELECT student_id FROM member_info WHERE student_id='$u' AND password='$p' ";
	$res=mysqli_query($db,$query);
	if($res)
	{
	if(mysqli_num_rows($res))
		{
			$id=mysqli_fetch_assoc($res);
   			$_SESSION['id']=$id['student_id'];
		}
	header("Location: index.php");
	}
}
else
header("Location: anew.html");


$i=mysqli_insert_id($db);
if($i==0)
	echo "<script> window.location.href='/anew.html'</script>";
 ?>


