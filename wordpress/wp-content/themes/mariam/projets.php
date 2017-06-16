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
  <h1 class="hidden" aria-level="1" role="heading"><?php the_title(); ?></h1>
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
            <?php $projetGalerie = get_field('projets__text-image-one'); ?>
            <figure class="projets__bloc-img">
              <?php if( !empty($projetGalerie) ): ?>
                <?php $size = 'thumb-project';
                      $thumb = $projetGalerie['sizes'][ $size ]; ?>
                <img class="projets__picture-img" src="<?= $thumb; ?>" width="500" height="331" alt="<?= $projetGalerie['alt']; ?>" />
              <?php endif; ?>
            </figure>
            <?php $projetGalerie = get_field('projets__text-image-two'); ?>
            <figure class="projets__bloc-img">
              <?php if( !empty($projetGalerie) ): ?>
                <?php $size = 'thumb-project';
                      $thumb = $projetGalerie['sizes'][ $size ]; ?>
                <img class="projets__picture-img" src="<?= $thumb; ?>" width="500" height="331" alt="<?= $projetGalerie['alt']; ?>" />
              <?php endif; ?>
            </figure>
            <?php $projetGalerie = get_field('projets__text-image-three'); ?>
            <figure class="projets__bloc-img">
              <?php if( !empty($projetGalerie) ): ?>
                <?php $size = 'thumb-project';
                      $thumb = $projetGalerie['sizes'][ $size ]; ?>
                <img class="projets__picture-img" src="<?= $thumb; ?>" width="500" height="331" alt="<?= $projetGalerie['alt']; ?>" />
              <?php endif; ?>
            </figure>
          </div>
          <a class="projets__galerie-link" href="<?php the_permalink(145); ?>"><?= __('Voir notre galerie','ma'); ?></a>
        </section>
        <section class="projets__video">
          <h3 class="projets__title" aria-level="3" role="heading"><?= __('Notre dernier voyage en vidéo','ma'); ?></h3>
          <div class="projets__bloc-clip">
            <?php $voyageVideo = get_field('projets__image-voyage'); ?>
            <?php if( !empty($voyageVideo) ): ?>
              <?php $size = 'thumb-video';
                    $thumb = $voyageVideo['sizes'][ $size ]; ?>
              <img class="iframe-ratio" src="<?= $thumb; ?>" width="1098" height="615" alt="<?= $voyageVideo['alt']; ?>" />
            <?php endif; ?>
            <?= get_field('projets__video-voyage'); ?>
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
          <h3 class="projets__futur-title" aria-level="3" role="heading"><?= __('Notre futur projet','ma'); ?></h3>
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
              <a class="projets__realize-link" href="<?php the_permalink(); ?>" title="Vers la page du projet : <?php the_title(); ?>"><span><?= __('Vers la page du projet', 'ma'); ?></span></a>
            </div>
            <?php endwhile; endif; ?>

          </div>
        </section>
      </div>
    </div>

    <?php include('footer.php'); ?>
