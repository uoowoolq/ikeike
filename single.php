<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <?php $custom_fields = get_post_custom(); ?>
  <article>

    <h2 class="mascot"><a href="<?php the_permalink(); ?>"><?php echo $custom_fields['店名'][0] ?></a></h2>
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <small>投稿日: <?php the_date(); ?></small>

    <!-- Share buttons -->
    <ul class="share">
      <li><div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div></li>
      <li><div class="line-it-button" data-lang="ja" data-type="share-a" data-url="http://aaa" style="display: none;"></div></li>
      <li><a href="https://twitter.com/share" class="twitter-share-button">Tweet</a></li>
    </ul>

    <small><?php the_tags('',''); ?></small>
    <figure><?php the_post_thumbnail(); ?>
      <figcaption><?php echo $custom_fields['キャッチフレーズ'][0] ?></figcaption>
    </figure>
    <?php the_content(); ?>

    <dl>
      <dt>営業</dt><dd><?php echo $custom_fields['営業'][0] ?></dd>
      <dt>場所</dt><dd><?php echo $custom_fields['場所'][0] ?></dd>
      <dt>客単価</dt><dd><?php echo $custom_fields['客単価'][0] ?></dd>
      <dt>宴会最大人数</dt><dd><?php echo $custom_fields['宴会最大人数'][0] ?></dd>
      <dt>求人</dt><dd><?php echo $custom_fields['求人'][0] ?></dd>
      <dt>禁煙・喫煙</dt><dd><?php echo $custom_fields['禁煙・喫煙'][0] ?></dd>
    </dl>

    <a class="ticket googlemap" href="https://maps.google.co.jp/maps/search/<?php echo $custom_fields['住所'][0] ?>"><img src="<?php echo get_template_directory_uri() . '/googlemap-logo.svg' ?>"><span>GoogleMapで地図を開く</span></a>
    <a class="ticket coupon" href=""><img src="<?php echo get_template_directory_uri() . '/doller.svg' ?>"><span>クーポンあります！！</span></a>

  </article>
<?php endwhile; else: ?>
  <p>投稿はありません。</p>
<?php endif; ?>
<?php get_footer(); ?>
