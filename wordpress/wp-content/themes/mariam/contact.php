<?php
/*
Template Name: Page Contact
*/
; ?>

<?php include('head.php'); ?>

<body>
  <h1 class="hidden" aria-level="1" role="heading"><?php the_title(); ?></h1>
  <?php include('navigation.php'); ?>
  <?php include('header.php'); ?>

    <div class="contact">
      <section class="contact__intro">
        <h3 class="contact__title" aria-level="3" role="heading">Besoin de réponses ?</h3>
        <p class="contact__text">
          Nous sommes là pour vous <strong class="contact__text-strong">informez</strong>, vous <strong class="contact__text-strong">aidez</strong>.
          Vous avez des <strong class="contact__text-strong">questions</strong>, des <strong class="contact__text-strong">envies</strong>, besoin de <strong class="contact__text-strong">réponses</strong> ?
          Vous pouvez déjà retrouver <a class="contact__text-link" href="faq.html">ici</a> les questions les plus fréquentes.
        </p>
      </section>
      <section class="contact__bloc">
        <div class="contact__form">
          <h3 class="contact__bloc-title" aria-level="3" role="heading">Envoyez-nous un message</h3>
          <span class="contact__bloc-text">Les champs accompagnés d'un (*) sont obligatoires</span>
          <?= do_shortcode('[contact-form-7 id="78" title="Formulaire de contact"]'); ?>
        </div>
        <section class="contact__infos">
          <h4 class="contact__infos-title" aria-level="4" role="heading">Informations</h4>
          <div class="contact__infos-labels">
            <p class="contact__infos-text contact__infos-text--lieu">15, Avenue de la Gare à 6600 Bastogne</p>
            <p class="contact__infos-text contact__infos-text--phone">0479/21.57.44</p>
            <p class="contact__infos-text contact__infos-text--mail">info@mariam.be</p>
          </div>
        </section>
      </section>
    </div>
    <?php include('footer.php'); ?>
