<?php

//ページタイトル（OGP共通）
$metaTitle = 'トップページ';
//ページディスクリプション（OGP共通）
$metaDiscription = '';
//ページキーワード（OGP共通）
$metaKeyword = '';

/* OGP画像設定 （デフォルト以外に設定する場合のみ）
※使用ファイル名を XX_ogp.png とし、XX_の部分のみ記述すること
例）top_ogp.png というファイルを設定する場合、下記には「top_」と記述
*/
$imgOgp = '';

?><!DOCTYPE html>
<html lang="ja">
<head>
<?php include('./include/meta.php'); ?>
<?php include('./include/ogp.php'); ?>
  <!-- slidar -->
  <link rel="stylesheet" href="<?php echo $siteRootDirectory ?>/common/css/library/slick.css">
  <script src="<?php echo $siteRootDirectory ?>/common/js/library/slick.js"></script>

  <!-- for page -->
  <link rel="stylesheet" href="<?php echo $siteRootDirectory ?>/common/css/custom/page_top.css">
  <script src="<?php echo $siteRootDirectory ?>/common/js/page_top.js"></script>
</head>
<body>
<?php include('./include/tag.php'); ?>
<?php include('./include/header.php'); ?>

  <!-- ===============  main visual ============== -->
  <div class="mainvisual">
    <ul class="jsSliderTop">
      <li><img src="<?php echo $siteRootDirectory ?>/common/img/top/img_mainvisual1.png" alt=""></li>
      <li><img src="<?php echo $siteRootDirectory ?>/common/img/top/img_mainvisual2.png" alt=""></li>
      <li><img src="<?php echo $siteRootDirectory ?>/common/img/top/img_mainvisual3.png" alt=""></li>
    </ul>
  </div>
  <!-- ./main visual -->

  <!-- =============== content ============== -->
  <div class="content">

  </div>
  <!-- ./content -->
  <?php include('./include/footer.php'); ?>
</body>
</html>
