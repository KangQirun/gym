<?php
require("../inc/mysql_connect.php");
//'ȡ��ԤԼ����-----------------

$sql="select count(*) as total from preengage";
$res=mysql_query($sql);
$rs_preengage=mysql_fetch_array($res);
$preengage_total=$rs_preengage[total];
//ȡ���Ѹ���ԤԼ����-----------------
$sql="select count(*) as total from preengage where paid =1";
$res=mysql_query($sql);
$preengage_paid=mysql_fetch_array($res);
//'ȡ��δ����ԤԼ����-----------------

$preengage_notpaid=$preengage_total-$preengage_paid[total];
//'ȡ������-----------------
$sql="select sum(cost) as total from preengage  where paid =1";
$res=mysql_query($sql);
$rs_preengage=mysql_fetch_array($res);
$money =$rs_preengage["total"];
//'ȡ��δ����ԤԼ��-----------------
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
              <td colspan="4" class="text_title"><div align="left">ԤԼͳ��</div></td>
            </tr>
            <tr>
              <td colspan="4" class="table_title">&nbsp;</td>
            </tr>
            <tr class="text">
              <td width="120"><div align="left">ԤԼ������</div></td>
              <td width="102"><div align="left"><?php echo $preengage_total ?></div></td>
              <td width="120">�Ѹ���ԤԼ����</td>
              <td width="97"><div align="left"><?php echo $preengage_paid[total]?></div></td>
            </tr>
            <tr class="text">
              <td><div align="left">ʵ�����룺</div></td>
              <td><div align="left"><?php echo $money ?></div></td>
              <td>δ����ԤԼ�</td>
              <td class="text"><div align="left"><?php echo $notmoney ?></div></td>
            </tr>

          </table>