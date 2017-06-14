<?php
/*
Template Name: Page Evenements
*/
; ?>

<?php if(is_page()){
    query_posts([
        'posts_per_page' => 3,
        'orderby' => 'date',
        'order' => 'DESC',
        'post_type' => 'evenements',
        'paged' => get_query_var('paged')
    ]);
}; ?>

<?php include('head.php'); ?>

<body class="events-page">
  <h1 class="hidden" aria-level="1" role="heading"><?php the_title(); ?></h1>
  <?php include('navigation.php'); ?>
  <?php include('header.php'); ?>
    <div class="page-event">
      <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
      <div class="page-event__bloc">
        <time class="page-event__date" datetime="2017-06-23"><?= get_field('single__event-date'); ?></time>
        <?php $eventImage = get_field('single__image-event'); ?>
        <figure class="page-event__bloc-img">
          <?php if( !empty($eventImage) ): ?>
          <?php $size = 'thumb-events';
                $thumb = $eventImage['sizes'][ $size ]; ?>
          <img class="page-event__img" src="<?= $thumb; ?>" width="542" height="359" alt="<?= $eventImage['alt']; ?>" />
          <?php endif; ?>
        </figure>
        <section class="page-event__infos">
          <h3 class="page-event__title" aria-level="3" role="heading"><?php the_title(); ?></h3>
          <p class="page-event__text">
            <?= the_content(); ?>
          </p>
          <div class="page-event__inscriptions">
            <a class="page-event__button page-event__button--margin" href="<?php the_permalink(); ?>" title="Vers la page Inscriptions"><?= __('Inscription sur ', 'ma'); ?><span class="page-event__button-hover"><?= __('Mariam Faso', 'ma'); ?></span></a>
            <a class="page-event__button" href="https://www.facebook.com/MariamFaso/?fref=ts" title="Vers la page Facebook Mariam Faso"><?= __('Inscription sur', 'ma'); ?> <span class="page-event__button-hover"><?= __('Facebook', 'ma'); ?></span></a>
          </div>
        </section>
      </div>
      <?php endwhile; endif; ?>
      <div class="page-event__number-page">
        <a class="page-event__arrowL" href="#" title="Vers la page précédente"></a>
        <a class="page-event__page page-event__page--active" href="#" title="Vers la page 1"><span>1</span></a>
        <a class="page-event__page" href="#" title="Vers la page 2"><span>2</span></a>
        <a class="page-event__page page-event__page--hellip" href="#" title="Vers la page..."><span>&hellip;</span></a>
        <a class="page-event__page" href="#" title="Vers la page 5"><span>5</span></a>
        <a class="page-event__arrowR" href="#" title="Vers la page suivante"></a>
      </div>
    </div>
    <?php include('footer.php'); ?>
