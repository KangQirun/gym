<?php
require("../inc/mysql_connect.php");
if($ground_id=="")exit("�Ƿ�����");
$sql="delete from ground where ground_id=$ground_id";
$res=mysql_query($sql);
if($res)
{
	echo"<script>alert('ɾ���ɹ���');location.href='ground.php'</script>";
}
else
echo "ʧ����";
?>