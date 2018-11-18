<?php
$db=mysqli_connect('localhost','1352550','arun1996','1352550');	
session_start();
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
	if(isset($_POST['submit']))
	{
	$u=$_POST['id'];
	$p=$_POST['pass'];
	$sql="select * from friends where username ='$u' and password ='$p' ";
$q=mysqli_query($db, $sql);
 $count=mysqli_num_rows($q);
if($count==1)
{
 echo "success";
 $_SESSION['id'] = $u;
 header('Location: welcome.php');
}
else
{
 echo "Account is invalid";
}	
}
if(isset($_GET['logout']))
{
	session_unregister('id');
}
?>