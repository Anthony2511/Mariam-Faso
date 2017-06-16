<?php
/*
Template Name: Page A Propos
*/
; ?>

<?php include('head.php'); ?>

<body class="about-page">
  <h1 class="hidden" aria-level="1" role="heading"><?php the_title(); ?></h1>
	<?php include('navigation.php'); ?>
	<?php get_header(); ?>

  <div class="about">
    <div class="about__history">
      <div class="about__bloc-left">

        <?php $aboutImage = get_field('about__image'); ?>
        <figure class="about__bloc-img">
          <?php if( !empty($aboutImage) ): ?>
            <?php $size = 'thumb-about';
                  $thumb = $aboutImage['sizes'][ $size ]; ?>
            <img class="about__img" src="<?= $thumb; ?>" width="523" height="523" alt="<?= $aboutImage['alt']; ?>" />
          <?php endif; ?>

        </figure>
        <div class="about__bloc-info">
          <span class="about__title-info"><?= __('Mariam Faso','ma'); ?></span>
          <span class="about__association"><?= __('Association','ma'); ?></span>
        </div>
      </div>
      <section class="about__bloc-right">
        <h3 class="about__title" aria-level="3" role="heading"><?= __('Un peu d\'histoire&hellip;','ma'); ?></h3>
        <p class="about__text"><?= get_field('about__text-intro'); ?></p>
      </section>
    </div>
    <section class="about__relations">
      <h3 class="about__title" aria-level="3" role="heading"><?= __('Relations Nord-Sud','ma'); ?></h3>
      <p class="about__text about__text--columns"><?= get_field('about__text-content'); ?></p>
    </section>
    <section class="about__presse">
      <h3 class="about__title" aria-level="3" role="heading"><?= __('On parle de nous','ma'); ?></h3>
      <?php if( have_rows('presse') ): ?>
      <?php while( have_rows('presse') ): the_row(); ?>
      <div class="about__presse-bloc">
        <a class="about__presse-link" href="<?= the_sub_field('presse__link'); ?>" title="Vers le site de l'article"><?= the_sub_field('presse__text'); ?></a>
      </div>
      <?php endwhile; endif; ?>
    </section>
    <div class="about__quotation">
      <section class="about__quotation-bloc">
        <h3 class="hidden" aria-level="3" role="heading"><?= __('Citation','ma'); ?></h3>
        <p class="about__citation"><?= get_field('about__text-citation'); ?></p>
        <span class="about__author"><?= get_field('about__author-citation'); ?></span>
      </section>
    </div>
    <section class="about__do">
      <h3 class="about__do-title" aria-level="3" role="heading"><?= __('Que faisons-nous ?','ma'); ?></h3>
      <div class="about__do-action">
        <span class="about__do-logo about__do-logo--learn"><?= __('apprendre','ma'); ?></span>
        <span class="about__do-logo about__do-logo--build"><?= __('construire','ma'); ?></span>
        <span class="about__do-logo about__do-logo--given"><?= __('donner','ma'); ?></span>
      </div>
      <p class="about__do-text"><?= get_field('about__text-do'); ?></p>
      <a class="about__do-link" href="<?php the_permalink(111); ?>" title="Vers la page Projets"><?= __('En savoir plus','ma'); ?></a>
    </section>
  </div>

	<?php include('footer.php');  ?>
