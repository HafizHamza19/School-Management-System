<html>
<head>

<title>Congratulation</title>

</head >

<body background="roots-bt-karachi-concentrate.jpg">
<p><center><h1>Congratulation!</h1></center></p>
<p><center>*You Have Registered In This Web*</center></p>
<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("school",$con);

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
$sql="insert into student(name,fname,address,city,phone,dateofbirth,gender,class,email,password) values('$name','$fname','$address','$city','$phone','$dateofbirth','$gender','$class','$email','$password')";

$query=mysql_query($sql);
if(isset($query))
{
	
	echo "<center>Insert Data Is seccessfully</center>" ;
	
}
}
?>
</body>
</html>
