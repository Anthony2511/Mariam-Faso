<?php
/*
Template Name: Page FAQ
*/
; ?>

<?php include('head.php'); ?>
<body>
  <h1 class="hidden" aria-level="1" role="heading">FAQ</h1>
  <?php include('navigation.php'); ?>
  <?php include('header.php'); ?>

    <div class="faq">
      <?php if( have_rows('question-reponse') ): ?>
      <div class="faq__bloc">
        <?php while ( have_rows('question-reponse') ) : the_row(); ?>
        <dl class="faq__list">
          <dt class="faq__term faq__term--question">Contenu de la question ?</dt>
          <dd class="faq__term">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi imperdiet, felis eget pretium condimentum, nisl turpis porta risus, sed iaculis lacus ligula eu augue. Suspendisse id interdum dolor. Integer fermentum a justo a commodo.</dd>
        </dl>
        <?php endwhile; ?>
       </div>
       <?php endif; ?>
       <div class="faq__contact">
         <p class="faq__contact-line">D'autres questions ?</p>
         <a class="faq__link" href="contact.html" title="Vers la page Contact">Contactez-nous</a>
       </div>
    </div>
    <?php include('footer.php'); ?>
