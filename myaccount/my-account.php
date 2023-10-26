<?php
/**
 * My Account page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/my-account.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

defined( 'ABSPATH' ) || exit;

/**
 * My Account navigation.
 *
 * @since 2.6.0
 */
?>

<div class="flex flex-col justify-center items-center">
	<section class="flex justify-center items-center gap-8 flex-wrap m-6">
		<figure >
			<ul class="flex justify-center items-center flex-wrap flex-col">
				<li class="p-2"><img class="rounded-full" src="<?php echo get_template_directory_uri(); ?>/assets/profil.png" alt=""></li>
				<li class="p-2"><p class="font-bold">Francine Ducoux</p></li>
				<li class="p-2"><a class="bg-black text-white p-2 rounded-full">Modifier son profil</a></li>
			</ul>
			</figure>
			<figcaption class="flex flex-col justify-center items-center">
			<h2 class="font-bold text-4xl mb-8">Vos informations</h2>
			<ul class="gap-8">
				<li class="p-1"><p>adresses e-mail :   FrancineDucoux@gmail.com</p></li>
				<li class="p-1"><p>Femme</p></li>
				<li class="p-1"><p>Nom :   Ducoux</p></li>
				<li class="p-1"><p>Prenom :   Francine</p></li>
				<li class="p-1"><p>Date de naissance   : 19/09/1964</p></li>
				<li class="p-1"><p>Adresse :   Arras, 17 rue du moulin</p></li>
				<li class="p-1"><p>Code postal :   61500</p></li>
				<li class="p-1"><p>Téléphone:   06 85 89 62 78</p></li>

			</ul>
    	</figcaption>
  </section>

  <article>

<div class="grid gap-2 items-center w-full">
	<h1 class="font-light text-3xl">Historique d’achat</h1>

	<div class="w-full p-1">
		<p class="text w-full">C’est ici que sont répertoriés tous vos achats dans la boutique en ligne “Le Manège à Bijoux” avec notamment vos dernières commandes enregistrées, livrées ou envoyées.<br>Le numéro de commande et la date de la commande est indiqué ainsi que la date d’achat de votre produit pour garder un œil sur sa livraison. 
		</p>
	</div>

<!-- Section title -->
<div class="m-5">      
	<p class="font-bold text-xl p-2">Vos dernières commandes</p>
  </div>

  <hr class="border-b-2 border-border-b">

  <!-- LISTE DES CARDS ACHAT -->
  <ul class="grid gap-5 mt-5">

	<li class="flex justify-center md:justify-start">
		<!-- CARD n°1 -->
		<div class="w-max border-2 m-2 rounded border-border">

			<div class="md:flex items-center gap-5 md:gap-10 p-2">

					<div class="grid">

						<figure class=""><img class="w-64   border-4 border-border" src="<?php echo get_template_directory_uri(); ?>../assets/Bague=argent.png" alt=""></figure>

						<figcaption class=""><h1 class="w-full text-center font-medium text-xl hover:text-text-hover">Bague Or</h1></figcaption>

					</div>

						<ul class="text-center w-full md:w-max">
							<li class="md:w-max"><p class="">Numéro de commande : 23456145</p></li>

							<li class="md:w-max"><p class="">Date de commande :</p></li>

							<li class="md:w-max"><p class="">Statut : En cours</p>
							</li>

							<li class="md:w-max"><p class="">Mis à jour le : 17/08/2023</p></li>
						</ul>

				</div>

			<div class="flex justify-between">      
				<p class="font-bold text-xl p-2">Total :</p>

				<p class="font-bold text-xl p-2 text-text-button">80€</p>
			  </div>

		</div>
	</li>

	<li class="flex justify-center md:justify-start">
		<!-- CARD n°2 -->
		<div class="w-max border-2 m-2 rounded border-border">

			<div class="md:flex items-center gap-5 md:gap-10 p-2">

					<div class="grid">

						<figure class=""><img class="w-64   border-4 border-border" src="<?php echo get_template_directory_uri(); ?>../assets/Bague=argent.png" alt=""></figure>

						<figcaption class=""><h1 class="w-full text-center font-medium text-xl hover:text-text-hover">Bague Or</h1></figcaption>

					</div>

						<ul class="text-center w-full md:w-max">
							<li class="md:w-max"><p class="">Numéro de commande : 23456145</p></li>

							<li class="md:w-max"><p class="">Date de commande :</p></li>

							<li class="md:w-max"><p class="">Statut : En cours</p>
							</li>

							<li class="md:w-max"><p class="">Mis à jour le : 17/08/2023</p></li>
						</ul>

				</div>

			<div class="flex justify-between">      
				<p class="font-bold text-xl p-2">Total :</p>

				<p class="font-bold text-xl p-2 text-text-button">80€</p>
			  </div>

		</div>
	</li>

	<li class="flex justify-center md:justify-start">
		<!-- CARD n°3 -->
		<div class="w-max border-2 m-2 rounded border-border">

			<div class="md:flex items-center gap-5 md:gap-10 p-2">

					<div class="grid">

						<figure class=""><img class="w-64   border-4 border-border" src="<?php echo get_template_directory_uri(); ?>../assets/Bague=argent.png" alt=""></figure>

						<figcaption class=""><h1 class="w-full text-center font-medium text-xl hover:text-text-hover">Bague Or</h1></figcaption>

					</div>

						<ul class="text-center w-full md:w-max">
							<li class="md:w-max"><p class="">Numéro de commande : 23456145</p></li>

							<li class="md:w-max"><p class="">Date de commande :</p></li>

							<li class="md:w-max"><p class="">Statut : En cours</p>
							</li>

							<li class="md:w-max"><p class="">Mis à jour le : 17/08/2023</p></li>
						</ul>

				</div>

			<div class="flex justify-between">      
				<p class="font-bold text-xl p-2">Total :</p>

				<p class="font-bold text-xl p-2 text-text-button">80€</p>
			  </div>

		</div>
	</li>
  </ul>
</article>

</div>
