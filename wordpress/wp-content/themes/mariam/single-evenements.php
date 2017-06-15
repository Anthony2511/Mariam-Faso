<?php
/*
Template Name: Single Evenements
*/
; ?>

<?php include('head.php'); ?>

<body class="voyages-page">
  <h1 class="hidden" aria-level="1" role="heading"><?php the_title(); ?></h1>
  <?php include('navigation.php'); ?>
  <?php get_header(); ?>

  <div class="single-event">

    <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
    <div class="single-event__bloc">
      <?php $eventImage = get_field('single__image-event'); ?>

      <figure class="single-event__figure">
        <?php if( !empty($eventImage) ): ?>
          <?php $size = 'thumb-home-project';
                $thumb = $eventImage['sizes'][ $size ]; ?>
          <img class="single-event__img" src="<?= $thumb; ?>" width="542" height="359" alt="<?= $eventImage['alt']; ?>" />
        <?php endif; ?>

      </figure>
      <p class="single-event__intro"><?= get_field('single__event-text'); ?></p>
    </div>
    <section class="single-event__container">
      <div class="single-event__infos">
        <div class="single-event__type">
          <h3 class="single-event__title"><?= __('Informations','ma'); ?></h3>
          <ul class="single-event__list">
            <li class="single-event__item single-event__item--lieu"><?= get_field('single__event-lieu'); ?></li>
            <li class="single-event__item single-event__item--date"><?= get_field('single__event-date'); ?></li>
            <li class="single-event__item single-event__item--time"><?= get_field('single__event-heure'); ?></li>
          </ul>
        </div>
        <div class="single-event__form">
          <?= do_shortcode('[contact-form-7 id="246" title="Inscription events"]'); ?>
        </div>
      </div>
    </section>
    <?php endwhile; endif; ?>
  </div>

  <?php include('footer.php'); ?>
