<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>��̨����ϵͳ</title>
</head>
<style>
* { margin:0 auto; padding:0; border:0;}
body { background:#0462A5; font:12px "����"; color:#004C7E;}
input { border:1px solid #004C7E;}
.main { background:url(images/bg.jpg) repeat-x; height:600px;}
.login { background:#DDF1FE; width:468px; height:262px; border:1px solid #000;}
.top { background:url(images/login_bg.jpg) repeat-x; width:464px; height:113px; border:1px solid #2376B1; margin-top:1px;}
.logo {  width:214px; height:42px; float:left; margin:29px 0 0 54px;font-size:20px;color:#fff}
.lable { background:url(images/lable.gif) no-repeat; width:157px; height:32px; float:right; margin:81px 31px 0 0;}
.submit { background:url(images/submit.gif) no-repeat; width:71px; height:24px; border:0;}
.reset { background:url(images/reset.gif) no-repeat; width:71px; height:24px; border:0;}
</style>
<body>
<table width="100%" class="main" cellpadding="0" cellspacing="0">
  <tr>
    <td>
      <div class="login">
        <div class="top">
          <div class="logo">��̨����</div>
          <div class="lable"></div>
        </div>
        <form action="checkadmin.php" method="post">
        <table width="468" cellpadding="0" cellspacing="0">
          <tr>
            <td width="282" style="padding-top:17px;">
              <table width="100%" cellpadding="0" cellspacing="0">

                <tr>
                  <td align="right" height="27">����Ա�ʺ�</td>
                  <td align="right" width="161">
                    <input type="text" id="user" name="user"/>
                  </td>
                </tr>
                <tr>
                  <td align="right" height="27">����:</td>
                  <td align="right" width="161">
                    <input type="password" id="password" class="textfield" name="password"/>
                  </td>
                </tr>
              </table>
            </td>
            <td style="padding-top:30px;">
              <table width="100%" cellpadding="0" cellspacing="0">
                <tr>
                  <td align="center" height="29">&nbsp;</td>
                </tr>
                <tr>
                  <td align="center" height="29">
                  <input name="submit" type="submit" value="��¼��̨"  />

                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
      </form>
      </div>
      <!--login -->
    </td>
  </tr>
</table>
</body>
</html>
