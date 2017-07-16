<?php
require("../inc/mysql_connect.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>欢迎管理员</title>
<style type="text/css">
<!--
@import url("style.css"];
-->
</style>
</head>
<body>
<div align="center">
  <table width="760" height="281" border="0" class="table_big">
    <tr>
      <td valign="top"><div align="center">
		  <br>
          <table width="756" border="0" class="table_small">
            <tr>
              <td colspan="4">&nbsp;</td>
            </tr>
            <tr>
              <td colspan="4" class="text_title"><div align="left">欢迎管理员登陆，请查看用户留言：</div></td>
            </tr>
            <tr>
              <td colspan="4" class="table_title">&nbsp;</td>
            </tr>
            <tr class="text_title">
              <td width="65"><div align="left">用户ID</div></td>
              <td width="83"><p align="left">留言ID</p>              </td>
              <td width="143"><div align="left">留言时间</div></td>
              <td width="373"><p align="left">标题</p>              </td>
            </tr>
			<?php
				$sql="select * from word order by word_id DESC";
				$res=mysql_query($sql);
				while($rs_word=mysql_fetch_array($res))
				{

				//'构造阅读留言链接--------------
				$readurl="admin_rword.php?word_id=".$rs_word["word_id"]
			?>
            <tr class="text">
              <td><div align="left"><?php echo $rs_word["user_name"]?></div></td>
              <td><div align="left"><?php echo $rs_word["word_id"]?></div></td>
              <td><div align="left"><?php echo $rs_word["datetime"]?></div></td>
              <td>
			  	<div align="left">
			  		<a href="<?php echo $readurl?>" ><?php echo $rs_word["title"]?></a>
			  	</div>
			  </td>
            </tr>
			<?php
				}
					?>
            <tr>
              <td colspan="4">&nbsp;</td>
            </tr>
            <tr>
              <td colspan="4">&nbsp;</td>
            </tr>
          </table>
          <br>
		  <br>
      </div></td>
    </tr>
  </table>
</div>
</body>
</html>