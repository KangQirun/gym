<?php
session_start();
require("../inc/mysql_connect.php");
$sql="select * from admin where admin_name='$user' and admin_psw='$password'";
$res=mysql_query($sql);
$login=mysql_fetch_array($res);
	if(empty($login))
	{
		echo "<script>alert('管理员帐号或者密码错误'),history.back()</script>";
		exit;
	}
	else
		{

				$_SESSION[login_name]=$user;
echo "<script>alert('登录成功');location.href='index.php';</script>";
	}
?>