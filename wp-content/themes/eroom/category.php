<?php 

get_header();?>

  <div id="wrapper">
    <h2>BLOG</h2>
    <main id="main70">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post();  ?>
        <article class="article-1">
          <p><?= get_the_date(); ?></p>
          <p>カテゴリ:<?php the_category(', ')?></p>
          <a href="<?=the_permalink();?>"><h3><?php the_title();?></h3></a>
        </article>
      <?php endwhile; else : ?>
      <div class="post">
        <h2>記事はありません</h2>
        <p>お探しの記事は見つかりませんでした。</p>
      </div>
      <?php endif; ?>
      <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
    </main>
  </div>

<?php get_footer(); ?>