<?php
session_start();
require("./inc/mysql_connect.php");
if (empty($_SESSION["user_name"]))
{
	echo"<script>alert('场地预约请先登录');location.href='index.php'</script>";
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

////计算时间差哦
if(strtotime($StrDate)-strtotime($nowtime)<24)
{
	echo"<script>alert('请提前24小时预约');history.back();</script>";
	exit;
}
$pdate=strtotime($StrDate);
$sql = "select * from preengage where ground_id =$ground_id  and beginhour =$ptime and pdate=$pdate";
			//'判断场地是否已经被预约---------------
$data=getfirst($sql);
if(!empty($data))
{
	echo"<script>alert('对不起，该场地在您要求的时间已经被预约，请您预约该场地的其他时间或预约其他同类场地');history.back();</script>";
	exit;

}//'将预约写入数据库--------------
$sql="select * from ground where ground_id =$ground_id";
$data=getfirst($sql);
$cost=$data[cost];
$user_name=$_SESSION["user_name"];
$sql="insert into preengage(user_name,ground_id,cost,pdate,beginhour) values ('$user_name','$ground_id','$cost',$pdate,$ptime)";
$Res=mysql_query($sql);
if($Res)
{
	echo"<script>alert('场地预约成功,请准时到预约场地活动，并及时交费');location.href='index.php'</script>";
	exit;
}
else
echo "预约未被接受";
		?>






