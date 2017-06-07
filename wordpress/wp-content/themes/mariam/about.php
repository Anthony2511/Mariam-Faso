<?php
/*
Template Name: Page A Propos
*/
; ?>
<?php include('head.php'); ?>
<body class="about-page">
  <h1 class="hidden" aria-level="1" role="heading"></h1>
	<?php include('navigation.php'); ?>
	<?php include('header.php'); ?>

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
          <span class="about__title-info">Mariam Faso</span>
          <span class="about__association">Association</span>
        </div>
      </div>
      <section class="about__bloc-right">
        <h3 class="about__title" aria-level="3" role="heading"><?= get_field('about__title-intro');?></h3>
        <p class="about__text">
          <?= get_field('about__text-intro');?>
        </p>
      </section>
    </div>
    <section class="about__relations">
      <h3 class="about__title" aria-level="3" role="heading"><?= get_field('about__title-content');?></h3>
      <p class="about__text about__text--columns">
        <?= get_field('about__text-content');?>
      </p>
    </section>
    <div class="about__quotation">
      <section class="about__quotation-bloc">
        <h3 class="hidden" aria-level="3" role="heading">Citation</h3>
        <p class="about__citation"><?= get_field('about__text-citation');?></p>
        <span class="about__author"><?= get_field('about__author-citation');?></span>
      </section>
    </div>
    <section class="about__do">
      <h3 class="about__do-title" aria-level="3" role="heading"><?= get_field('about__title-do');?></h3>
      <div class="about__do-action">
        <span class="about__do-logo about__do-logo--learn">apprendre</span>
        <span class="about__do-logo about__do-logo--build">construire</span>
        <span class="about__do-logo about__do-logo--given">donner</span>
      </div>
      <p class="about__do-text">
        <?= get_field('about__text-do');?>
      </p>
      <a class="about__do-link" href="projets.html" title="Vers la page Projets">En savoir plus</a>
    </section>
  </div>

<?php wp_footer(); ?>
