<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<link rel="stylesheet" href="/static/css/reset.css">
<link rel="stylesheet" href="/static/css/cf.css">
<link rel="stylesheet" href="/static/css/common.css">
<link href="http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="/static/css/top.css">

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
  <?php if($this->uri->segment(1) == NULL): ?>
    <title>東京都市ヶ谷の英会話カフェ~ERoom~</title>
  <?php else:?>
    <title><?php echo strtoupper($this->uri->segment(1)) ?>｜東京都市ヶ谷の英会話カフェ~ERoom~</title>
  <?php endif?>
</head>

<body>

<header id="header">
  <div class="header-top">
   <div class="header-top-title"><h1>ERoom</h1></div>
     <p class="header-top-text2">東京都市ヶ谷の英会話カフェ~ERoom~</p>
   </div>

   <ul class="side-ul">
    <!-- <li><a href="/">HOME</a></li>
    <li><a href="/cafe.html">SYSTEM</a></li>
    <li><a href="/cafe-01.html">STAFF</a></li>
    <li><a href="/lesson.html">LESSON</a></li>
    <li><a href="/cafe-02.html">PARTY<br>&<br>EVET</a></li>
    <li><a href="/access.html">ACCESS</a></li>
    <li>LINK</li> -->
    <li><a href="/">HOME</a></li>
    <li><a href="/cafe_system/">SYSTEM</a></li>
    <li><a href="/staff/">STAFF</a></li>
    <li><a href="/lesson/">LESSON</a></li>
    <li><a href="/party_and_event/">PARTY<br>&<br>EVENT</a></li>
    <li><a href="/access/">ACCESS</a></li>
    <li><a href="/blog/">BLOG</a></li>
   </ul>
  </div>

</header>
