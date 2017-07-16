<?php
session_start();
require("./inc/mysql_connect.php");

?>
<html>
<head lang="en">
  <meta charset="gb2312">
  <title>������Ԥ��ϵͳ</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
</head>
<body>
        <?php		include "head.php" ?>
<div class="get">
  <div class="am-g">
    <div class="am-u-lg-12">
      <h1 class="get-title">������Ԥ��ϵͳ��</h1>

      <p>
        �ڴ���Ĳ��룬һ���˶���
      </p>

      <p>
        <a href="ground.php" class="am-btn am-btn-sm get-btn">���̿�ʼ�鿴����</a>
      </p>
    </div>
  </div>
</div>

<div class="detail">
  <div class="am-g am-container">
    <div class="am-u-lg-12">
      <h2 class="detail-h2">������Ԥ��ϵͳ��������</h2>

      <div class="am-g">
        <div class="am-u-lg-3 am-u-md-6 am-u-sm-12 detail-mb">

          <h3 class="detail-h3">
            <i class="am-icon-mobile am-icon-sm"></i>
            �ƶ�ʱ�����ڿ�ʼ
          </h3>

          <p class="detail-p">
           ֧���ƶ��˶�������ʱ��ض����ݣ���ʱ������˶���
          </p>
        </div>
        <div class="am-u-lg-3 am-u-md-6 am-u-sm-12 detail-mb">
          <h3 class="detail-h3">
            <i class="am-icon-cogs am-icon-sm"></i>
            ֧�ֶ����У������
          </h3>

          <p class="detail-p">
            		֧��XX����������ʮ�������ݣ�Ϊ����ṩ����Աȣ�ʡʱ��Ч����Ҳ���õ��ĳ�����Ա����
          </p>
        </div>
        <div class="am-u-lg-3 am-u-md-6 am-u-sm-12 detail-mb">
          <h3 class="detail-h3">
            <i class="am-icon-check-square-o am-icon-sm"></i>
            �ɶ����ˣ���������
          </h3>

          <p class="detail-p">
            �����˳��ݣ���Ҫ�£������������˶�����������ȥʵ���˶������Ρ�
          </p>
        </div>
        <div class="am-u-lg-3 am-u-md-6 am-u-sm-12 detail-mb">
          <h3 class="detail-h3">
            <i class="am-icon-send-o am-icon-sm"></i>
            ������Ա����
          </h3>

          <p class="detail-p">
           �������ܹ˿;����ϵ�ԭ����������˿͵Ľ���ͨ�����ͻ����룬������֮����
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<footer class="footer">
  <p>κ���ϣ�tel:13671052470,email:945711969@qq.com</p>
</footer>

<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="assets/js/jquery.min.js"></script>
<!--<![endif]-->
<script src="assets/js/amazeui.min.js"></script>
</body>
</html>
