<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
  <?php wp_head(); ?>
</head>
<body>
  <!-- Faceboook script -->
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.8";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
  <!-- Line script -->
  <script src="https://d.line-scdn.net/r/web/social-plugin/js/thirdparty/loader.min.js" async="async" defer="defer"></script>
  <!-- Twitter script -->
  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
  <header>
    <a href="<?php echo home_url(); ?>"><h1><img class="logo" src="<?php echo get_template_directory_uri() . "/logo.svg" ?>" alt="<?php echo bloginfo('name') . bloginfo('description'); ?>"></h1></a>
    <ul class="sns">
      <li><a href=""><img src="<?php echo get_template_directory_uri() . "/fb-logo.svg" ?>" alt="facebook"></a></li>
      <li><a href=""><img src="<?php echo get_template_directory_uri() . "/Twitter_Logo_Blue.svg" ?>" alt="twitter"></a></li>
      <li><a href=""><img src="<?php echo get_template_directory_uri() . "/instagram-logo.svg" ?>" alt="instagram"></a></li>
    </ul>
    <?php wp_nav_menu(['menu' => 'top', 'container' => 'nav']); ?>
  </header>
  <main>
