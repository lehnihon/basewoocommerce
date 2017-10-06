<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package site
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
<script>
new WOW().init();
</script>
</head>

<section id="simulacao">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<img class="e-claro wow fadeInLeft" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo-top.png"; ?>" /><br><br><br>
				<h1 class="small wow fadeInLeft">Com a Data Certa sua empresa não vai parar. Reunimos todas as soluções de logística para o seu negócio</h1>
				<div class="box wow fadeIn">
					<?php echo do_shortcode('[contact-form-7 id="1716" title="Simulação"]'); ?>
				</div>
			</div>
		</div>
	</div>
</section>
