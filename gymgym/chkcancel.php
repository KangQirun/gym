<?php
require("./inc/mysql_connect.php");
$sql="delete from preengage where preengage_id=$preengage_id";
$res=mysql_query($sql);
if($res)
{
	echo"<script>alert('取消预约成功');location.href='mine.php'</script>";
	exit;
}
else
echo "失败了";
?>