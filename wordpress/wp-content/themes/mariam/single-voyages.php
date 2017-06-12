<?php
/*
Template Name: Single Voyages
*/
; ?>

<?php include('head.php'); ?>


<body class="voyages-page">
  <h1 class="hidden" aria-level="1" role="heading">fff</h1>
  <?php include('navigation.php'); ?>
  <?php include('header.php'); ?>

  <div class="voyage-post">
    <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>

    <div class="voyages-post__bloc">
      <?php if( have_rows('journee') ): ?>
      <?php while( have_rows('journee') ): the_row(); ?>

      <ul class="voyage-post__list">

        <li class="voyage-post__item period">
          <section class="voyage-post__content">
            <h3 class="voyage-post__timeline-title" aria-level="3" role="heading"><?= the_sub_field('voyage__titre-principal'); ?></h3>
          </section>
        </li>
        <?php if( have_rows('infos') ): ?>
        <?php while( have_rows('infos') ): the_row(); ?>
        <li class="voyage-post__item">
          <div class="voyage-post__timeline-info">
            <span><?= the_sub_field('voyage__date'); ?></span>
          </div>
          <div class="voyage-post__timeline-marker"></div>
          <section class="voyage-post__content">
            <h4 class="voyage-post__timeline-title" aria-level="4" role="heading"><?= the_sub_field('voyage__title'); ?></h4>
            <p class="voyage-post__timeline-text">
              <?= the_sub_field('voyage__text'); ?>
            </p>
            <div class="voyage-post__figure-bloc">
              <?php if( have_rows('images') ): ?>
              <?php while( have_rows('images') ): the_row(); ?>
              <?php $voyageImage = get_sub_field('voyage__image'); ?>
              <figure class="voyage-post__figure">
                <?php if( !empty($voyageImage) ): ?>
                  <?php $size = 'thumb-voyage';
                        $thumb = $voyageImage['sizes'][ $size ]; ?>
                  <img class="voyage-post__img" src="<?= $thumb; ?>" width="500" height="331" alt="<?= $voyageImage['alt']; ?>" />
                <?php endif; ?>
              </figure>
              <?php endwhile; endif; ?>
            </div>
          </section>
        </li>
        <?php endwhile; endif; ?>
      </ul>
      <?php endwhile; endif; ?>
    </div>
  <?php endwhile; endif; ?>
  </div>
  <?php include('footer.php'); ?>
