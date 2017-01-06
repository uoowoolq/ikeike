<?php get_header(); ?>
<ul class="container">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <li>
        <a href="<?php the_permalink(); ?>">
          <div class="thumbnail" style="background-image: url(<?php echo wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' )[0]; ?>);"></div>
      <!-- 投稿のタイトルとパーマリンクを表示 -->
      <h2><?php the_title(); ?></h2>
      <!-- 日時を表示 -->
      <small><?php the_time('F jS, Y'); ?></small>
      <!-- 投稿の本文をdiv内に表示 -->
      <?php the_content(); ?>
      </a>
    </li>
  <?php endwhile; else: ?>
    <p>投稿はありません。</p>
  <?php endif; ?>
</ul>
  <?php the_posts_pagination(); ?>
  <?php get_footer(); ?>
