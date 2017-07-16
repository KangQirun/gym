<?php
require("../inc/mysql_connect.php");
$sql="update `ground` set`content`='$content' ,`name`= '$name',`type`= '$type',`cost`='$cost' where ground_id=$ground_id";
$res=mysql_query($sql);
if($res)
{
	echo"<script>alert('修改成功了');location.href='ground.php'</script>";
}
else
echo "失败了";
?>