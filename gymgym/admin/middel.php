<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题</title>
<style type="text/css">
<!--
body { margin:0 auto; padding:0;}
-->
</style>
<style>
.navPoint {
color:white; cursor:hand; font:12px "宋体";}
</style>
<script>
function switchSysBar(){
var locate=location.href.replace('middel.html','');
var ssrc=document.all("img1").src.replace(locate,'');
if (ssrc=="images/list_button.gif")
{
document.all("img1").src="images/list_button_r.gif";
document.all("frmTitle").style.display="none"
}
else
{
document.all("img1").src="images/list_button.gif";
document.all("frmTitle").style.display=""
}
}
</script>
</head>
<body style="overflow:hidden">
<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0" style="table-layout:fixed;">
  <tr>
    <td width="162" id=frmTitle noWrap name="fmTitle" align="center" valign="top">
      <iframe name="I1" height="100%" width="162" src="left.php" border="0" frameborder="0" scrolling="no"> 浏览器不支持嵌入式框架，或被配置为不显示嵌入式框架。</iframe>
    </td>
    <td width="4" style="width:4px;"valign="middle" bgcolor="004C7E" onclick=switchSysBar()><span class=navPoint
id=switchPoint title="打开/关闭左栏"><img src="images/list_button.gif" name="img1" width=4 height=40 id=img1></span></td>
    <td width="5"></td>
    <td align="center" valign="top">
      <iframe name="I2" height="100%" width="100%" frameborder="0" src="right.php"> 浏览器不支持嵌入式框架，或被配置为不显示嵌入式框架。</iframe>
    </td>
  </tr>
</table>
</body>
</html>
