<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="<?=get_template_directory_uri()?>/static/css/reset.css">
    <link rel="stylesheet" href="<?=get_template_directory_uri()?>/static/css/cf.css">
    <link rel="stylesheet" href="<?=get_template_directory_uri()?>/static/css/common.css">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=get_template_directory_uri()?>/static/css/top.css">

    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=yes">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!--
      <script>
         $(function(){
            $("#header").load("/static/inc/header.html");
            $("#footer").load("/static/inc/footer.html");
            $("#nav").load("/static/inc/nav.html");

          });
      </script>
-->
      <script>
        document.createElement('video');
      </script>

      <style>
        video { display: block; }
      </style>
    <title>英会話カフェERoomへようこそ!!|都内市ヶ谷の英会話カフェ|EROOM</title>
  </head>

  <body>

  <?php get_header();?> 

    <div class="video-contents">
        <div id="pc_mode">
          <video  autoplay loop  poster="<?=get_template_directory_uri()?>/static/video/tompoederbachlasvegasblvdcopyforvimeobyphilipbloommp4.jpg" width="100%">
            <source src="<?=get_template_directory_uri()?>/static/video/tompoederbachlasvegasblvdcopyforvimeobyphilipbloommp4.mp4">
            <source src="<?=get_template_directory_uri()?>/static/video/tompoederbachlasvegasblvdcopyforvimeobyphilipbloommp4.ogv">
            <source src="<?=get_template_directory_uri()?>/static/video/tompoederbachlasvegasblvdcopyforvimeobyphilipbloom.webm">
            <p>動画を再生するには、videoタグをサポートしたブラウザが必要です。</p>
          </video>
       </div>
          <div class="overlay">
            <div class="catch">
              初心者でも安心<br>英会話カフェ<br>ERoom
            </div>
          </div>
        <div class="main-top-img"id="sp_mode">
          <img src="<?=get_template_directory_uri()?>/static/video/tompoederbachlasvegasblvdcopyforvimeobyphilipbloommp4.jpg">
        </div>
    </div>
    <?php get_template_part('static/inc/nav');?> 

    <div id="wrapper">
    <main id="main-article">
    <article class="article-1">
      <h2>Q. 英会話カフェERoomって？</h2>
      <div class="text-side-img"><img src="<?=get_template_directory_uri()?>/static/images/photo_04.png"><img src="<?=get_template_directory_uri()?>/static/images/photo_02.png"></div>
      <section class="article-text">
        <p><span>A.お茶を飲みながらネイティブスタッフと英語でお喋りが楽しめる場所</span>です。<br></p>
        <p><i class="fa fa-check-circle" aria-hidden="true"></i>ご予約などは必要ありません。</p>
        <p><i class="fa fa-star" aria-hidden="true"></i>初心者の方大歓迎</p>
        <p>そして、英会話スクールとは違い本を開いてお勉強では無く<br>ネイティブと生の英語をたわいもないお喋りから身につけて頂こうという場所です。</p>
        <p>スタッフ一同皆様のお越しをお待ちしております。</p>
        <p>上手く喋れないから行きづらい・・・とよく耳にします。</p>
        <p>英語が上手くないから練習♪ネイティブ英語に慣れる♪<br>そんなお気楽なお気持ちで是非いらして下さい。</p>
      </section>
    </article>
    </main>
    </div>
    <article class="article-1">
    <h2>Q. 現在は閉店中！？</h2> 
     <section class="article-text">
        <p><span>A.そうです。英会話カフェEROOMは2年間も休養中</span>です。<br></p>
        <p>2016/09/01からはITスクールとレンタルスペースになっています。</p>
        <p>近々EROOMは英会話カフェとして再開する予定でいます。</p>
        <p>英会話カフェEROOMが再開した際にはfacebookにて告知をします。</p>
      </section> 
    </article>
    <div class="gray">
      <div class="wrapper-gray">
       <div class="wrapper-gray-img">
         <img src="<?=get_template_directory_uri()?>/static/images/photo_01.png">
         <p>ロゴの蝶です</p>
       </div>
       <div class="wrapper-gray-img">
         <img src="<?=get_template_directory_uri()?>/static/images/photo_02.png">
         <p>ソファ席あります</p>
       </div>
       <div class="wrapper-gray-img">
         <img src="<?=get_template_directory_uri()?>/static/images/photo_03.png">
         <p>落ち着いた雰囲気です</p>
       </div>
       <div class="wrapper-gray-img">
         <img src="<?=get_template_directory_uri()?>/static/images/photo_04.png">
         <p>初心者でも気軽に</p>
         </div>
      </div>
    </div>

    <div id="wrapper">
    <article class="article-2">
      <h2>NEWS</h2>
      <section class="article-text-2">
        <p class="topic" style="background-color:#37a34a;">営業時間変更</p>
        <p class="date">2016/7/7</p>
        <p class="infomation">ERoomサービスリニューアルの準備により６月から土曜日のみの営業になります。時間は14時〜20時です。</p>
      </section>
      <section class="article-text-2">
         <p class="topic" style="background-color:#0075c2;">お休み</p>
         <p class="date">2016/7/7</p>
         <p class="infomation">2014年5月2日〜5月11日お休み致します。</p>
      </section>
      <section class="article-text-2">
         <p class="topic" style="background-color:#0075c2;">お休み</p>
         <p class="date">2016/7/7</p>
         <p class="infomation">2014年5月2日〜5月11日お休み致します。</p>
      </section>
      <section class="article-text-2">
         <p class="topic" style="background-color:#ff6347;">告知</p>
         <p class="date">2016/8/19</p>
         <p class="infomation">現在は閉店中ですが、2017年を目安にまたリニューアルしてはじめます。</p>
      </section>
    </article>
   </div>

  <?php get_footer(); ?>
  </body>
</html>
