<?php
require("../inc/mysql_connect.php");
//�û��Ա�ͳ��
$sql="select count(*) as male from user_reg where sex = '��'";
$res=mysql_query($sql);
$rs_user=mysql_fetch_array($res);
$rs_user_male=$rs_user["male"];
$sql="select count(*) as female from user_reg where sex = 'Ů'";
$res=mysql_query($sql);
$rs_user=mysql_fetch_array($res);
$rs_user_female=$rs_user["female"];
$rs_user_total = $rs_user_male +$rs_user_female;
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

<!-- �û�ͳ�Ʊ�� -->
          <table width="580" border="0" class="table_small">
            <tr>
              <td colspan="4" align="center"><form id="form1" name="form1" method="post" action="excel.php">
                <input type="submit" name="button" id="button" value="���뵽excel" />
              </form></td>
            </tr>
            <tr>
              <td colspan="4" class="text_title"><div align="left">�û�ͳ��</div></td>
            </tr>
            <tr>
              <td colspan="4" class="table_title">&nbsp;</td>
            </tr>
            <tr class="text">
              <td><div align="left">�û�������</div></td>
              <td colspan="3"><div align="left"><?php echo $rs_user_total ?></div></td>
            </tr>
            <tr class="text">
              <td width="120"><div align="left">���Ա�����</div></td>
              <td width="108"><div align="left"><?php echo  ($rs_user_male/$rs_user_total)*100 . "%" ?></div></td>
              <td width="120"><div align="left">Ů�Ա�����</div></td>
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
