<?php get_header(); ?>

<h2 class="mascot"><?php single_cat_title(); ?></h2>
<ul class="container">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <li>
        <a href="<?php the_permalink(); ?>">
          <div class="thumbnail" style="background-image: url(<?php echo wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' )[0]; ?>);"></div>
      <h2><?php the_title(); ?>
        <small><?php the_time('F jS, Y'); ?></small>
      </h2>
      </a>
    </li>
  <?php endwhile; else: ?>
    <p>投稿はありません。</p>
  <?php endif; ?>
</ul>
  <?php the_posts_pagination(); ?>
  <?php get_footer(); ?>
