![Bties](https://bties.co.jp/img/logo.png)

# Bties template v1

静的フロントエンド制作用テンプレート 取扱説明書

---

## **目次**

1. 概要
2. フォルダ構成
3. 使用プラグイン・フレームワーク
4. コーディングについて
  1. HTML
  2. CSS
5. その他・特記事項

---

## **概要**
静的コーポレートサイト用Webテンプレート。

レスポンシブ対応、スライダー、スクロール時の挙動など簡易動作を実装しています。

---

**推奨ブラウザ**

- Chrome (last two)
- Edge (last two)
- Firefox (last two)
- Internet Explorer 9+
- iOS Safari (last two)
- Android Chrome (last two)
- Opera (last two)
- Safari 6+

---

**レスポンシブ設計について**

- **ブレイクポイント**
PC・タブレット(768px↑)／SP(767↓)で設計。
タブレットは、viewportを固定値に設定。
※タブレット専用の個別対応は不要

- **PC・タブレット／SPの自動画像出しわけ**
特定の画像ファイル名末尾に以下を付記することでhtmlを変更することなく自動で出力を変更できます。

  - PC用：「`_pc`」
例：btn_type01_pc.png
  - SP用：「`_sp`」
例：btn_type01_sp.png

---

## **フォルダ構成**
下記の通りの構成としています。

プロジェクトにより必要・不要部分は適宜調整してください。

```

root/
├ index.php ー トップページ
├ 404.php ー 404ページ
├ favicon.ico ー ファビコン
│
├ error/ ー エラー時の独自html格納フォルダ
│  ├  .htaccess
│  ├  401.php
│  ├  403.php
│  ├  404.php
│  ├  500.php
│  └  503.php
│
├ *カテゴリ名*/ ー カテゴリ別フォルダ
│  └ *ページ名*.html ー カテゴリ内ページ
│
├ include/ ー インクルードファイル格納フォルダ
│  ├  meta.php ー メタタグ・外部ファイル読み込み
│  ├  header.php ー サイト内共有ヘッダ（ナビゲーション含む）
│  ├  footer.php ー サイト内共有フッタ
│  ├  tag.php ー アナリティクス系タグ
│  └  ogp.php ー SNS系メタタグ
│
└ common/ ー デザイン・挙動に関わるファイル格納フォルダ
   ├ css/ ー CSSファイル格納フォルダ
   │  ├ base/ ー サイトのベース設計に関わるCSS格納フォルダ
   │  │  ├ base.css ー タグ要素に対するデフォルト設定
   │  │  ├ general.css ー 汎用クラス集（フォントサイズ・マージン等）
   │  │  └ import.css ー サイト内で使用するCSSをまとめて読み込む用
   │  │
   │  ├ custom/ ー プロジェクトにより適用する個別CSS格納フォルダ
   │  │  ├ page_top.css ー トップページ用個別CSS
   │  │  └ page_*カテゴリ・ページ名*.css ー 各ページ用個別CSS
   │  │
   │  ├ layout/ ー レイアウト用CSS格納フォルダ
   │  │  ├ header-v01.css ー ヘッダレイアウトその１
   │  │  └ footer-v01.css ー フッタレイアウトその１
   │  │
   │  ├ modules/ ー モジュール用CSS格納フォルダ（ボタンやテーブルなど）
   │  │  └ module-v01.css ー モジュール集その１
   │  │
   │  └ library/ ー JS及などライブラリCSS格納フォルダ
   │     ├ normalize.css ー ノーマライズCSS
   │     ├ bootstrap-grid.css ー BootstrapのグリッドシステムのみCSS
   │     ├ slick.css ー slick用CSS
   │     ├ slick-theme.css ー slickのデフォルトテーマ（使用しなくてもよい）
   │     └ t-scroll.css ー t-scroll用のCSS
   │
   ├ img/ ー 画像格納フォルダ
   │  ├ 各サイト共通画像
   │  ├ top/
   │  │  └ 各画像
   │  └ *カテゴリ・ページ名*/
   │  　 └ 各画像
   │
   └ js/ ー JavaScript
      ├ jquery.js
      ├ respond.js
      ├ slick.js
      ├ t-scroll.js
      ├ page_top.js
      └ common.js

```

---

## **使用プラグイン・フレームワーク**

---

### **JS**

---

**jQuery**

jQuery。最新版（v3.2.1）をダウンロードして設置

- https://jquery.com/

---

**Respond**

IE6～8でCSS3 Media Queries（max-widthとmin-width）を解釈可能にするプラグイン

- https://github.com/scottjehl/Respond/

---

**Slick**

レスポンシブスライダー導入プラグイン

設定・オプション・スライド方法などは下記参照

- http://kenwheeler.github.io/slick/

---

**T-scroll**

ページをスクロールした際に、動きを追加するプラグイン

設定・オプション・スクロール時の挙動サンプルなどは下記参照

- https://t-scroll.com/
- https://t-scroll.com/t-animate-options.html

---

### **CSS**

---

**Bootstrap (grid)**

Bootstrapから、グリッドシステムのみ抜き出したもの

- https://getbootstrap.com/docs/3.3/customize/

---

**FontAwesome**

WEBフォントアイコン集、最新版（v4）をダウンロードして設置

- http://fontawesome.io/
- http://fontawesome.io/icons/

---

## コーディングについて

---

###HTML
HTML5を使用、PHPで共通項目などのインクルードを設定します。

>PHPで制作するためローカル環境でそのままでは表示ができません。
>ローカル環境での閲覧方法は「その他・特記事項 ＞ ローカル環境でのPHP閲覧方法」をご確認ください。

---

**パスについて**

HTML内のパスは全て、サイトルート呼び出し変数＋サイトルートパスで記述します。

>※サイトルートはサーバ環境によって変化することがあるため include/meta.php の ` $siteRootDirectory ` にて設定します。詳細は「その他・特記事項　＞ ルートパスの設定について」の項を参照

　 `<?php echo $siteRootDirectory ?> ` を記載することで、
ルートパスで呼び出している外部ファイル・画像やリンクなど、必要な箇所で出力できます。

```html
記述例：

外部ファイルなど：
<script src="<?php echo $siteRootDirectory ?>/common/js/jquery.js"></script>

画像など：
<img src="<?php echo $siteRootDirectory ?>/common/img/top/icon_service_print.png" alt="">

リンク：
<a href="<?php echo $siteRootDirectory ?>/contact/index.php">

```
---

**ページのmeta情報について**

ページのメタタグ記載情報は、html上部に指定のphp変数で記載してください。

【設定する項目】

  1. ページタイトル（OGP共通）
  `$metaTitle = '';`

  2. ページディスクリプション（OGP共通）
  `$metaDiscription = '';`

  3. ページキーワード（OGP共通）
  `$metaKeyword = '';`
  ※ひとつ以上入力した場合、必ず末尾に「,」を入力すること
  4. OGP画像設定 （デフォルト以外に設定する場合のみ）
  `$imgOgp = '';`
  ※使用ファイル名を `XX_ogp.png ` とし、XX_の部分のみ記述すること
例）top_ogp.png というファイルを設定する場合、下記には「top_」と記述

---

###CSS
CSS3を使用する。

---

**CSS記述のルール概要**

下記は基本ルールです。
カスタムCSSでの例外は適宜対応してください。
※テンプレートの記述は完全にルールに則ること

1. **レイアウトとデザインの分離**
レイアウト（形・大きさ・位置）の指定と
デザイン（動き・見た目）の指定を別のクラスに分ける
※画像は適宜サイズ指定

2. **タグ自体にはスタイルをあてない**
階層構造が変わってもいいようにクラスを必ずつける

3. **important は使用しない**
よほどの事情がない限りimportantは使用しない

4. **クラス名は想定がつくものにする**
省略しすぎず、長すぎない形にする

5. **ID指定は基本的に使用しない**
ページ内リンクなど必要な場合は除く

---
**パスについて**

CSS内のパス各ファイルパスは読み込むファイルからみた相対パスで記述します。


```css

記述例：

@import url(../library/normalize.css);
background-image:url(../../img/top/bg_service_1.jpg);

```

---
**クラス名のルール**

XXには任意の文字列or数字がはいります。

【JavaScript連携用クラス】

`jsXxXxx　→ 例）jsTopMenu`

※プラグインで既に設定されているものは対象外

【通常クラス】

「-」で単語をつなげて記載。つなぐ数は３つくらいまで

`.s-XX-XXX → 例）.s-fs-20`

---

**CSSプロパティの記載順**

**【レイアウトの場合】**

  1. display
  2. position
  3. position数値(top,bottom,left,right)
  3. width, height
  4. z-index

**【テーマ（デザイン）の場合】**

  1. style プロパティを50音順に記載
  2. 1のVendorPrefixがある場合は記載
  3. width, height

---

**CSSクラスの記載順**

html要素にCSSクラスを付記する際の指定順

```html
例：

<div class="header header-theme table table-theme1 s-fs-20 jsMenu">
〜
</div>
```

  1. レイアウトクラス(配置や形の定義クラス)
  2. テーマクラス（1のデザイン定義クラス）
  3. モジュールクラス(table btn などパーツの構成クラス)
  4. モジュールテーマクラス（3のデザイン定義クラス）
  5. 汎用クラス（文字サイズやマージンなど）
  6. js連携クラス

---

**CSSで使用する単位等の規程**

- **フォントサイズ**
`font-size` は、ルート（html）を10px（ =1rem ）とし、全ての指定を `rem` で指定すること
※その他、レスポンシブサイトでフォームを使用する場合はbodyは1.6rem以上にしてください。
（1.6rem以下だとiPhoneにて不要なフォーカスが発生するため）
- **フォントの太さ**
`font-weight` の値は、細字400、太字800の2パターンのみとする
※　`normal, bold` は一部スマートフォンにて効かないため使用しない。
※OS/ブラウザによる太さ表現への対応

- **margin / padding / border**
基本的には `rem` で指定。
用途によっては`rem`を使用

- **width / height他、レイアウト等**
rem, px, %など用途に応じて適宜指定する。


>【単位について補足】
>pxは端末によって解釈が異なる可能性がある（古いものであればあるほど）、またユニバーサルデザインのサイトを設計する際に一律で文字サイズ指定ができるよう基本的にはpxではなくremを使用しましょう。

---

**CSSクラスの解説（抜粋）**

| 分類     | クラス   | 説明 |
| --------|---------|-------|
| レイアウト  | header-   | ヘッダで使用    |
| レイアウト | footer- | フッタで使用    |
| レイアウト | nav- | ナビで使用    |
| 汎用クラス | s-sp | スマホにのみ表示したいときに指定    |
| 汎用クラス | s-pc | PC/タブレットにのみ表示したいときに指定    |
| 汎用クラス | s-txt-XX | txt-align, vertical-align の指定(XXには`center`や`baseline`などを記載)    |
| 汎用クラス | s-fs-数字 | 2桁の数字でフォントサイズを指定    |

---

## **その他・特記事項**

---

**ルートパスの設定について**

ローカル作業時とサーバでディレクトリ構成が違う場合、ルートパスが異なってしまうためmeta.phpにて設定してください。


meta.php ５行目の `$siteRootDirectory` に下記を記載

※サーバのディレクトリ階層により変更必須


【例1 ドキュメントルートとサイトルートが同じ場合】

```
ドキュメントルート（サイトルート）：
/home/kuwing/www

↓

$siteRootDirectory = '';
```


【例2 ドキュメントルートとサイトルートが異なる場合】

```
ドキュメントルート：
/home/kuwing/www

サイトルート：
/home/kuwing/www/stg/tijs

↓

$siteRootDirectory = '/tijs';
※最後の「/」は入れない
```

---

**サイト共通メタ情報の設定について**

サイト内のメタ情報（タイトル・キーワード・ディスクリプション）は、「meta.php（8〜13行目）」にてサイト内共通のものを設定します。

※ページ個別のタイトル・キーワード・ディスクリプションは、前述の通り各ページの上部にてそれぞれ記載してください。

```php
記入例：

//サイト共通タイトル
$metaSiteTitle = '';
//サイト共通ディスクリプション
$metaSiteDiscription = '';
//サイト共通キーワード
$metaSiteKeyword = '';
```

---

**エラードキュメントのhtaccess設定について**
ルート相対パスを環境によって書き換えて使用してください。

```
【下記の場合の設定例】
ドキュメントルート：
/home/kuwing/www

サイトルート：
/home/kuwing/www/stg/tijs

エラー用のphpファイル設置ディレクトリ：
/home/kuwing/www/stg/tijs/error/


#Error settings
ErrorDocument 401 /tijs/error/401.php
ErrorDocument 404 /tijs/error/404.php
ErrorDocument 403 /tijs/error/403.php
ErrorDocument 500 /tijs/error/500.php
ErrorDocument 503 /tijs/error/503.php
```

---

**ローカル環境でのPHP閲覧方法**

インクルード等でPHPを多用しますので、ルートにしたいフォルダでコンソール画面（黒い画面・CUI）を開き、下記コマンドを入力してエンターを押してください。

```
php -S localhost:8080
```

コマンド入力後、以下が出るまでお待ち下さい。

```
Listening on http://localhost:8080
Document root is /Users/kurou51/Desktop/data/bties/dtunet
Press Ctrl-C to quit.
```

ここまで表示されたら、ブラウザに下記URLでアクセスすると確認することができます。

http://localhost:8080/

※「8080」の部分を任意の数字に変えることで同時に複数ページ起動することもできます。

---

以上
