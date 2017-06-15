<?php
/*
Template Name: Single Post
*/
; ?>

<?php include('head.php'); ?>

<body class="voyages-page">
  <h1 class="hidden" aria-level="1" role="heading"><?php the_title(); ?></h1>
  <?php include('navigation.php'); ?>
  <?php get_header(); ?>

  <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
  <div class="voyage-post">

  <?= 'salut'; ?>
  <?php $actuImages = get_field('event__img'); ?>
  <figure class="news__bloc-img">
    <?php if( !empty($actuImages) ): ?>
      <?php $size = 'thumb-events';
            $thumb = $actuImages['sizes'][ $size ]; ?>
      <img class="news__img" src="<?= $thumb; ?>" width="440" height="330" alt="<?= $actuImages['alt']; ?>"/>
    <?php endif; ?>
  </figure>

  </div>
  <?php endwhile; endif; ?>
  <?php get_footer(); ?>
