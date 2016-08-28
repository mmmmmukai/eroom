<?php 

get_header();?>

  <div id="wrapper">
    <h2>BLOG</h2>
    <main id="main70">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post();  ?>
        <article class="article-1">
          <p><?= get_the_date(); ?></p>
          <p style="background-color: gray;">カテゴリ:<?php the_category(', ')?></p>
          <a href="<?=the_permalink();?>"><h3><?php the_title();?></h3></a>
        </article>
      <?php endwhile; else : ?>
      <div class="post">
        <h2>記事はありません</h2>
        <p>お探しの記事は見つかりませんでした。</p>
      </div>
      <?php endif; ?> 
    </main>
    <side id="side30">
        <?php dynamic_sidebar( 'category_sidebar' ); ?>
    </side> 
      <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
  </div>

<?php get_footer(); ?>
