<?php
session_start();
require("../inc/mysql_connect.php");
$sql="select * from admin where admin_name='$user' and admin_psw='$password'";
$res=mysql_query($sql);
$login=mysql_fetch_array($res);
	if(empty($login))
	{
		echo "<script>alert('����Ա�ʺŻ����������'),history.back()</script>";
		exit;
	}
	else
		{

				$_SESSION[login_name]=$user;
echo "<script>alert('��¼�ɹ�');location.href='index.php';</script>";
	}
?>