<?php
session_start();
require("./inc/mysql_connect.php");
$sql="select * from user_reg where user_name='$user_name1' and psw='$psw'";

$rows=getfirst($sql);
if(empty($rows))
{
echo"<script>alert('用户名或者密码错误');history.back();</script>";
exit;
}
else
{
	$_SESSION["user_name"]=$user_name1;

echo"<script>alert('登录成功');location.href='index.php'</script>";
	exit;
}
?>