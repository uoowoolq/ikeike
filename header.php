<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php wp_head(); ?>
</head>
<body>
  <header>
    <a href="<?php echo home_url(); ?>"><h1><?php bloginfo('name'); ?></h1></a>
    <?php wp_nav_menu(['container' => 'nav']); ?>
  </header>
