<?php
session_start();
require("./inc/mysql_connect.php");

?>
<html>
<head lang="en">
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
  <title>���ݲ�ѯ</title>
  <meta name="viewport"
        content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp"/>
  <link rel="alternate icon" type="image/png" href="assets/i/favicon.png">
  <link rel="stylesheet" href="assets/css/amazeui.min.css"/>
  <style>
    .get {
      background: #1E5B94;
      color: #fff;
      text-align: center;
      padding: 100px 0;
    }

    .get-title {
      font-size: 200%;
      border: 2px solid #fff;
      padding: 20px;
      display: inline-block;
    }

    .get-btn {
      background: #fff;
    }

    .detail {
      background: #fff;
    }

    .detail-h2 {
      text-align: center;
      font-size: 150%;
      margin: 40px 0;
    }

    .detail-h3 {
      color: #1f8dd6;
    }

    .detail-p {
      color: #7f8c8d;
    }

    .detail-mb {
      margin-bottom: 30px;
    }

    .hope {
      background: #0bb59b;
      padding: 50px 0;
    }

    .hope-img {
      text-align: center;
    }

    .hope-hr {
      border-color: #149C88;
    }

    .hope-title {
      font-size: 140%;
    }

    .about {
      background: #fff;
      padding: 40px 0;
      color: #7f8c8d;
    }

    .about-color {
      color: #34495e;
    }

    .about-title {
      font-size: 180%;
      padding: 30px 0 50px 0;
      text-align: center;
    }

    .footer p {
      color: #7f8c8d;
      margin: 0;
      padding: 15px 0;
      text-align: center;
      background: #2d3e50;
    }
  </style>
  <style type="text/css">
<!--
@import url("style.css");
-->
</style>
</head>

<body>
        <?php		include "head.php" ?>
<div align="center">
  <table width="706" height="281" border="0" class="table_big">
    <tr>
      <td valign="top"><div align="center">

	  <br>
          <form name="form1" method="post" action="">
            <table width="533" border="0" class="table_small">
              <tr>
                <td colspan="2">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="2" class="text_title"><div align="left">�������ѯ������</div></td>
              </tr>
              <tr>
                <td colspan="2" class="table_title">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="2" class="text"><div align="left">
                  <p>����Ҫ��
                    <select name="set_cost" id="set_cost">
                      <option selected value="">����Ҫ��</option>
			<option value=0,5>0Ԫ--5Ԫ</option>

                      <option value=5,10>5Ԫ--10Ԫ</option>
                      <option value=10,15>10Ԫ--15Ԫ</option>
                      <option value=15,20>15Ԫ--20Ԫ</option>
                      <option value=30,40>30Ԫ-40Ԫ</option>
                      <option value=40,10000>40Ԫ����</option>
                    </select>
                    </p>
                    <p>��������
                    <select name="set_ground" id="set_ground">
                        <option selected value="">����</option>
                        <option value=����>����</option>
                        <option value=����>����</option>
                        <option value=����>����</option>
                        <option value=��ë��>��ë��</option>
                        <option value=ƹ����>ƹ����</option>
                        <option value=����>����</option>
                        <option value=��Ӿ��>��Ӿ��</option>
                    </select>
                    </p>
                  </div></td>
              </tr>
              <tr>
                <td width="341" class="text">&nbsp;</td>
                <td width="121" class="text"><div align="center">
                  <input name="search" type="submit" class="button_" id="search" value="��ѯ">
                </div></td>
              </tr>
            </table>
          </form>
          <?php
		  //��ѯ����
		  $where="";
if ($set_cost!=="")
{
	$a=explode(",",$set_cost);
$where.=" and cost>=$a[0] and cost<=$a[1]";
}
if($set_ground!="")
$where.=" and type='$set_ground'";

			$sql = "select * from ground where 1=1 $where";

$res=mysql_query($sql);

		  ?>
		  <table width="533" border="0" class="table_small">

			<tr>
              <td colspan="4" class="text"><div align="left">�����������ƿ���ֱ��ԤԼ�ó���<br>
              </div></td>
            </tr>

            <tr class="text_title">
              <td width="145"><div align="left">��������</div></td>
              <td width="112"><div align="left">��������</a></div></td>
              <td width="136"><div align="left">���ã�Ԫ/Сʱ��</div></td>
              <td width="118"><div align="left">����ʱ��</div></td>
            </tr>

<?php
while($rs_search=@mysql_fetch_array($res))
{
	$urltext="preengage.php?ground_id=".$rs_search["ground_id"];
?>
            <tr class="text">

              <td><div align="left"><a href="<?php echo $urltext?>"><?php echo $rs_search["name"]?></a></div></td>
              <td><div align="left"><?php echo $rs_search["type"]?></div></td>
              <td><div align="left"><?php echo $rs_search["cost"]?></div></td>
              <td><div align="left">8:00-20:00</div></td>
            </tr>


<?php
			}
				?>
            <tr>
              <td colspan="4">&nbsp;</td>
            </tr>
          </table>
      </div></td>
    </tr>
  </table>
</div>
</body>
</html>
