<?php
session_start();
require("./inc/mysql_connect.php");
if (empty($_SESSION["user_name"]))
{
	echo"<script>alert('�������ȵ�¼');location.href='index.php'</script>";
	exit;
	}
$user_name=$_SESSION["user_name"];
$datetime=date("Y-m-d h:i:s");
	$sql="insert into word (user_name,datetime,title,word) values ('$user_name','$datetime','$title','$word')";

$res=mysql_query($sql);
	if($res)
	{
	echo "<script>alert('���Գɹ�');location.href='lword.php';</script>";
	exit;
	}
	else
	{
	exit("����ʧ����");
	}

?>