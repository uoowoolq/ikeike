<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
  <header>
    <a href="<?php echo home_url(); ?>"><h1><img class="logo" src="<?php echo get_template_directory_uri() . "/logo.svg" ?>" alt="<?php echo bloginfo('name') . bloginfo('description'); ?>"></h1></a>
    <?php wp_nav_menu(['menu' => 'top', 'container' => 'nav']); ?>
  </header>
