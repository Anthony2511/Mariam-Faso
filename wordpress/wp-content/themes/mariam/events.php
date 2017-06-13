<?php
/*
Template Name: Page Events
*/
; ?>

<?php include('head.php'); ?>

<body class="events-page">
  <h1 class="hidden" aria-level="1" role="heading">Page évènements</h1>
  <?php include('navigation.php'); ?>
  <?php include('header.php'); ?>
    <div class="page-event">
      <div class="page-event__bloc">
        <time class="page-event__date" datetime="2017-06-23">23 juin</time>
        <figure class="page-event__bloc-img">
          <img  class="page-event__img" src="./images/imgEvent.jpg" width="960" height="720" alt="Souper spaghetti annuel">
        </figure>
        <section class="page-event__infos">
          <h3 class="page-event__title" aria-level="3" role="heading">Souper spaghetti annuel</h3>
          <p class="page-event__text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi imperdiet, felis eget pretium condimentum, nisl turpis porta risus, sed iaculis lacus ligula eu augue. Suspendisse id interdum dolor. Integer fermentum a justo a commodo. (&hellip;)
          </p>
          <div class="page-event__inscriptions">
            <a class="page-event__button page-event__button--margin" href="event-post.html" title="Vers la page Inscriptions">Inscription sur <span class="page-event__button-hover">Mariam Faso</span></a>
            <a class="page-event__button" href="https://www.facebook.com/MariamFaso/?fref=ts" title="Vers la page Facebook Mariam Faso">Inscription sur <span class="page-event__button-hover">Facebook</span></a>
          </div>
        </section>
      </div>
      <div class="page-event__bloc">
        <time class="page-event__date" datetime="2017-06-23">23 juin</time>
        <figure class="page-event__bloc-img">
          <img  class="page-event__img" src="./images/imgEvent.jpg" width="960" height="720" alt="Souper spaghetti annuel">
        </figure>
        <section class="page-event__infos">
          <h3 class="page-event__title" aria-level="3" role="heading">Souper spaghetti annuel</h3>
          <p class="page-event__text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi imperdiet, felis eget pretium condimentum, nisl turpis porta risus, sed iaculis lacus ligula eu augue. Suspendisse id interdum dolor. Integer fermentum a justo a commodo. (&hellip;)
          </p>
          <div class="page-event__inscriptions">
            <a class="page-event__button page-event__button--margin" href="event-post.html" title="Vers la page Inscriptions">Inscription sur <span class="page-event__button-hover">Mariam Faso</span></a>
            <a class="page-event__button" href="https://www.facebook.com/MariamFaso/?fref=ts" title="Vers la page Facebook Mariam Faso">Inscription sur <span class="page-event__button-hover">Facebook</span></a>
          </div>
        </section>
      </div>
      <div class="page-event__bloc">
        <time class="page-event__date" datetime="2017-06-23">23 juin</time>
        <figure class="page-event__bloc-img">
          <img  class="page-event__img" src="./images/imgEvent.jpg" width="960" height="720" alt="Souper spaghetti annuel">
        </figure>
        <section class="page-event__infos">
          <h3 class="page-event__title" aria-level="3" role="heading">Souper spaghetti annuel</h3>
          <p class="page-event__text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi imperdiet, felis eget pretium condimentum, nisl turpis porta risus, sed iaculis lacus ligula eu augue. Suspendisse id interdum dolor. Integer fermentum a justo a commodo. (&hellip;)
          </p>
          <div class="page-event__inscriptions">
            <a class="page-event__button page-event__button--margin" href="event-post.html" title="Vers la page Inscriptions">Inscription sur <span class="page-event__button-hover">Mariam Faso</span></a>
            <a class="page-event__button" href="https://www.facebook.com/MariamFaso/?fref=ts" title="Vers la page Facebook Mariam Faso">Inscription sur <span class="page-event__button-hover">Facebook</span></a>
          </div>
        </section>
      </div>
      <div class="page-event__number-page">
        <a class="page-event__arrowL" href="#" title="Vers la page précédente"></a>
        <a class="page-event__page page-event__page--active" href="#" title="Vers la page 1"><span>1</span></a>
        <a class="page-event__page" href="#" title="Vers la page 2"><span>2</span></a>
        <a class="page-event__page page-event__page--hellip" href="#" title="Vers la page..."><span>&hellip;</span></a>
        <a class="page-event__page" href="#" title="Vers la page 5"><span>5</span></a>
        <a class="page-event__arrowR" href="#" title="Vers la page suivante"></a>
      </div>
    </div>
    <?php include('footer.php'); ?>
