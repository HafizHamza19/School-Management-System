<?php

$con=mysql_connect("localhost","root","");
if(!$con)
{
echo "Not Connected";	
}
$db=mysql_select_db("school",$con);
if(!$db)
{
echo "Not Found";	
	
}

if(isset($_POST['submit']))
{
$name=$_POST['name'];
$fname=$_POST['fname'];
$address=$_POST['address'];
$city=$_POST['city'];
$phone=$_POST['phone'];
$dateofbirth=$_POST['dateofbirth'];
$gender=$_POST['gender'];
$class=$_POST['class'];
$email=$_POST['email'];
$password=md5($_POST['password']);
echo $sql="insert into student(name,fname,address,city,dateofbirth,phone,gender,class,email,password) values('$name','$fname','$address','$city','$phone','$dateofbirth','$gender','$class','$email','$password')";
exit;

$query=mysql_query($sql);

if(isset($query))
{
	
	echo "Insert Data Is seccessfull" ;
	
}
}
?>