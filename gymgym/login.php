<?php
session_start();
require("./inc/mysql_connect.php");
$sql="select * from user_reg where user_name='$user_name1' and psw='$psw'";

$rows=getfirst($sql);
if(empty($rows))
{
echo"<script>alert('�û��������������');history.back();</script>";
exit;
}
else
{
	$_SESSION["user_name"]=$user_name1;

echo"<script>alert('��¼�ɹ�');location.href='index.php'</script>";
	exit;
}
?>