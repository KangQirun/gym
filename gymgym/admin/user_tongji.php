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
?>

<!-- �û�ͳ�Ʊ�� -->
          <table width="580" border="0" class="table_small">
            <tr>
              <td colspan="4">&nbsp;</td>
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
          </table>