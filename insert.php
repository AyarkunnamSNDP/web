<?php
$db=mysqli_connect('localhost','1352550','arun1996','1352550');
if(!$db)
{
    echo "not connected";
}	
session_start();
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  if(isset($_POST['submit']))
	{
	$u=$_POST['id'];
	$p=$_POST['pass'];	
	$sql="INSERT INTO friends(username, password )  VALUES('$u','$p')";
if(!mysqli_query($db, $sql))
{
 echo "unsuccess";
}
else
{
 echo "success";
}	
  }
?>