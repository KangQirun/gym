<?php
session_start();
require("./inc/mysql_connect.php");

?>
<html>
<head lang="en">
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
  <title>场馆查询</title>
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
                <td colspan="2" class="text_title"><div align="left">请给出查询条件：</div></td>
              </tr>
              <tr>
                <td colspan="2" class="table_title">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="2" class="text"><div align="left">
                  <p>费用要求
                    <select name="set_cost" id="set_cost">
                      <option selected value="">不作要求</option>
			<option value=0,5>0元--5元</option>

                      <option value=5,10>5元--10元</option>
                      <option value=10,15>10元--15元</option>
                      <option value=15,20>15元--20元</option>
                      <option value=30,40>30元-40元</option>
                      <option value=40,10000>40元以上</option>
                    </select>
                    </p>
                    <p>场地类型
                    <select name="set_ground" id="set_ground">
                        <option selected value="">所有</option>
                        <option value=足球>足球</option>
                        <option value=篮球>篮球</option>
                        <option value=排球>排球</option>
                        <option value=羽毛球>羽毛球</option>
                        <option value=乒乓球>乒乓球</option>
                        <option value=网球>网球</option>
                        <option value=游泳池>游泳池</option>
                    </select>
                    </p>
                  </div></td>
              </tr>
              <tr>
                <td width="341" class="text">&nbsp;</td>
                <td width="121" class="text"><div align="center">
                  <input name="search" type="submit" class="button_" id="search" value="查询">
                </div></td>
              </tr>
            </table>
          </form>
          <?php
		  //查询条件
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
              <td colspan="4" class="text"><div align="left">●点击场地名称可以直接预约该场地<br>
              </div></td>
            </tr>

            <tr class="text_title">
              <td width="145"><div align="left">场地名称</div></td>
              <td width="112"><div align="left">场地类型</a></div></td>
              <td width="136"><div align="left">费用（元/小时）</div></td>
              <td width="118"><div align="left">开放时间</div></td>
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
