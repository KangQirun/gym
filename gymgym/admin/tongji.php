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
//'取得预约总数-----------------

$sql="select count(*) as total from preengage";
$res=mysql_query($sql);
$rs_preengage=mysql_fetch_array($res);
$preengage_total=$rs_preengage[total];
//取得已付款预约总数-----------------
$sql="select count(*) as total from preengage where paid =1";
$res=mysql_query($sql);
$preengage_paid=mysql_fetch_array($res);
//'取得未付款预约总数-----------------

$preengage_notpaid=$preengage_total-$preengage_paid[total];
//'取得收入-----------------
$sql="select sum(cost) as total from preengage  where paid =1";
$res=mysql_query($sql);
$rs_preengage=mysql_fetch_array($res);
$money =$rs_preengage["total"];
//'取得未付清预约款-----------------
$sql="select sum(cost) as total from preengage  where paid =0";
$res=mysql_query($sql);
$rs_preengage=mysql_fetch_array($res);
$notmoney =$rs_preengage["total"];
?>

<!-- 用户统计表格 -->
          <table width="580" border="0" class="table_small">
            <tr>
              <td colspan="4" align="center"><form id="form1" name="form1" method="post" action="excel.php">
                <input type="submit" name="button" id="button" value="导入到excel" />
              </form></td>
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
          </table><table width="580" border="0" class="table_small">
            <tr>
              <td colspan="4">&nbsp;</td>
            </tr>
            <tr>
              <td colspan="4" class="text_title"><div align="left">预约统计</div></td>
            </tr>
            <tr>
              <td colspan="4" class="table_title">&nbsp;</td>
            </tr>
            <tr class="text">
              <td width="120"><div align="left">预约总数：</div></td>
              <td width="102"><div align="left"><?php echo $preengage_total ?></div></td>
              <td width="120">已付款预约数：</td>
              <td width="97"><div align="left"><?php echo $preengage_paid[total]?></div></td>
            </tr>
            <tr class="text">
              <td><div align="left">实际收入：</div></td>
              <td><div align="left"><?php echo $money ?></div></td>
              <td>未付清预约款：</td>
              <td class="text"><div align="left"><?php echo $notmoney ?></div></td>
            </tr>

          </table>
