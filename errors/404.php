<?php
//ページタイトル（OGP共通）
$metaTitle = '404 Not Found';
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
    <div class="sec-theme-02">
      <h1 class="ttl ttl-level-04 ttl-theme-04 ttl-after-01 s-txt-center s-pt-60 s-pb-60">お探しのページは見つかりません。</h1>
      <div class="sec sec-min">
        <p class="s-fs-18 s-lh-18">ご指定のページ（URL）は一時的にアクセスできない状況にあるか、移動・削除された可能性があります。<br>トップページまたはサイトマップより再度アクセスしてください。<br><br>エラーコード：404 Not Found</p>
      </div>
    </div>

    <div class="sec-theme-02">
      <div class="sec sec-min s-txt-center">
        <a href="<?php echo $siteRootDirectory ?>/" class="btn btn-level-01 btn-theme-03 btn-400 s-fs-20 s-mt-40 s-mb-40"><i class="fa fa-arrow-circle-right"></i> トップページへ戻る</a>
      </div>
    </div>

  </div>
  <!-- ./content -->
  <?php include('../include/footer.php'); ?>
</body>
</html>
