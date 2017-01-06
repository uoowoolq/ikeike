<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <!-- 投稿のタイトルとパーマリンクを表示 -->
  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  <!-- 日時を表示 -->
  <small><?php the_time('F jS, Y'); ?></small>
  <!-- 投稿の本文をdiv内に表示 -->
  <?php the_content(); ?>
<?php endwhile; else: ?>
  <p>投稿はありません。</p>
<?php endif; ?>
<?php get_footer(); ?>
