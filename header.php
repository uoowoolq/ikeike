<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php wp_head(); ?>
</head>
<body>
  <header>
    <h1><?php bloginfo('name'); ?></h1>
    <?php wp_nav_menu(['container' => 'nav']); ?>
  </header>
