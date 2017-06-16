<header class="header-page">
  <section class="fil-ariane">
    <h2 class="hidden" aria-level="2" role="heading"><?= __('Fil d\'ariane','ma'); ?></h2>

    <?php if (is_single()): ?>
        <ul class="fil-ariane__navigation">
          <li class="fil-ariane__ariane-item"><a class="fil-ariane__ariane-home" href="<?= get_home_url(); ?>" title="Vers la page d'accueil"><span>Accueil</span></a></li>
          <?php if(is_singular('voyages')): ?>
          <li class="fil-ariane__ariane-item"><a class="fil-ariane__ariane-link" href="<?php the_permalink(35); ?>" title="Vers la page Voyages"><?= __('Voyages','ma'); ?></a></li>
          <?php endif; ?>
          <?php if(is_singular('projets')): ?>
          <li class="fil-ariane__ariane-item"><a class="fil-ariane__ariane-link" href="<?php the_permalink(111); ?>" title="Vers la page Voyages"><?= __('Projets','ma'); ?></a></li>
          <?php endif; ?>
          <?php if(is_singular('evenements')): ?>
          <li class="fil-ariane__ariane-item"><a class="fil-ariane__ariane-link" href="<?php the_permalink(190); ?>" title="Vers la page Evenements"><?= __('Evenements','ma'); ?></a></li>
          <?php endif; ?>
          <?php if(is_singular('actualités')): ?>
          <li class="fil-ariane__ariane-item"><a class="fil-ariane__ariane-link" href="<?php the_permalink(211); ?>" title="Vers la page Actualités"><?= __('Actualités','ma'); ?></a></li>
          <?php endif; ?>
          <li class="fil-ariane__ariane-item"><a class="fil-ariane__ariane-link" href="<?php the_permalink(); ?>" title="Vers le voyage : <?php the_title(); ?>"><?php the_title(); ?></a></li>
        </ul>
        <?php else : ?>
          <ul class="fil-ariane__navigation">
            <li class="fil-ariane__ariane-item"><a class="fil-ariane__ariane-home" href="<?= get_home_url(); ?>" title="Vers la page d'accueil"><span>Accueil</span></a></li>
            <li class="fil-ariane__ariane-item"><a class="fil-ariane__ariane-link" href="<?php the_permalink(); ?>" title="Vers la page <?php the_title(); ?>"><?php the_title(); ?></a></li>
          </ul>
        <?php endif; ?>

  </section>
  <section class="header-page__bloc-header">
    <h2 class="header-page__title" aria-level="2" role="heading"><?php the_title(); ?></h2>
  </section>
</header>
