<?php
require("../inc/mysql_connect.php");
//��ȡ�޸ĵ����ݵ�
$sql = "select * from ground where ground_id=$ground_id";
$res=mysql_query($sql);
				$data=mysql_fetch_array($res);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>�޸��³���</title>
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
          <form name="form1" method="post" action="edit_save.php?ground_id=<?php echo $ground_id;?>">
            <table width="430" border="0" class="table_small">
              <tr>
                <td colspan="3">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="3" class="text_title"><div align="left">����³���</div></td>
              </tr>
              <tr>
                <td colspan="3" class="table_title">&nbsp;</td>
              </tr>
              <tr class="text">
                <td width="159"><div align="left">�������ƣ�                </div></td>
                <td colspan="2"><div align="left">
                  <input name="name" type="text" class="textfield" id="name" value="<?php echo $data[name]?>">
                </div></td>
              </tr>
              <tr class="text">
                <td><div align="left">�������ͣ�</div></td>
                <td colspan="2"><div align="left">
                  <select name="type" class="textfield" id="type">
                    <option selected>����</option>
                    <option>����</option>
                    <option>����</option>
                    <option>��ë��</option>
                    <option>ƹ����</option>
                    <option>����</option>
                    <option>��Ӿ��</option>
                  </select>
</div></td>
              </tr>
              <tr class="text">
                <td><div align="left">���ѣ�ÿСʱ/Ԫ��:</div></td>
                <td colspan="2"><div align="left">
                  <input name="cost" type="text" class="textfield" id="cost" value="<?php echo $data[cost]?>">
                </div></td>
              </tr>
              <tr>
              <td><div align="left">���ؽ���:</div></td>
                <td colspan="2"><label for="content"></label>
                <textarea name="content" id="content" cols="45" rows="5"><?php echo $data[content]?></textarea></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td width="72"><input name="addnew" type="submit" class="button_" id="addnew" value="�޸ĳ���"></td>
                <td width="221"><div align="left">

                </div></td>
              </tr>
              <tr>
                <td colspan="3">&nbsp;</td>
              </tr>
            </table>
          </form>
          <br>
		  <br>
      </div></td>
    </tr>
  </table>
</div>
</body>
</html>
