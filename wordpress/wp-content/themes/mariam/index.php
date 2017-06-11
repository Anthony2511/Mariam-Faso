<?php
/*
Template Name: Page d’accueil
*/
; ?>

<?php include('head.php'); ?>

<body>
  <h1 class="hidden" aria-level="1" role="heading"><?= __('Mariam Faso','ma'); ?></h1>
	<?php include('navigation.php'); ?>
	<?php include('header-home.php'); ?>

	<section class="who">
		<h3 class="who__title" aria-level="3" role="heading"><?= __('Qui sommes nous ?','ma'); ?></h3>
		<p class="who__text"><?= get_field('home__text-who'); ?></p>
		<a class="who__link" href="<?= the_permalink(8);?>" title="Vers la page A Propos"><?= __('En savoir plus','ma'); ?></a>
	</section>
	<div class="projet">
		<section class="projet__left">
			<h3 class="projet__title" aria-level="3" role="heading"><?= __('Participer à notre projet','ma'); ?></h3>
			<p class="projet__text"><?= get_field('home__text-projet'); ?></p>
			<a class="projet__link" href="projets.html" title="Vers la page Projets"><?= __('Participer','ma'); ?></a>
		</section>
		<figure class="projet__bloc-img">
			<img class="projet__img" src="./images/participate-projet.jpg" width="756" height="501" alt="Sixième classe de Burkina Faso">
		</figure>
	</div>
	<div class="event">
    <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
		<section class="event__bloc">
			<h3 class="event__title" aria-level="3" role="heading">Dinner annuel Mariam Faso 24 Mars 2017</h3>
			<span class="event__text"><?= __('Notre prochain évènement','ma'); ?></span>
			<a class="event__link" href="<?php the_permalink(); ?>" title="Vers la page évènements"><?= __('En savoir plus','ma'); ?></a>
		</section>
    <?php endwhile; endif; ?>
	</div>
	<section class="actu">
		<h3 class="actu__title" aria-level="3" role="heading"><?= __('Toute l\'actulité','ma'); ?></h3>
		<div class="actu__bloc-gen">
			<div class="actu__bloc-left">
				<div class="actu__bloc">
					<figure class="actu__bloc-img">
						<img class="actu__img" src="./images/actu1.jpg" width="700" height="464" alt="Lorem ipsum">
					</figure>
					<section class="actu__opacity">
						<h4 class="actu__img-title" aria-level="4" role="heading">Le prochain voyage arrive&hellip;</h4>
					</section>
					<a class="actu__bloc-link" href="projet.html" title="Vers l'article : Le prochain voyage arrive"></a>
				</div>
				<div class="actu__bloc">
					<figure class="actu__bloc-img">
						<img class="actu__img" src="./images/actu1.jpg" width="700" height="464" alt="Lorem ipsum">
					</figure>
					<section class="actu__opacity">
						<h4 class="actu__img-title" aria-level="4" role="heading">Le prochain voyage arrive&hellip;</h4>
					</section>
					<a class="actu__bloc-link" href="actu.html" title="Vers l'article : Le prochain voyage arrive"></a>
				</div>
			</div>
			<div class="actu__bloc-right">
				<div class="actu__bloc">
					<figure class="actu__bloc-img">
						<img class="actu__img-right" src="./images/actu2.jpg" width="600" height="757" alt="Lorem ipsum">
					</figure>
					<section class="actu__opacity">
						<h4 class="actu__img-title" aria-level="4" role="heading">Le prochain voyage arrive&hellip;</h4>
					</section>
					<a class="actu__bloc-link" href="actu.html" title="Vers l'article : Le prochain voyage arrive"></a>
				</div>
			</div>
		</div>
		<a class="actu__link" href="<?php the_permalink(); ?>" title="Vers la page Actualités"><?= __('Voir plus d\'articles','ma'); ?></a>
	</section>
	<section class="partenaires">
		<h3 class="partenaires__title" aria-level="3" role="heading"><?= __('Nos partenaires','ma'); ?></h3>
		<div class="partenaires__bloc">
			<figure class="partenaires__bloc-img">
				<img class="partenaires__img" src="./images/baudouin.png" width="1420" height="834" alt="Logo du partenaire">
			</figure>
			<a class="partenaires__link" href="#" title="Vers le site Partenaires"></a>
		</div>
		<div class="partenaires__bloc partenaires__bloc--margin">
			<figure class="partenaires__bloc-img">
				<img class="partenaires__img" src="./images/baudouin.png" width="1420" height="834" alt="Logo du partenaire">
			</figure>
			<a class="partenaires__link" href="#" title="Vers le site Partenaires"></a>
		</div>
		<div class="partenaires__bloc">
			<figure class="partenaires__bloc-img">
				<img class="partenaires__img" src="./images/baudouin.png" width="1420" height="834" alt="Logo du partenaire">
			</figure>
			<a class="partenaires__link" href="#" title="Vers le site Partenaires"></a>
		</div>
	</section>

	<?php include('footer.php'); ?>
