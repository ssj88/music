<?php

session_start();
header('loation:login.php');

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'music');

$name=$_POST['user'];
$pass=$_POST['password'];

$s="select * from usertable where user='$name'";

$result =mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num == 1)
{

	echo "<script>alert('username already taken');
	window.location='login.php'</script>";
	//header('location:login.php');
}
else{
	$reg="insert into usertable(user,password) values ('$name','$pass')";
	mysqli_query($con,$reg);
	//echo"registration sucessfull";
	echo "<script>alert('registration successfull');
	window.location='login.php'</script>";

}
?>
