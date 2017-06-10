<?php
/*
Template Name: Page Voyages
*/
; ?>

<?php include('head.php'); ?>

<body class="voyages-page">
  <h1 class="hidden" aria-level="1" role="heading">Page Voyages</h1>
  <?php include('navigation.php'); ?>
  <?php get_header(); ?>

  <div class="voyages">
    <div class="voyages__futur">
      <a class="voyages__futur__bloc-link" href="participer.html">
        <h3 class="voyages__title" aria-level="3" role="heading">Notre prochain voyage</h3>
        <figure class="voyages__futur-figure">
          <img class="voyages__futur-img" src="./images/voyage-one.jpg" width="500" height="331" alt="Futur voyage au Maroc">
        </figure>
        <section class="voyages__futur-infos">
          <h4 class="voyages__futur-title" aria-level="4" role="heading">Voyage au Burkina Faso</h4>
          <span class="voyages__futur-date">17 Juin 2017 - 10 Juillet 2017</span>
          <p class="voyages__futur-text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi imperdiet, felis eget pretium condimentum, nisl turpis porta risus, sed iaculis lacus ligula eu augue. Suspendisse id interdum dolor. Integer fermentum a justo a commodo.
          </p>
          <a class="voyages__futur-link" href="participer.html" title="Vers la page du voyage"><span class="voyages__futur-span">Participer</span></a>
        </section>
      </a>
    </div>
    <div class="voyages__finish">
      <h3 class="voyages__title voyages__title--center" aria-level="3" role="heading">Voyages terminés</h3>
      <div class="voyages__finish-bloc">
        <div class="voyages__finish-list">
          <a class="voyages__finish__bloc-link" href="voyage-post.html">
            <figure class="voyages__finish-figure">
              <img class="voyages__finish-img" src="./images/voyage-two.jpg" width="500" height="500" alt="Voyage au Maroc">
            </figure>
            <section class="voyages__finish-infos">
              <h4 class="voyages__finish-title" aria-level="4" role="heading">Voyage au Burkina Faso</h4>
              <span class="voyages__finish-date">27 Mars 2017 - 14 Avril 2017</span>
              <p class="voyages__finish-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi imperdiet
              </p>
              <a class="voyages__finish-link" href="voyage-post.html" title="Vers la page du voyage">En savoir plus</a>
            </section>
          </a>
        </div>
        <div class="voyages__finish-list">
          <a class="voyages__finish__bloc-link" href="voyage-post.html">
            <figure class="voyages__finish-figure">
              <img class="voyages__finish-img" src="./images/voyage-three.jpg" width="500" height="500" alt="Voyage au Maroc">
            </figure>
            <section class="voyages__finish-infos">
              <h4 class="voyages__finish-title" aria-level="4" role="heading">Voyage au Burkina Faso</h4>
              <span class="voyages__finish-date">27 Mars 2017 - 14 Avril 2017</span>
              <p class="voyages__finish-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi imperdiet
              </p>
              <a class="voyages__finish-link" href="voyage-post.html" title="Vers la page du voyage">En savoir plus</a>
            </section>
          </a>
        </div>
        <div class="voyages__finish-list">
          <a class="voyages__finish__bloc-link" href="voyage-post.html">
            <figure class="voyages__finish-figure">
              <img class="voyages__finish-img" src="./images/voyage-three.jpg" width="500" height="500" alt="Voyage au Maroc">
            </figure>
            <section class="voyages__finish-infos">
              <h4 class="voyages__finish-title" aria-level="4" role="heading">Voyage au Burkina Faso</h4>
              <span class="voyages__finish-date">27 Mars 2017 - 14 Avril 2017</span>
              <p class="voyages__finish-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi imperdiet
              </p>
              <a class="voyages__finish-link" href="voyage-post.html" title="Vers la page du voyage">En savoir plus</a>
            </section>
          </a>
        </div>
      </div>
    </div>
  </div>
  <?php include('footer.php'); ?>
