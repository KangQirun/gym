<meta charset="gb2312">
<!--[if (gte IE 9)|!(IE)]><!-->
<script src="assets/js/jquery.min.js"></script>
<!--<![endif]-->
<script src="assets/js/amazeui.min.js"></script>
<header class="am-topbar am-topbar-fixed-top">
  <div class="am-container">
    <h1 class="am-topbar-brand">
      <a href="index.php">体育馆预订系统</a>
    </h1>

    <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-secondary am-show-sm-only"
            data-am-collapse="{target: '#collapse-head'}"><span class="am-sr-only">导航切换</span> <span
        class="am-icon-bars"></span></button>
    <div class="am-collapse am-topbar-collapse" id="collapse-head">
      <ul class="am-nav am-nav-pills am-topbar-nav">
        <li class="am-active"><a href="index.php">首页</a></li>
        <li><a href="ground.php">查看场地</a></li>
        <li class="am-dropdown" data-am-dropdown>
          <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
            more<span class="am-icon-caret-down"></span>
          </a>
          <ul class="am-dropdown-content">
            <li class="am-dropdown-header">体育馆预订系统</li>
            <li><a href="search.php">场地查询</a></li>
            <li><a href="mine.php">我的预约</a></li>
            <li><a href="lword.php">网站留言</a></li>
            <li><a href="logout.php">退出网站</a></li>
            <li><a href="admin/">管理员登录</a></li>
          </ul>
        </li>
      </ul>
    <?php
 	if ($_SESSION["user_name"]=="")
	  {
	  ?>
      <div class="am-topbar-right">
        <a href="lodin.php">
        <button class="am-btn am-btn-secondary am-topbar-btn am-btn-sm"><span class="am-icon-pencil"></span> 登陆</button></a>
      </div>

      <div class="am-topbar-right">
      <a href="register.php">
        <button class="am-btn am-btn-primary am-topbar-btn am-btn-sm"><span class="am-icon-user"></span> 注册</button></a>
      </div>
       <?php
	  }
	  ?>
      <td height="21" class="text"><div align="left">
	   <?php
	//'用户登陆后显示欢迎用户--------------------------
	if ($_SESSION["user_name"]!="") {
	$sql="select * from user_reg where user_name ='".$_SESSION["user_name"]."'";
	$rs_user_name=getfirst($sql);
	echo "欢迎您，" . $rs_user_name["user_name"]." &nbsp;！<br><br>";
	}
	?>
     </div></td>
    </div>
  </div>
</header>
