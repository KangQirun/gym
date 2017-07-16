<?php
require("../inc/mysql_connect.php");
if($word_id=="")exit("非法参数");
$sql="delete from word where word_id =$word_id";
$res=mysql_query($sql);
if($res)
{
	echo"<script>alert('删除成功了');location.href='liuyan.php'</script>";
}
else
echo "失败了";
?>
