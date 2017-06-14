<?php
/*
Template Name: Page Contact
*/
; ?>

<?php include('head.php'); ?>

<body class="contact-page">
  <h1 class="hidden" aria-level="1" role="heading"><?php the_title(); ?></h1>
  <?php include('navigation.php'); ?>
  <?php get_header(); ?>

    <div class="contact">
      <section class="contact__intro">
        <h3 class="contact__title" aria-level="3" role="heading"><?= __('Besoin de réponse ?','ma'); ?></h3>
        <p class="contact__text"><?= get_field('contact__text-intro'); ?></p>
      </section>
      <section class="contact__bloc">
        <div class="contact__form">
          <h3 class="contact__bloc-title" aria-level="3" role="heading"><?= __('Envoyez-nous un message','ma'); ?></h3>
          <span class="contact__bloc-text"><?= __('Les champs accompagnés d\'un (*) sont obligatoires','ma'); ?></span>
          <?= do_shortcode('[contact-form-7 id="78" title="Formulaire de contact"]'); ?>
        </div>
        <section class="contact__infos">
          <h4 class="contact__infos-title" aria-level="4" role="heading"><?= __('Informations','ma'); ?></h4>
          <div class="contact__infos-labels">
            <p class="contact__infos-text contact__infos-text--lieu"><?= get_field('contact__lieu'); ?></p>
            <p class="contact__infos-text contact__infos-text--phone"><?= get_field('contact__tel'); ?></p>
            <p class="contact__infos-text contact__infos-text--mail"><?= get_field('contact__mail'); ?></p>
          </div>
        </section>
      </section>
    </div>

    <?php get_footer(); ?>
