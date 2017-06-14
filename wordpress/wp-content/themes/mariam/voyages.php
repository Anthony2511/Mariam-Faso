<?php
/*
Template Name: Page Voyages
*/
; ?>

<?php if(is_page()){
    query_posts([
        'posts_per_page' => 3,
        'orderby' => 'date',
        'order' => 'DESC',
        'post_type' => 'voyages',
        'paged' => get_query_var('paged')
    ]);
}; ?>

<?php include('head.php'); ?>

<body class="voyages-page">
  <h1 class="hidden" aria-level="1" role="heading"><?php the_title(); ?></h1>
  <?php include('navigation.php'); ?>
  <?php get_header(); ?>

  <div class="voyages">
    <div class="voyages__futur">
      <a class="voyages__futur__bloc-link" href="participer.html">
        <h3 class="voyages__title" aria-level="3" role="heading"><?= __('Notre prochain voyage','ma'); ?></h3>
        <?php $voyagesImage = get_field('voyages__futur-image'); ?>
        <figure class="voyages__futur-figure">

          <?php if( !empty($voyagesImage) ): ?>
            <?php $size = 'thumb-voyages';
                  $thumb = $voyagesImage['sizes'][ $size ]; ?>
            <img class="voyages__futur-img" src="<?= $thumb; ?>" width="500" height="331" alt="<?= $voyagesImage['alt']; ?>" />
          <?php endif; ?>

        </figure>
        <section class="voyages__futur-infos">
          <h4 class="voyages__futur-title" aria-level="4" role="heading"><?= get_field('voyages__futur-title'); ?></h4>
          <span class="voyages__futur-date"><?= get_field('voyages__futur-date'); ?></span>
          <p class="voyages__futur-text"><?= get_field('voyages__futur-text'); ?></p>
          <a class="voyages__futur-link" href="<?php the_permalink(); ?>" title="Vers la page du voyage"><span class="voyages__futur-span"><?= __('Participer','ma'); ?></span></a>
        </section>
      </a>
    </div>
    <div class="voyages__finish">
      <h3 class="voyages__title voyages__title--center" aria-level="3" role="heading"><?= __('Voyages terminés','ma'); ?></h3>
      <div class="voyages__finish-bloc">

        <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
        <div class="voyages__finish-list">
          <a class="voyages__finish__bloc-link" href="<?php the_permalink(); ?>">
            <?php $voyageFinish = get_field('single__voyage-image'); ?>
            <figure class="voyages__finish-figure">

              <?php if( !empty($voyageFinish) ): ?>
                <?php $size = 'thumb-voyage';
                      $thumb = $voyageFinish['sizes'][ $size ]; ?>
                <img class="voyages__finish-img" src="<?= $thumb; ?>" width="500" height="500" alt="<?= $voyageFinish['alt']; ?>" />
              <?php endif; ?>

            </figure>
            <section class="voyages__finish-infos">
              <h4 class="voyages__finish-title" aria-level="4" role="heading"><?php the_title(); ?></h4>
              <span class="voyages__finish-date"><?= get_field('single__date'); ?></span>
              <p class="voyages__finish-text"><?= get_field('single__description'); ?></p>
              <a class="voyages__finish-link" href="<?php the_permalink(); ?>" title="Vers la page du voyage"><?= __('En savoir plus','ma'); ?></a>
            </section>
          </a>
        </div>
        <?php endwhile; endif; ?>

      </div>
    </div>
  </div>

  <?php get_footer(); ?>
