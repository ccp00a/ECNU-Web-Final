<?php
include '../includes/connect.php';
$success=false;
$username = $_POST['username']; //由name标签知晓传输的内容
$password = $_POST['password'];

$result = mysqli_query($con, "SELECT * FROM users WHERE username='$username' AND password='$password' AND role='Administrator' AND not deleted;");


while($row = mysqli_fetch_array($result))
{
	$success = true;
	$user_id = $row['id'];
	$name = $row['name'];
	$role= $row['role'];
}
if($success == true) //向admin的页面进行跳转
{	
	session_start();
	$_SESSION['admin_sid']=session_id(); //全局变量一样的$_SESSION(?)
	$_SESSION['user_id'] = $user_id;
	$_SESSION['role'] = $role;
	$_SESSION['name'] = $name;

	header("location: ../admin-page.php"); //管理者的主界面
}
else   //没有查询到管理者
{
	//查询用户
	$result = mysqli_query($con, "SELECT * FROM users WHERE username='$username' AND password='$password' AND role='Customer' AND not deleted;");
	while($row = mysqli_fetch_array($result)) //查询是否有这个用户
	{
	$success = true;
	$user_id = $row['id'];
	$name = $row['name'];
	$role= $row['role'];
	}
	if($success == true) //若用户存在
	{
		session_start();
		$_SESSION['customer_sid']=session_id();
		$_SESSION['user_id'] = $user_id;
		$_SESSION['role'] = $role;
		$_SESSION['name'] = $name;			
		header("location: ../index.php"); //顾客的主界面
	}
	else
	{   //加一个报错的逻辑（？）
		header("location: ../login.php");
	}
}
?>
