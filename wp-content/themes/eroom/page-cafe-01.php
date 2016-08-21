<?php 

/****************************************
  Template Name: staff
  page-cafe-01
*****************************************/

get_header();?>



<!-- <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/cf.css">
    <link rel="stylesheet" href="css/common.css">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="css/top.css">

    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=yes">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

      <script>
         $(function(){

            $("#header").load("html/header.html");
            $("#footer").load("html/footer.html"); 
            $("#nav").load("html/nav.html");
           
            $('.menubtn').on('click',function(){
             $('.menubtn').hidden('slow');
             $('.menulist').show('slow'); 
            });

         });
      </script>

    <title>ERoom★cafe</title>
  </head>

  <body>

    <header id="header">   
    </header> -->

    <?php get_template_part('static/inc/nav');?>

    <div id="wrapper">
     <h2>PAST OF STAFF</h2>
         <article class="article-box">
          <h4>Holly</h4>
          <div class="article-box-img"><img src="images/face_Holly.png"></div>
          <p class="article-top-text-date">Week : Fri & Sat</p>
          <p class="article-top-text-message">-</p>
          <img src="" class="article-top-text-flag">
         </article>
         <article class="article-box">
          <h4>Mathew</h4>
          <div class="article-box-img"><img src="images/face_mathew.png"></div>
          <p class="article-top-text-date">Week : Sat</p>
          <p class="article-top-text-message">-</p>
          <img src="" class="article-top-text-flag"> 
         </article>
         <article class="article-box">
          <h4>Chris</h4>
          <div class="article-box-img"><img src="images/face_chris.png"></div>
          <p class="article-top-text-date">Week :-</p>
          <p class="article-top-text-message">-</p>
          <a href="" class="article-link"></a>
          <img src="" class="article-top-text-flag"> 
         </article>
         <article class="article-box">
          <h4>Rie</h4>
          <div class="article-box-img"><img src="images/face_rie.png"></div>
          <p class="article-top-text-date">Week :-</p>
          <p class="article-top-text-message">-</p>
          <a href="" class="article-link"></a>
          <img src="" class="article-top-text-flag"> 
         </article>
         <article class="article-box">
          <h4>Sofia</h4>
          <div class="article-box-img"><img src="images/face_sofia.png"></div>
          <p class="article-top-text-date">Week :-</p>
          <p class="article-top-text-message">-</p>
          <a href="" class="article-link"></a>
          <img src="" class="article-top-text-flag">
         </article>
         <article class="article-box">
          <h4>Sabrina</h4>
          <div class="article-box-img"><img src="images/face_sabrina.png"></div>
          <p class="article-top-text-date">Week :-</p>
          <p class="article-top-text-message">Will come back in Sep!</p>
          <a href="" class="article-link"></a>
          <img src="" class="article-top-text-flag">
         </article>
         <article class="article-box">
          <h4>Jeff</h4>
          <div class="article-box-img"><img src="images/face_jeff.png"></div>
          <p class="article-top-text-date">Week :-</p>
          <p class="article-top-text-message">Went back home.</p>
          <a href="" class="article-link"></a>
          <img src="" class="article-top-text-flag"> 
         </article>

    </div>
    <?php get_footer(); ?>
  </body> 

</html>
