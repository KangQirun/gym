<?php
require("../inc/mysql_connect.php");
if($id=="")exit("�Ƿ�����");
$sql="delete from user_reg where id=$id";
$res=mysql_query($sql);
if($res)
{
	echo"<script>alert('ɾ���ɹ���');location.href='user.php'</script>";
}
else
echo "ʧ����";
?>