<?php get_header(); ?>

<?php $special_query = new WP_Query('category_name=special'); ?>
<ul class="slick">
<?php while ( $special_query->have_posts() ) : $special_query->the_post(); ?>
  <li>
    <a href="<?php the_permalink(); ?>">
	<div class="thumbnail" style="background-image: url(<?php echo wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' )[0]; ?>);"></div>
  <h2><?php the_title(); ?></h2>
</a>
</li>
<?php endwhile; ?>
</ul>
<?php wp_reset_postdata(); ?>

<h2 class="mascot">新しい記事</h2>
<ul class="container">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <li>
        <a href="<?php the_permalink(); ?>">
          <div class="thumbnail" style="background-image: url(<?php echo wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' )[0]; ?>);"></div>
      <h2><?php the_title(); ?>
        <small><?php the_date(); ?></small>
      </h2>
      </a>
    </li>
  <?php endwhile; else: ?>
    <p>投稿はありません。</p>
  <?php endif; ?>
</ul>
  <?php the_posts_pagination(); ?>
  <?php get_footer(); ?>
