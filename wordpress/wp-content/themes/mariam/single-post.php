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
  <div class="single-actu">
    <div class="single-actu__bloc-one">
      <?php $actuImages = get_field('event__img'); ?>
      <figure class="news__bloc-img">
        <?php if( !empty($actuImages) ): ?>
          <?php $size = 'thumb-actu';
                $thumb = $actuImages['sizes'][ $size ]; ?>
          <img class="single-actu__img" src="<?= $thumb; ?>" width="495" height="371" alt="<?= $actuImages['alt']; ?>"/>
        <?php endif; ?>
      </figure>
      <p class="single-actu__text"><?= get_field('actu__text-one'); ?></p>
    </div>

    <?php if( have_rows('paragraphe') ): ?>
    <?php while( have_rows('paragraphe') ): the_row(); ?>
    <div class="single-actu__bloc-two">
      <h3 class="single-actu__title"><?= the_sub_field('actu__text-two-title'); ?></h3>
      <?= the_sub_field('actu__text-two'); ?>
    </div>
    <?php endwhile; endif; ?>
  </div>
  <?php endwhile; endif; ?>
  <?php include('footer.php'); ?>
