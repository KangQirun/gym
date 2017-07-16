<?php
require("../inc/mysql_connect.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>场地维护</title>
<style type="text/css">
<!--
@import url("style.css");
-->
</style>
</head>



<body>

<div align="center">
  <table width="706" height="281" border="0" class="table_big">
    <tr>
      <td valign="top"><div align="center">
		  <br>
          <table width="601" border="0" class="table_small">
            <tr>
              <td colspan="5">&nbsp;</td>
            </tr>
            <tr>
              <td colspan="5" class="text_title"><div align="left">全部用户：</div></td>
            </tr>
            <tr>
              <td colspan="5" class="table_title">&nbsp;</td>
            </tr>
            <tr class="text_title">
              <td width="50"><div align="left">用户名</div></td>
              <td width="107"><div align="left">登录密码</div></td>
              <td width="80"><div align="left">性别</div></td>
              <td width="165"><div align="left">系部/学院</div></td>
			   <td width="65"><div align="left">联系电话</div></td>

              <td width="173"><div align="left">操作</div></td>
            </tr>
			<?php

				$sql = "select * from user_reg order by id DESC";
$res=mysql_query($sql);
				while($rs_user=mysql_fetch_array($res))
				{
				$delurl="user_del.php?id=$rs_user[id]";
				//$editurl="admin_edit.php?id=$rs_user[id]";
			?>
            <tr class="text">
              <td><div align="left"><?php echo $rs_user["user_name"]?></div></td>
              <td><div align="left"><?php echo $rs_user["psw"]?></div></td>
              <td><div align="left"><?php echo $rs_user["sex"]?></div></td>
              <td><div align="left"><?php echo $rs_user["xibu"]?></div></td>
			                <td><div align="left"><?php echo $rs_user["tel"]?></div></td>

              <td>
			  	<div align="left">
			  		[<a href="<?php echo $delurl?>">删除</a>]
				</div>
			</td>
            </tr>
			<?php
			}
			?>
            <tr>
              <td colspan="5">&nbsp;</td>
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
