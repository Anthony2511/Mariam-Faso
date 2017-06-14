<?php
/*
Template Name: Page Galerie
*/
; ?>

<?php include('head.php'); ?>

<body class="galerie-page">
  <h1 class="hidden" aria-level="1" role="heading"><?php the_title(); ?></h1>
  <?php include('navigation.php'); ?>
  <?php get_header(); ?>

    <div class="galerie" id="galerie">

      <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
      <?php if( have_rows('image-galerie') ): ?>
      <?php while( have_rows('image-galerie') ): the_row(); ?>
      <?php $galerieImage = get_sub_field('galerie__image'); ?>
      <a href="<?= $galerieImage['url']; ?>">
      <figure class="galerie__bloc-figure">
        <?php if( !empty($galerieImage) ): ?>
          <?php $size = 'thumb-galerie';
                $thumb = $galerieImage['sizes'][ $size ]; ?>
          <img class="galerie__bloc-img" src="<?= $thumb; ?>" width="500" height="331" alt="<?= $galerieImage['alt']; ?>" />
        <?php endif; ?>

      </figure>
      </a>
    <?php endwhile; endif; ?>
    <?php endwhile; endif; ?>

    </div>

    <?php get_footer(); ?>
