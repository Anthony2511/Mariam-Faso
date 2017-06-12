<?php
/*
Template Name: Single Voyages
*/
; ?>

<?php include('head.php'); ?>

<body class="voyages-page">
  <h1 class="hidden" aria-level="1" role="heading"><?php the__title(); ?></h1>
  <?php include('navigation.php'); ?>
  <?php get_header(); ?>

  <div class="voyage-post">
    <?php if( have_rows('journee') ): ?>
    <div class="voyages-post__bloc">
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
            <?php if( have_rows('infos') ): ?>
            <?php while( have_rows('infos') ): the_row(); ?>
            <div class="voyage-post__figure-bloc">
              <figure class="voyage-post__figure">
                <img class="voyage-post__img" src="./images/voyage-four.jpg" width="500" height="331" alt="L'arrivée au camp">
              </figure>
              <figure class="voyage-post__figure">
                <img class="voyage-post__img" src="./images/voyage-three.jpg" width="500" height="331" alt="L'arrivée au camp">
              </figure>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
          </section>
        </li>
        <?php endwhile; ?>
        <?php endif; ?>
        <li class="voyage-post__item">
          <div class="voyage-post__timeline-info">
            <span>13 Mars, 2016</span>
          </div>
          <div class="voyage-post__timeline-marker"></div>
          <section class="voyage-post__content">
            <h4 class="voyage-post__timeline-title" aria-level="4" role="heading">Debrief de la 1ère journée</h4>
            <p class="voyage-post__timeline-text">
              Nullam vel sem. Nullam vel sem. Integer ante arcu, accumsan a, consectetuer eget,
              posuere ut, mauris. Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla.
              Donec vitae sapien ut libero venenatis faucibus. ullam dictum felis
              eu pede mollis pretium. Pellentesque ut neque.
            </p>
            <div class="voyage-post__figure-bloc">
              <figure class="voyage-post__figure">
                <img class="voyage-post__img" src="./images/voyage-nine.jpg" width="500" height="331" alt="L'arrivée au camp">
              </figure>
            </div>
          </section>
        </li>
        <li class="voyage-post__item period">
          <div class="voyage-post__timeline-marker"></div>
          <section class="voyage-post__content">
            <h3 class="voyage-post__timeline-title" aria-level="3" role="heading">Le déroulement</h3>
          </section>
        </li>
      </ul>
      <?php endwhile; ?>
    </div>
    <?php endif; ?>
  </div>
  <?php include('footer.php'); ?>
