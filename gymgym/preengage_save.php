<?php
session_start();
require("./inc/mysql_connect.php");
if (empty($_SESSION["user_name"]))
{
	echo"<script>alert('����ԤԼ���ȵ�¼');location.href='index.php'</script>";
	exit;
	}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<style type="text/css">
<!--
@import url("style.css");
-->
</style>
</head>

<body>

<div align="center">
  <table width="960" height="281" border="0" class="table_big">
    <tr>
      <td valign="top"><div align="center">
        <?php		include "inc/head.php";

$nowtime=date("Y-m-d H:i:s");
$StrDate=$StrDate." ".$ptime.":00:00";

////����ʱ���Ŷ
if(strtotime($StrDate)-strtotime($nowtime)<24)
{
	echo"<script>alert('����ǰ24СʱԤԼ');history.back();</script>";
	exit;
}
$pdate=strtotime($StrDate);
$sql = "select * from preengage where ground_id =$ground_id  and beginhour =$ptime and pdate=$pdate";
			//'�жϳ����Ƿ��Ѿ���ԤԼ---------------
$data=getfirst($sql);
if(!empty($data))
{
	echo"<script>alert('�Բ��𣬸ó�������Ҫ���ʱ���Ѿ���ԤԼ������ԤԼ�ó��ص�����ʱ���ԤԼ����ͬ�ೡ��');history.back();</script>";
	exit;

}//'��ԤԼд�����ݿ�--------------
$sql="select * from ground where ground_id =$ground_id";
$data=getfirst($sql);
$cost=$data[cost];
$user_name=$_SESSION["user_name"];
$sql="insert into preengage(user_name,ground_id,cost,pdate,beginhour) values ('$user_name','$ground_id','$cost',$pdate,$ptime)";
$Res=mysql_query($sql);
if($Res)
{
	echo"<script>alert('����ԤԼ�ɹ�,��׼ʱ��ԤԼ���ػ������ʱ����');location.href='index.php'</script>";
	exit;
}
else
echo "ԤԼδ������";
		?>






