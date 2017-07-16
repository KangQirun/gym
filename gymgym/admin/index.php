<?php
error_reporting(E_ALL ^ E_NOTICE);//报错级别设置
session_start();
if($_SESSION[login_name]=="")
{
echo "<script>location.href='login.php';</script>";
exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>后台管理系统</title>
<style>
* { margin:0 auto; padding:0; border:0;}
</style>
</head>
<frameset rows="82,*" frameborder="0" border="0" framespacing="0">
  <frame src="top.php" name="top" scrolling="No" noresize="noresize" id="top" />
  <frame src="center.php" name="center" id="center" />
</frameset>
<noframes>
<body>
</body>
</noframes>
</html>
