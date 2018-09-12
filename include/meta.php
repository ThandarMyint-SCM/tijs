<?php
// URIを取得
$myUrl = (empty($_SERVER["HTTPS"]) ? "http://" : "https://") .  $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];

// ドキュメントルート以降のサイトルートディレクトリを手動で指定（例：/stg/bties）
$siteRootDirectory = '/tijs';

// サイト共通タイトル
$metaSiteTitle = '東京国際日本語学院';
// サイト共通ディスクリプション
$metaSiteDiscription = '';
// サイト共通キーワード
$metaSiteKeyword = '';

// ドキュメントルートを取得（例：/var/www/html/）
$documentRoot = $_SERVER['DOCUMENT_ROOT'];

?>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $metaTitle ?> - <?php echo $metaSiteTitle ?></title>
  <meta name="description" content="<?php echo $metaDiscription ?><?php echo $metaSiteDiscription ?>">
  <meta name="keywords" content="<?php echo $metaKeyword ?><?php echo $metaSiteKeyword ?>">

  <!-- favicon, touch-icon -->
  <link rel="shortcut icon" href="<?php echo $siteRootDirectory ?>/favicon.ico">
  <link rel="apple-touch-icon" href="<?php echo $siteRootDirectory ?>/common/img/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $siteRootDirectory ?>/common/img/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php echo $siteRootDirectory ?>/common/img/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php echo $siteRootDirectory ?>/common/img/apple-touch-icon-152x152.png">

  <!-- css -->
  <link rel="stylesheet" href="<?php echo $siteRootDirectory ?>/common/css/base/import.css">

  <!-- js -->
  <script src="<?php echo $siteRootDirectory ?>/common/js/library/jquery.js"></script>
  <script src="<?php echo $siteRootDirectory ?>/common/js/library/t-scroll.js"></script>
  <script src="<?php echo $siteRootDirectory ?>/common/js/common.js"></script>

  <!-- for IE9 below -->
  <!--[if lt IE 9]>
  <script src="<?php echo $siteRootDirectory ?>/common/js/library/respond.js"></script>
  <![endif]-->
