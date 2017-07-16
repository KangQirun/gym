<?php
require("../inc/mysql_connect.php");
if($ground_id=="")exit("非法参数");
$sql="delete from ground where ground_id=$ground_id";
$res=mysql_query($sql);
if($res)
{
	echo"<script>alert('删除成功了');location.href='ground.php'</script>";
}
else
echo "失败了";
?>