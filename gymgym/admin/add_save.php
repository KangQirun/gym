<?php
require("../inc/mysql_connect.php");
if($content=="" || $name=="" || $cost=="")
{
	echo"<script>alert('�������ƻ��߳��ؼ�鲻��Ϊ��');history.back();</script>";
	exit;
}
$sql="select * from ground where name='$name'";
$r=getfirst($sql);
if(!empty($r))
{
echo"<script>alert('���������Ѵ���');history.back();</script>";
exit;
}
$sql="INSERT INTO `ground` (`content` ,`name` ,`type` ,`cost`) values('$content','$name','$type','$cost')";
$res=mysql_query($sql);
if($res)
{
	echo"<script>alert('��ӳɹ���');location.href='ground.php'</script>";
}
else
echo "ʧ����";
?>