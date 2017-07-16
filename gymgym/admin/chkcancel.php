<?php
require("../inc/mysql_connect.php");
//包含文件
$sql="delete from preengage where preengage_id=$preengage_id";
$result=mysql_query($sql);
echo "<SCRIPT LANGUAGE='JavaScript'>alert('删除成功');location.href='yuyue.php';</SCRIPT>";
?>