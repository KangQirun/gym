<?php
require("../inc/mysql_connect.php");
//�����ļ�
$sql="delete from preengage where preengage_id=$preengage_id";
$result=mysql_query($sql);
echo "<SCRIPT LANGUAGE='JavaScript'>alert('ɾ���ɹ�');location.href='yuyue.php';</SCRIPT>";
?>