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
  <link rel="stylesheet" href="<?php echo $siteRootDirectory ?>/common/css/library/slick-theme.css">
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
      <li>
        <img src="<?php echo $siteRootDirectory ?>/common/img/top/img_mainvisual1.png" alt="東京、新宿で日本語を学ぼう">
        <p class="slide-caption">東京、新宿で日本語を学ぼう</p>
      </li>
      <li>
        <img src="<?php echo $siteRootDirectory ?>/common/img/top/img_mainvisual2.png" alt="40ヵ国以上、インターナショナルな日本語学校">
        <p class="slide-caption">40ヵ国以上、インターナショナルな日本語学校</p>
      </li>
      <li>
        <img src="<?php echo $siteRootDirectory ?>/common/img/top/img_mainvisual3.png" alt="質の高い日本語教育">
        <p class="slide-caption">質の高い日本語教育</p>
      </li>
      <li>
        <img src="<?php echo $siteRootDirectory ?>/common/img/top/img_mainvisual3.png" alt="豊富な課外活動">
        <p class="slide-caption">豊富な課外活動</p>
      </li>
    </ul>
    <div class="mainvisual-in">
      <ul class="mainvisual-lan">
        <li class="language language-ja"><a href="#" class="s-fs-14 s-fw-b">日</a></li>
        <li class="language language-en"><a href="#" class="s-fs-14 s-fw-b">EN</a></li>
        <li class="language language-fr"><a href="#" class="s-fs-14 s-fw-b">FR</a></li>
        <li class="language language-che"><a href="#" class="s-fs-14 s-fw-b">简</a></li>
        <li class="language language-cht"><a href="#" class="s-fs-14 s-fw-b">繁</a></li>
        <li class="language language-kr"><a href="#" class="s-fs-14 s-fw-b">KR</a></li>
        <li class="language language-vn"><a href="#" class="s-fs-14 s-fw-b">VN</a></li>
      </ul>
      <div id="google_translate_element"></div>
    </div>
  </div>
  <!-- ./main visual -->

  <!-- =============== content ============== -->
  <div class="content">

  </div>
  <!-- ./content -->
  <?php include('./include/footer.php'); ?>
  <script>
  function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, multilanguagePage: true}, 'google_translate_element');
  }
  </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>
</html>
