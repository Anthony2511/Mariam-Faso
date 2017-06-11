<?php
/*
Template Name: Page Dons
*/
; ?>
Nous sommes là pour vous <strong class="contact__text-strong">informez</strong>, vous <strong class="contact__text-strong">aidez</strong>.
Vous avez des <strong class="contact__text-strong">questions</strong>, des <strong class="contact__text-strong">envies</strong>, besoin de <strong class="contact__text-strong">réponses</strong> ?
Vous pouvez déjà retrouver <a class="contact__text-link" href="faq.html">ici</a> les questions les plus fréquentes.
<?php include('head.php'); ?>

<body class="dons-page">
  <h1 class="hidden" aria-level="1" role="heading"><?php the_title(); ?></h1>
  <?php include('navigation.php'); ?>
  <?php include('header.php'); ?>
    <div class="dons">
      <div class="dons__intro">
        <dl class="dons__list">
          <dt class="dons__terms dons__terms--partage"><?= __('partage','ma'); ?></dt>
          <dd class="dons__text"><?= __('Nous partageons notre savoir et notre savoir-faire','ma'); ?></dd>
        </dl>
        <dl class="dons__list">
          <dt class="dons__terms dons__terms--solidarite"><?= __('solidarité','ma'); ?></dt>
          <dd class="dons__text"><?= __('Nous sommes unis et apportons notre soutien','ma'); ?></dd>
        </dl>
        <dl class="dons__list">
          <dt class="dons__terms dons__terms--avenir"><?= __('avenir','ma'); ?></dt>
          <dd class="dons__text"><?= __('Nous construisons un avenir durable','ma'); ?></dd>
        </dl>
      </div>
      <section class="dons__donate">
        <h3 class="dons__donate-title" aria-level="3" role="heading"><?= __('Soutenez nous','ma'); ?></h3>
        <p class="dons__donate-text">
          <?= get_field('dons__text'); ?>
        </p>
        <div class="dons__buttons">
          <a class="dons__single-button" href="<?= get_field('dons__link'); ?>" title="Vers le site Paypal"><?= __('Faire un don financier','ma'); ?></a>
          <a class="dons__single-button" href="<?= get_field('dons__link'); ?>" title="Vers le site"><?= __('Faire un don matériel','ma'); ?></a>
          <a class="dons__single-button" href="<?= get_field('dons__link'); ?>" title="Vers le site"><?= __('Scolariser un enfant','ma'); ?></a>
        </div>
      </section>
    </div>
    <?php include('footer.php'); ?>
