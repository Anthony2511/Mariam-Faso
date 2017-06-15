<?php
/*
Template Name: Page Actualités
*/
; ?>

<?php if(is_page()){
    query_posts([
        'posts_per_page' => 2,
        'orderby' => 'date',
        'order' => 'DESC',
        'post_type' => 'post',
        'paged' => get_query_var('paged')
    ]);
}; ?>

<?php include('head.php'); ?>

<body class="actu-page">
  <h1 class="hidden" aria-level="1" role="heading">Page actualités</h1>
  <?php include('navigation.php'); ?>
  <?php get_header(); ?>


    <div class="news">
      <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
      <div class="news__bloc">
        <a class="news__bloc-link" href="actu-post.html">
          <span class="news__date">Il y a 2 heures</span>
          <figure class="news__bloc-img">
            <img class="news__img" src="./images/news-actu.jpg" width="960" height="720" alt="Une sixième classe pour Mariam Faso">
          </figure>
          <section class="news__infos">
            <h3 class="news__title" aria-level="3" role="heading">Une sixième classe pour Mariam Faso</h3>
            <p class="news__text">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi imperdiet, felis eget pretium condimentum, nisl turpis porta risus, sed iaculis lacus ligula eu augue. Suspendisse id interdum dolor. Integer fermentum a justo a commodo.
            </p>
            <a class="news__link" href="actu-post.html" title="Vers l'article : Une sixième classe pour Mariam Faso">Lire plus</a>
          </section>
        </a>
      </div>
      <?php endwhile; endif; ?>

      <?php wp_pagenavi(); ?>
    </div>

      <?php include('footer.php'); ?>
