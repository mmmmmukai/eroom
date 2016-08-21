<?php 

/****************************************
  Template Name: blog
*****************************************/

get_header();?>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post();  ?>
    <?php the_content(); /** コンテンツ */ ?>
  <?php endwhile; else : ?>
  <div class="post">
    <h2>記事はありません</h2>
    <p>お探しの記事は見つかりませんでした。</p>
  </div>
  <?php endif; ?>


<?php get_footer(); ?>