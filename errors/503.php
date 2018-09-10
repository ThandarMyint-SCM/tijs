<?php
//ページタイトル（OGP共通）
$metaTitle = '503 Service Unavailable';
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
<?php include('../include/meta.php'); ?>
<?php include('../include/ogp.php'); ?>
</head>
<body>
<?php include('../include/tag.php'); ?>
<?php include('../include/header.php'); ?>


  <!-- =============== content ============== -->
  <div class="content">
    <div class="sec-theme-02 s-mb-60">
      <h1 class="ttl ttl-level-04 ttl-theme-04 ttl-after-01 s-txt-center s-pt-60 s-pb-60">内部エラーが発生しました。</h1>
      <div class="sec sec-min">
        <p class="s-fs-18 s-lh-18">ご指定のページ（URL）はアクセス集中などによるサーバへの負荷のため、一時的にアクセスできない状況にあります。<br>しばらく時間をおいてもアクセスできない場合は、お手数ですが管理者にお問い合わせください。<br><br>エラーコード：503 Service Unavailable</p>
      </div>
    </div>

  </div>
  <!-- ./content -->
  <?php include('../include/footer.php'); ?>
</body>
</html>
