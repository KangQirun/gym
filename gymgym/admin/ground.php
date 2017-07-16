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
              <td colspan="5" class="text_title"><div align="left">全部场地：</div></td>
            </tr>
            <tr>
              <td colspan="5" class="table_title">&nbsp;</td>
            </tr>
            <tr class="text_title">
              <td width="50"><div align="left">场地ID</div></td>
              <td width="107"><div align="left">场地名称</div></td>
              <td width="80"><div align="left">场地类型</div></td>
              <td width="165"><div align="left">费用</div></td>
			   <td width="65"><div align="left">场地介绍</div></td>

              <td width="173"><div align="left">操作</div></td>
            </tr>
			<?php


				$sql = "select * from ground order by ground_id DESC";
$res=mysql_query($sql);
				while($rs_ground=mysql_fetch_array($res))
				{
				$delurl="del.php?ground_id=$rs_ground[ground_id]";
				$editurl="admin_edit.php?ground_id=$rs_ground[ground_id]";
			?>
            <tr class="text">
              <td><div align="left"><?php echo $rs_ground["ground_id"]?></div></td>
              <td><div align="left"><?php echo $rs_ground["name"]?></div></td>
              <td><div align="left"><?php echo $rs_ground["type"]?></div></td>
              <td><div align="left"><?php echo $rs_ground["cost"]?></div></td>
			                <td><div align="left"><?php echo $rs_ground["content"]?></div></td>

              <td>
			  	<div align="left">
			  		[<a href="<?php echo $delurl?>">删除</a>]
					[<a href="<?php echo $editurl?>">修改</a>]
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
