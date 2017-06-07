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
        <figure class="about__bloc-img">
          <img class="about__img" src="./images/imgAbout.jpg" width="700" height="700" alt="Un peu d'histoire sur Mariam Faso">
        </figure>
        <div class="about__bloc-info">
          <span class="about__title-info">Mariam Faso</span>
          <span class="about__association">Association</span>
        </div>
      </div>
      <section class="about__bloc-right">
        <h3 class="about__title" aria-level="3" role="heading">Un peu d'histoire&hellip;</h3>
        <p class="about__text">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi imperdiet, felis eget pretium condimentum, nisl turpis porta risus, sed iaculis lacus ligula eu augue. Suspendisse id interdum dolor. Integer fermentum a justo a commodo.
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi imperdiet, felis eget pretium condimentum, nisl turpis porta risus, sed iaculis lacus ligula eu augue. Suspendisse id interdum dolor. Integer fermentum a justo a commodo.
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi imperdiet, felis eget pretium condimentum, nisl turpis porta risus, sed iaculis lacus ligula eu augue. Suspendisse id interdum dolor. Integer fermentum a justo a commodo.
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi imperdiet, felis eget pretium condimentum, nisl turpis porta risus, sed iaculis lacus ligula eu augue. Suspendisse id interdum dolor. Integer fermentum a justo a commodo.
        </p>
      </section>
    </div>
    <section class="about__relations">
      <h3 class="about__title" aria-level="3" role="heading">Relations Nord-Sud</h3>
      <p class="about__text about__text--columns">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi imperdiet, felis eget pretium condimentum, nisl turpis porta risus, sed iaculis lacus ligula eu augue. Suspendisse id interdum dolor. Integer fermentum a justo a commodo.
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi imperdiet, felis eget pretium condimentum, nisl turpis porta risus, sed iaculis lacus ligula eu augue. Suspendisse id interdum dolor. Integer fermentum a justo a commodo.
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi imperdiet, felis eget pretium condimentum, nisl turpis porta risus, sed iaculis lacus ligula eu augue. Suspendisse id interdum dolor. Integer fermentum a justo a commodo.
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi imperdiet, felis eget pretium condimentum, nisl turpis porta risus, sed iaculis lacus ligula eu augue. Suspendisse id interdum dolor. Integer fermentum a justo a commodo.
      </p>
    </section>
    <div class="about__quotation">
      <section class="about__quotation-bloc">
        <h3 class="hidden" aria-level="3" role="heading">Citation</h3>
        <p class="about__citation">Lorem ipsum dolor sit amet, concectetuer adipsiging elit morbi imper</p>
        <span class="about__author">Mariam Faso</span>
      </section>
    </div>
    <section class="about__do">
      <h3 class="about__do-title" aria-level="3" role="heading">Que faisons-nous ?</h3>
      <div class="about__do-action">
        <span class="about__do-logo about__do-logo--learn">apprendre</span>
        <span class="about__do-logo about__do-logo--build">construire</span>
        <span class="about__do-logo about__do-logo--given">donner</span>
      </div>
      <p class="about__do-text">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi imperdiet, felis eget pretium condimentum, nisl turpis porta risus, sed iaculis lacus ligula eu augue. Suspendisse id interdum dolor. Integer fermentum a justo a commodo.
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi imperdiet, felis eget pretium condimentum, nisl turpis porta risus, sed iaculis lacus ligula eu augue. Suspendisse id interdum dolor. Integer fermentum a justo a commodo.
      </p>
      <a class="about__do-link" href="projets.html" title="Vers la page Projets">En savoir plus</a>
    </section>
  </div>

<?php wp_footer(); ?>
