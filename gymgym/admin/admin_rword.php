<?php
require("../inc/mysql_connect.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>�Ķ�����</title>
<style type="text/css">
<!--
@import url("style.css");
-->
</style>
</head>
<?php
$sql = "select * from word where word_id =$word_id";
$res=mysql_query($sql);
$rs_word=mysql_fetch_array($res);
//'ɾ�����Ե����ӣ�һ���Ҫ�õ�---------------
$delurl="delword.php?word_id=$word_id";
?>


<body>

<div align="center">
  <table width="706" height="281" border="0" class="table_big">
    <tr>
      <td valign="top"><div align="center">
	  <br>
          <table width="593" border="0" class="table_small">
            <tr>
              <td colspan="3">&nbsp;</td>
            </tr>
            <tr>
              <td colspan="3" class="text_title"><div align="left">�Ķ����ԣ�</div></td>
            </tr>
            <tr>
              <td colspan="3" class="table_title">&nbsp;</td>
            </tr>
            <tr class="text">
              <td width="45"><div align="left">���⣺</div></td>
              <td width="376" colspan="2"><div align="left"><?php echo $rs_word["title"]?></div></td>
            </tr>
            <tr class="text">
              <td valign="top"><div align="left">���ݣ�</div></td>
              <td colspan="2"><div align="left">
                  <textarea name="textfield" class="textfield2"><?php echo $rs_word["word"]?></textarea>
              </div></td>
            </tr>
            <tr>
              <td colspan="3">&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td class="text"><div align="center">[<a href="<?php echo $delurl ?>" target="_self">ɾ��������</a>]</div></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td colspan="3">&nbsp;</td>
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
