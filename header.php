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
<link rel="shortcut icon" type="image/png" href="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Data Certa Logistica Icone.png"; ?>" />
<?php wp_head(); ?>
<script>

new WOW().init();
</script>
</head>

<body>
<div id="page">
	<section id="header">
		<header>
			<div class="container">
				<div class="row">
					<div class="col-md-2 box clearfix">
			            <span class="cor-amarelo">Operação: </span>
			            <span class="texto-branco">11 <strong>2061-3138</strong></span>
			          </div>
			          <div class="col-md-4 box clearfix">
			            <span class="cor-amarelo">Comercial: </span>
			            <span class="texto-branco">11 <strong>96321-7360</strong></span>
			          </div>
					<div class="col-md-3 box clearfix">
						<span class="cor-amarelo">Redes sociais </span>	
						<ul class="redes_sociais_header clearfix">
			              <li class="youtube"><a target="_blank" href="https://www.youtube.com/channel/UCb42k7qXDCeQSI7LvPDc8ZA"></a></li>
			              <li class="instagram"><a target="_blank" href="https://www.instagram.com/datacerta"></a></li>
			              <li class="twitter"><a target="_blank" href="https://twitter.com/datacertalog"></a></li>
			              <li class="facebook"><a target="_blank" href="https://www.facebook.com/datacertalogistica"></a></li>
			              <li class="linkedin"><a target="_blank" href="https://www.linkedin.com/company-beta/10804304"></a></li>
						</ul>
					</div>
					<div class="col-md-3 box clearfix header-login">
						<a href="http://34.200.50.59" class="btn-login pull-right">LOGIN</a>
						<span class="cor-amarelo pull-right">Acesse com seu login </span>
					</div>
					<div class="col-md-3 box clearfix header-login-responsive">
						<span class="cor-amarelo">Acesse com seu login </span>
						<a href="http://34.200.50.59" class="btn-login pull-left">LOGIN</a>
					</div>
				</div>
			</div>
		</header>
		<nav>
			<div class="container">
				<div class="row">
					<div class="col-md-3 text-left">
						<a href="<?php echo home_url( '/' ); ?>"><img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/logo-top.png"; ?>" /></a>
					</div>
					<div class="col-md-9">
						<li class="<?php echo esc_attr( $class ); ?>">
				
			</li>
			<li>
				<?php the_widget( 'WC_Widget_Cart', 'title=' ); ?>
			</li>
					</div>					
				</div>
			</div>
		</nav>
	</section>
