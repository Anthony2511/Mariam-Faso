<?php
/*
Template Name: Page Actualités
*/
; ?>

<?php if(is_page()){
    query_posts([
        'posts_per_page' => 2,
        'orderby' => 'date',
        'order' => 'DESC',
        'post_type' => 'post',
        'paged' => get_query_var('paged')
    ]);
}; ?>

<?php include('head.php'); ?>

<body class="actu-page">
  <h1 class="hidden" aria-level="1" role="heading"><?php the_title(); ?></h1>
  <?php include('navigation.php'); ?>
  <?php get_header(); ?>


    <div class="news">
      <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
      <div class="news__bloc">
        <a class="news__bloc-link" href="<?php the_permalink(); ?>">
          <span class="news__date"><?= __('Le','ma'); ?> <?php the_time('j F Y');?></span>
          <?php $actuImages = get_field('event__img'); ?>
          <figure class="news__bloc-img">
            <?php if( !empty($actuImages) ): ?>
              <?php $size = 'thumb-actu';
                    $thumb = $actuImages['sizes'][ $size ]; ?>
              <img class="news__img" src="<?= $thumb; ?>" width="495" height="371" alt="<?= $actuImages['alt']; ?>"/>
            <?php endif; ?>
          </figure>
          <section class="news__infos">
            <h3 class="news__title" aria-level="3" role="heading"><?php the_title(); ?></h3>
            <p class="news__text">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi imperdiet, felis eget pretium condimentum, nisl turpis porta risus, sed iaculis lacus ligula eu augue. Suspendisse id interdum dolor. Integer fermentum a justo a commodo.
            </p>
            <a class="news__link" href="<?php the_permalink(); ?>" title="Vers l'article : <?php the_title(); ?>"><?= __('Lire plus','ma'); ?></a>
          </section>
        </a>
      </div>
      <?php endwhile; endif; ?>

      <?php wp_pagenavi(); ?>
    </div>

      <?php include('footer.php'); ?>
