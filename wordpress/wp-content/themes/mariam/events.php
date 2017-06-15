<?php
/*
Template Name: Page Evenements
*/
; ?>

<?php if(is_page()){
    query_posts([
        'posts_per_page' => 2,
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
  <?php get_header(); ?>

    <div class="page-event">

      <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
      <div class="page-event__bloc">
        <time class="page-event__date" datetime="<?php the_time(); ?>"><?= get_field('single__event-date'); ?></time>
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
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet ligula laoreet, efficitur nisi ut, rutrum lectus. Sed sed rhoncus ante. Nulla dictum, lacus sit amet suscipit congue, mauris arcu porta magna, et dapibus urna arcu ut libero. Proin hendrerit, dolor et
          </p>
          <div class="page-event__inscriptions">
            <a class="page-event__button page-event__button--margin" href="<?php the_permalink(); ?>" title="Vers la page Inscriptions"><?= __('Inscription sur ', 'ma'); ?><span class="page-event__button-hover"><?= __('Mariam Faso', 'ma'); ?></span></a>
            <a class="page-event__button" href="https://www.facebook.com/MariamFaso/?fref=ts" title="Vers la page Facebook Mariam Faso"><?= __('Inscription sur', 'ma'); ?> <span class="page-event__button-hover"><?= __('Facebook', 'ma'); ?></span></a>
          </div>
        </section>
      </div>
      <?php endwhile; endif; ?>

      <?php wp_pagenavi(); ?>
    </div>

    <?php include('footer.php');  ?>
