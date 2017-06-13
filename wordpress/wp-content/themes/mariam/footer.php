<footer class="footer">
  <section class="footer__container">
    <h3 class="hidden" aria-level="3" role="heading"><?= __('Informations supplémentaires','ma'); ?></h3>
    <section class="footer__bloc">
      <h4 class="footer__title" aria-level="4" role="heading"><?= __('Aidez-nous','ma'); ?></h4>
      <a class="footer__link-button" href="<?php the_permalink(72); ?>" title="Vers la page Dons"><span class="footer__link-span"><?= __('Faites un don','ma'); ?></span></a>
    </section>
    <section class="footer__bloc">
      <h4 class="footer__title" aria-level="4" role="heading"><?= __('Infos','ma'); ?></h4>
      <a class="footer__link" href="mailto:info@mariam.be" title="Envoyez un mail">info@mariam.be</a>
      <a class="footer__link" href="tel:+32475568535" title="Téléphoner">+ 32 475 56 85 35</a>
    </section>
    <section class="footer__bloc">
      <h4 class="footer__title" aria-level="4" role="heading"><?= __('Contactez-nous','ma'); ?></h4>
      <a class="footer__link footer__link--email" href="<?php the_permalink(89); ?>" title="Vers la page Contact"><?= __('Envoyez-nous un mail','ma'); ?></a>
      <a class="footer__link" href="<?php the_permalink(83); ?>" title="Vers la page FAQ"><?= __('FAQ','ma'); ?></a>
    </section>
  </section>
</footer>
<div class="footer__copyright-bloc">
  <span class="footer__copyright">&copy; <?= __('Mariam Faso - Tous droits réservés. Design by','ma'); ?> <a class="footer__portfolio" href="beaumecker.be"><?= __('Anthony Beaumecker','ma'); ?></a></span>
</div>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="<?= $scripts . 'nav.js'; ?>"></script>
<script src="<?= $scripts . 'no-js.js'; ?>"></script>
<script src="<?= $scripts . 'lightGallery.js'; ?>"></script>
<script src="<?= $scripts . 'lightGalleryConfig.js'; ?>"></script>
</body>
</html>
