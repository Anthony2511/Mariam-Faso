<?php
/*
Template Name: Single Evenements
*/
; ?>

<?php include('head.php'); ?>

<body class="voyages-page">
  <h1 class="hidden" aria-level="1" role="heading"><?php the_title(); ?></h1>
  <?php include('navigation.php'); ?>
  <?php include('header.php'); ?>

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
          <h3 class="single-event__title">Informations</h3>
          <ul class="single-event__list">
            <li class="single-event__item single-event__item--lieu">Houmont</li>
            <li class="single-event__item single-event__item--date">23 Juin 2017</li>
            <li class="single-event__item single-event__item--time">17h - 22h</li>
          </ul>
        </div>
        <div class="single-event__form">
          <form class="single-event__inscription" action="index.html" method="post">
            <div class="single-event__champ">
              <label class="single-event__label" for="name">Nom pour la réservation :</label>
              <input class="single-event__input" type="text" name="name" id="name" placeholder="Dupont Jean">
            </div>
            <div class="single-event__champ">
              <label class="single-event__label" for="adult">Adulte(s) :</label>
              <input class="single-event__input" type="number" min="1" max="10" step="1" name="adult" id="adult" placeholder="1">
            </div>
            <div class="single-event__champ">
              <label class="single-event__label" for="children">Enfant(s) :</label>
              <input class="single-event__input" type="number" min="1" max="10" step="1" name="children" id="children" placeholder="1">
            </div>
            <button class="single-event__button" type="button" name="button">Inscription</button>
          </form>
        </div>
      </div>
    </section>

    <?php endwhile; endif; ?>
  </div>
  <?php include('footer.php'); ?>
