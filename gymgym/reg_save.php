<?php
session_start();
require("./inc/mysql_connect.php");
//����û����Ƿ���
$sql="select * from user_reg where user_name='$name'";
$rows=getfirst($sql);
if(!empty($rows))
{
echo"<script>alert('��ע����û����Ѵ���');history.back();</script>";
exit;
}
$sql="INSERT INTO user_reg (`user_name` ,`psw` ,`sex` ,`email` ,`tel` ,
`xibu`) values ('$name','$psw','$sex','$email','$tel','$xibu')";
$res=mysql_query($sql);
if($res)
{
	echo"<script>alert('ע��ɹ���');location.href='index.php'</script>";
}
else
echo "ʧ����";
?>
