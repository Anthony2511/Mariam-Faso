<?php
/*
Template Name: Single Post
*/
; ?>

<?php include('head.php'); ?>

<body class="voyages-page">
  <h1 class="hidden" aria-level="1" role="heading">ggsgs</h1>
  <?php include('navigation.php'); ?>
  <?php get_header(); ?>

  <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
  <div class="voyage-post">

  <?= 'salut'; ?>

  </div>
  <?php endwhile; endif; ?>
  <?php get_footer(); ?>
