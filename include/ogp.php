<?php
$ogpUrl = (empty($_SERVER["HTTPS"]) ? "http://" : "https://") .  $_SERVER["HTTP_HOST"];
?>

  <!-- OGP -->
  <meta property="og:title" content="<?php echo $metaTitle . ' - ' . $metaSiteTitle; ?>">
  <meta property="og:image" content="<?php echo $ogpUrl ?>/common/img/<?php echo $imgOgp; ?>ogp.jpg">
  <meta property="og:url" content="<?php echo $myUrl ?>">
  <meta property="og:site_name" content="<?php echo $metaSiteTitle; ?>"/>
  <meta property="og:description" content="<?php echo $metaDiscription .  $metaSiteDiscription; ?>">
  <meta name="twitter:title" content="<?php echo $metaTitle . $metaSiteTitle; ?>">
  <meta name="twitter:image" content="<?php echo $ogpUrl ?>/common/img/<?php echo $imgOgp; ?>ogp.png">
  <meta name="twitter:url" content="<?php echo $myUrl ?>">
  <meta name="twitter:card" content="summary_large_image">
