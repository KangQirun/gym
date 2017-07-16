<?php
require("../inc/mysql_connect.php");
if($content=="" || $name=="" || $cost=="")
{
	echo"<script>alert('场地名称或者场地简介不能为空');history.back();</script>";
	exit;
}
$sql="select * from ground where name='$name'";
$r=getfirst($sql);
if(!empty($r))
{
echo"<script>alert('场地名称已存在');history.back();</script>";
exit;
}
$sql="INSERT INTO `ground` (`content` ,`name` ,`type` ,`cost`) values('$content','$name','$type','$cost')";
$res=mysql_query($sql);
if($res)
{
	echo"<script>alert('添加成功了');location.href='ground.php'</script>";
}
else
echo "失败了";
?>