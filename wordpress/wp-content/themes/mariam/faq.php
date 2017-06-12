<?php
/*
Template Name: Page FAQ
*/
; ?>

<?php include('head.php'); ?>
<body class="faq-page">
  <h1 class="hidden" aria-level="1" role="heading"><?php the_title(); ?></h1>
  <?php include('navigation.php'); ?>
  <?php include('header.php'); ?>

    <div class="faq">
      <?php if( have_rows('question-reponse') ): ?>
      <div class="faq__bloc">
        <?php while ( have_rows('question-reponse') ) : the_row(); ?>
        <dl class="faq__list">
          <dt class="faq__term faq__term--question"><?= the_sub_field('faq__question'); ?></dt>
          <dd class="faq__term"><?= the_sub_field('faq__reponse'); ?></dd>
        </dl>
        <?php endwhile; ?>
       </div>
       <?php endif; ?>
       <div class="faq__contact">
         <p class="faq__contact-line"><?= __('D\'autres questions ?','ma'); ?></p>
         <a class="faq__link" href="<?php the_permalink(89); ?>" title="Vers la page Contact"><?= __('Contactez-nous','ma'); ?></a>
       </div>
    </div>
    <?php include('footer.php'); ?>
