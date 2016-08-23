<?php 

get_header();?>

  <div id="wrapper">
    <h2>BLOG</h2>
    <main id="main70">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post();  ?>
        <article class="article-1">
          <h3><?php the_title();?></h3>
          <p>カテゴリ:<span style="color:gray;"><?php the_category(', ')?></span></p>
          <section class="article-text width100">
            <?php the_content(); /** コンテンツ */ ?>
          </section>
        </article>
      <?php endwhile; else : ?>
      <div class="post">
        <h2>記事はありません</h2>
        <p>お探しの記事は見つかりませんでした。</p>
      </div>
      <?php endif; ?>
    </main>
  </div>

<?php get_footer(); ?>