<?php
session_start();
require("./inc/mysql_connect.php");
//检测用户名是否穿在
$sql="select * from user_reg where user_name='$name'";
$rows=getfirst($sql);
if(!empty($rows))
{
echo"<script>alert('你注册的用户名已存在');history.back();</script>";
exit;
}
$sql="INSERT INTO user_reg (`user_name` ,`psw` ,`sex` ,`email` ,`tel` ,
`xibu`) values ('$name','$psw','$sex','$email','$tel','$xibu')";
$res=mysql_query($sql);
if($res)
{
	echo"<script>alert('注册成功了');location.href='index.php'</script>";
}
else
echo "失败了";
?>
