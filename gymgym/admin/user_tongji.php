<?php
require("../inc/mysql_connect.php");
//用户性别统计
$sql="select count(*) as male from user_reg where sex = '男'";
$res=mysql_query($sql);
$rs_user=mysql_fetch_array($res);
$rs_user_male=$rs_user["male"];
$sql="select count(*) as female from user_reg where sex = '女'";
$res=mysql_query($sql);
$rs_user=mysql_fetch_array($res);
$rs_user_female=$rs_user["female"];
$rs_user_total = $rs_user_male +$rs_user_female;
?>

<!-- 用户统计表格 -->
          <table width="580" border="0" class="table_small">
            <tr>
              <td colspan="4">&nbsp;</td>
            </tr>
            <tr>
              <td colspan="4" class="text_title"><div align="left">用户统计</div></td>
            </tr>
            <tr>
              <td colspan="4" class="table_title">&nbsp;</td>
            </tr>
            <tr class="text">
              <td><div align="left">用户总数：</div></td>
              <td colspan="3"><div align="left"><?php echo $rs_user_total ?></div></td>
            </tr>
            <tr class="text">
              <td width="120"><div align="left">男性比例：</div></td>
              <td width="108"><div align="left"><?php echo  ($rs_user_male/$rs_user_total)*100 . "%" ?></div></td>
              <td width="120"><div align="left">女性比例：</div></td>
              <td width="101"><div align="left"><?php echo  ($rs_user_female/$rs_user_total)*100 . "%" ?></div></td>
            </tr>
            <tr class="text">
              <td colspan="4">&nbsp;</td>
            </tr>
          </table>