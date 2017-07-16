<?php
require("../inc/mysql_connect.php");
if($id=="")exit("非法参数");
$sql="delete from user_reg where id=$id";
$res=mysql_query($sql);
if($res)
{
	echo"<script>alert('删除成功了');location.href='user.php'</script>";
}
else
echo "失败了";
?>