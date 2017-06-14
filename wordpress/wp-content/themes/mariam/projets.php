<?php
/*
Template Name: Page Projets
*/
; ?>

<?php if(is_page()){
    query_posts([
        'posts_per_page' => 3,
        'orderby' => 'date',
        'order' => 'DESC',
        'post_type' => 'projets',
        'paged' => get_query_var('paged')
    ]);
}; ?>

<?php include('head.php'); ?>

<body class="projets-page">
  <h1 class="hidden" aria-level="1" role="heading"></h1>
  <?php include('navigation.php'); ?>
  <?php get_header(); ?>

    <div class="projets">
      <div class="projets__bloc">
        <section class="projets__do">
          <h3 class="projets__do-title" aria-level="3" role="heading"><?= __('Que faisons-nous ?','ma'); ?></h3>
          <p class="projets__do-text"><?= get_field('projets__text-do'); ?></p>
        </section>
        <section class="projets__picture">
          <h3 class="projets__title" aria-level="3" role="heading"><?= __('Notre projet en images','ma'); ?></h3>
          <div class="projets__figure-bloc">
            <figure class="projets__bloc-img">
              <img class="projets__picture-img" src="./images/voyage-one.jpg" width="500" height="331" alt="Photo réalisé pendant le voyage au Burkina Faso">
            </figure>
          </div>
          <a class="projets__galerie-link" href="<?php the_permalink(145); ?>"><?= __('Voir notre galerie','ma'); ?></a>
        </section>
        <section class="projets__video">
          <h3 class="projets__title" aria-level="3" role="heading"><?= __('Notre dernier voyage en vidéo','ma'); ?></h3>
          <div class="projets__bloc-clip">
            <img class="iframe-ratio" src="data:image/gif;base64,R0lGODlhEAAJAIAAAP///wAAACH5BAEAAAAALAAAAAAQAAkAAAIKhI+py+0Po5yUFQA7"/>
            <iframe  class="projets__clip"src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Ffanny.joachim%2Fvideos%2F10206441224090349%2F&width=500" width="1140" height="703" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
          </div>
        </section>
      </div>
      <div class="projets__participate">
        <div class="projets__participate-bloc">
          <span class="projets__citation"><?= get_field('projets__text-citation'); ?></span>
          <a class="projets__link" href="<?php the_permalink(35); ?>" title="Vers la page Voyages"><?= __('Voyage avec nous','ma'); ?></a>
        </div>
      </div>
      <div class="projets__bloc">
        <section class="projets__futur">
          <h4 class="projets__futur-title" aria-level="4" role="heading"><?= __('Notre futur projet','ma'); ?></h4>
          <p class="projets__futur-text"><?= get_field('projets__text-futur'); ?></p>
          <a class="bloc-header__button" href="<?php the_permalink(72); ?>" title="Vers la page Dons"><span class="bloc-header__span"><?= __('Faites un don', 'ma'); ?></span></a>
        </section>
        <section class="projets__realize">
          <h3 class="projets__title" aria-level="4" role="heading"><?= __('Nos projets réalisés', 'ma'); ?></h3>
          <div class="projets__figure-realize">

            <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
            <div class="projets__type">
              <?php $singleProjet = get_field('single__image-projet'); ?>
              <figure class="projets__realize-figure">
                <?php if( !empty($singleProjet) ): ?>
                  <?php $size = 'thumb-project';
                        $thumb = $singleProjet['sizes'][ $size ]; ?>
                  <img class="projets__realize-img" src="<?= $thumb; ?>" width="500" height="331" alt="<?= $singleProjet['alt']; ?>" />
                <?php endif; ?>

              </figure>
              <div class="projets__realize-opacity">
                <h4 class="projets__realize-title" aria-level="4" role="heading"><?php the_title(); ?></h4>
                <p class="projets__realize-date"><?= get_field('single__text-duree'); ?></p>
              </div>
              <a class="projets__realize-link" href="<?php the_permalink(); ?>" title="Vers la page du projet"></a>
            </div>
            <?php endwhile; endif; ?>

          </div>
        </section>
      </div>
    </div>

    <?php get_footer(); ?>
