<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("school",$con);
if(isset($_POST['login']))
{
	$email=$_POST['email'];
    $password=$_POST['password'];
	if($email=="")
	{
	echo "<script>alert('Enter Your Emial')</script>";	
		
	}
		if($password=="")
	{
	echo "<script>alert('Enter Your Password')</script>";	

		
	echo "<script>window.open('Index.php','_self')</script>";
	
	
	}
	
	else{
	$query="SELECT * FROM `student` where email='$email' and password='$password' ";
	$run=(mysql_query($query)) or die (mysql_error());
	if(mysql_num_rows($run)>0)
	{
	echo"<script>window.open('Proflie.php','_self')</script>";	
		
		
	}
	else{
		echo "<script>alert('You Entered Wrong Emial And Password First Register Your Self In This Web')</script>";
	echo "<script>window.open('Index.php','_self')</script>";	
	
	}
	
	}
	
	
}

?>