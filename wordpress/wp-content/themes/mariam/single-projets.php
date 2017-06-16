<?php
/*
Template Name: Single Projets
*/
; ?>

<?php include('head.php'); ?>

<body class="projets-page">
  <h1 class="hidden" aria-level="1" role="heading"><?php the_title(); ?></h1>
  <?php include('navigation.php'); ?>
  <?php get_header(); ?>

    <div class="projet-type">

      <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
      <div class="projet-type__history">
        <?php $singleProjet = get_field('single__image-projet'); ?>
        <figure class="projet-type__figure">

          <?php if( !empty($singleProjet) ): ?>
            <?php $size = 'thumb-voyage';
                  $thumb = $singleProjet['sizes'][ $size ]; ?>
            <img class="projet-type__img" src="<?= $thumb; ?>" width="960" height="720" alt="<?= $singleProjet['alt']; ?>"/>
          <?php endif; ?>

        </figure>
        <section class="projet-type__details">
          <h3 class="projet-type__title" aria-level="3" role="heading"><?= __('Détails du projets', 'ma'); ?></h3>
          <div class="projet-type__infos-bloc">
            <dl class="projet-type__infos">
              <dt class="projet-type__infos-title"><?= __('Lieu :', 'ma'); ?></dt>
              <dd class="projet-type__infos-text"><?= get_field('single__text-lieu'); ?></dd>
            </dl>
            <dl class="projet-type__infos">
              <dt class="projet-type__infos-title"><?= __('Coût :', 'ma'); ?></dt>
              <dd class="projet-type__infos-text"><?= get_field('single__text-cout'); ?> &euro;</dd>
            </dl>
            <dl class="projet-type__infos">
              <dt class="projet-type__infos-title"><?= __('Durée :', 'ma'); ?></dt>
              <dd class="projet-type__infos-text"><?= get_field('single__text-duree'); ?></dd>
            </dl>
            <dl class="projet-type__infos">
              <dt class="projet-type__infos-title"><?= __('But :', 'ma'); ?></dt>
              <dd class="projet-type__infos-text"><?= get_field('single__text-but'); ?></dd>
            </dl>
          </div>
        </section>
      </div>

      <?php if( have_rows('section') ): ?>
      <?php while( have_rows('section') ): the_row(); ?>
      <section class="projet-type__flow">
        <h3 class="projet-type__flow-title" aria-level="3" role="heading"><?= the_sub_field('single__title-section'); ?></h3>
        <p class="projet-type__flow-text"><?= the_sub_field('single__text-deroulement'); ?></p>
      </section>
      <?php endwhile; endif; ?>
      <?php endwhile; endif; ?>

    </div>

    <?php include('footer.php'); ?>
