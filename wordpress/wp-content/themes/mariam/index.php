<?php
/*
Template Name: Page d’accueil
*/
; ?>
<?php include('head.php'); ?>
<body>
  <h1 class="hidden" aria-level="1" role="heading">Mariam Faso</h1>
	<?php include('navigation.php'); ?>
	<?php include('header-home.php'); ?>

	<section class="who">
		<h3 class="who__title" aria-level="3" role="heading">Qui sommes-nous ?</h3>
		<p class="who__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi imperdiet, felis eget pretium condimentum, nisl turpis porta risus, sed iaculis lacus ligula eu augue. Suspendisse id interdum dolor. Integer fermentum a justo a commodo. </p>
		<a class="who__link" href="<?php the_permalink('a-propos');?>" title="Vers la page A Propos">En savoir plus</a>
	</section>
	<div class="projet">
		<section class="projet__left">
			<h3 class="projet__title" aria-level="3" role="heading">Participez à notre projet</h3>
			<p class="projet__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcor, Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed ipsum dolor sit amet, consectetuer adipiscing elit, sed. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt</p>
			<a class="projet__link" href="projets.html" title="Vers la page Projets">Participer</a>
		</section>
		<figure class="projet__bloc-img">
			<img class="projet__img" src="./images/participate-projet.jpg" width="756" height="501" alt="Sixième classe de Burkina Faso">
		</figure>
	</div>
	<div class="event">
		<section class="event__bloc">
			<h3 class="event__title" aria-level="3" role="heading">Dinner annuel Mariam Faso 24 Mars 2017</h3>
			<span class="event__text">Notre prochain évènement</span>
			<a class="event__link" href="events.html" title="Vers la page évènements">En savoir plus</a>
		</section>
	</div>
	<section class="actu">
		<h3 class="actu__title" aria-level="3" role="heading">Toute l'actualité</h3>
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
		<a class="actu__link" href="actu.html" title="Vers la page Actualités">Voir plus d'articles</a>
	</section>
	<section class="partenaires">
		<h3 class="partenaires__title" aria-level="3" role="heading">Nos partenaires</h3>
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
