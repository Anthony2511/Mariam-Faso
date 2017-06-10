<?php
/*
Template Name: Single Voyage
*/
; ?>

<?php include('head.php'); ?>

<body class="voyages-page">
  <h1 class="hidden" aria-level="1" role="heading">Page Voyage au Burkina Faso</h1>
  <?php include('navigation.php'); ?>
  <?php get_header(); ?>

  <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
  <?php if( have_rows('journee') ): ?>
  <div class="voyage-post">
    <div class="voyages-post__bloc">
      <?php while( have_rows('journee') ): the_row(); ?>
      <ul class="voyage-post__list">
        <li class="voyage-post__item period">
          <section class="voyage-post__content">
            <h3 class="voyage-post__timeline-title" aria-level="3" role="heading"><?= get_field('voyage__titre-principal'); ?></h3>
          </section>
        </li>
        <?php the_sub_field('sub_field_name'); ?>
        <li class="voyage-post__item">
          <div class="voyage-post__timeline-info">
            <span><?= get_field('voyage__date'); ?></span>
          </div>
          <div class="voyage-post__timeline-marker"></div>
          <section class="voyage-post__content">
            <h4 class="voyage-post__timeline-title" aria-level="4" role="heading">Arrivée au campement</h4>
            <p class="voyage-post__timeline-text">
              Nullam vel sem. Nullam vel sem. Integer ante arcu, accumsan a, consectetuer eget,
              posuere ut, mauris. Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla.
              Donec vitae sapien ut libero venenatis faucibus. ullam dictum felis
              eu pede mollis pretium. Pellentesque ut neque.
            </p>
            <div class="voyage-post__figure-bloc">
              <figure class="voyage-post__figure">
                <img class="voyage-post__img" src="./images/voyage-four.jpg" width="500" height="331" alt="L'arrivée au camp">
              </figure>
              <figure class="voyage-post__figure">
                <img class="voyage-post__img" src="./images/voyage-three.jpg" width="500" height="331" alt="L'arrivée au camp">
              </figure>
            </div>
          </section>
        </li>
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
  </div>
<?php endif; ?>
<?php endwhile; endif; ?>
<?php include('footer.php'); ?>
