<?php
require("./inc/mysql_connect.php");
$sql="delete from preengage where preengage_id=$preengage_id";
$res=mysql_query($sql);
if($res)
{
	echo"<script>alert('ȡ��ԤԼ�ɹ�');location.href='mine.php'</script>";
	exit;
}
else
echo "ʧ����";
?>