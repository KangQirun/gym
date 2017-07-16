<?php
require("../inc/mysql_connect.php");
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


<table width="580" border="0" class="table_small">
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