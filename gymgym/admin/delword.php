<?php
require("../inc/mysql_connect.php");
if($word_id=="")exit("�Ƿ�����");
$sql="delete from word where word_id =$word_id";
$res=mysql_query($sql);
if($res)
{
	echo"<script>alert('ɾ���ɹ���');location.href='liuyan.php'</script>";
}
else
echo "ʧ����";
?>
