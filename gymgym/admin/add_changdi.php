<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>添加新场地</title>
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
          <form name="form1" method="post" action="add_save.php">
            <table width="430" border="0" class="table_small">
              <tr>
                <td colspan="3">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="3" class="text_title"><div align="left">添加新场地</div></td>
              </tr>
              <tr>
                <td colspan="3" class="table_title">&nbsp;</td>
              </tr>
              <tr class="text">
                <td width="159"><div align="left">场地名称：                </div></td>
                <td colspan="2"><div align="left">
                  <input name="name" type="text" class="textfield" id="name">
                </div></td>
              </tr>
              <tr class="text">
                <td><div align="left">场地类型：</div></td>
                <td colspan="2"><div align="left">
                  <select name="type" class="textfield" id="type">
                    <option selected>足球</option>
                    <option>篮球</option>
                    <option>排球</option>
                    <option>羽毛球</option>
                    <option>乒乓球</option>
                    <option>网球</option>
                    <option>游泳池</option>
                  </select>
</div></td>
              </tr>
              <tr class="text">
                <td><div align="left">花费（每小时/元）:</div></td>
                <td colspan="2"><div align="left">
                  <input name="cost" type="text" class="textfield" id="cost">
                </div></td>
              </tr>
              <tr>
              <td><div align="left">场地介绍:</div></td>
                <td colspan="2"><label for="content"></label>
                <textarea name="content" id="content" cols="45" rows="5"></textarea></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td width="72"><input name="addnew" type="submit" class="button_" id="addnew" value="添加"></td>
                <td width="221"><div align="left">
                  <input name="reset" type="button" class="button_" id="reset" value="清空">
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
