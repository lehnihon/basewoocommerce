<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package site
 */

get_header(); ?>

<?php get_template_part( 'template-parts/breadcrumbs' ); ?>

<section id="mobidata">
	<div class="container">
		<div class="row">
			<h1 class="titulo-linha">Mobidata</h1>
			<div class="separador"></div>
		</div><br>
		<div class="row">
			<div class="col-md-7 text-left">
				<p class="mobi-destaque">
					Mobidata é um aplicativo de monitoramento de encomendas em tempo real. Com rastreamento geolocalizador, é possível saber onde está a encomenda.				
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-7 text-left">
				O aplicativo mostra os pontos exatos de latitude e longitude. Assim, não existe risco de perda ou de entregas em locais errados. <br>
				As encomendas rastreadas com o nosso sistema têm a garantia de uma entrega segura e rápida.					
				<ul class="mobi-vantagens">
					<li class="clearfix"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/checkmark.png"; ?>" /><div class="check-desc">Baixa em tempo real</div></li>
					<li class="clearfix"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/checkmark.png"; ?>" /><div class="check-desc">Digitalização em tempo real</div></li>
					<li class="clearfix"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/checkmark.png"; ?>" /><div class="check-desc">Prova incontestável da visita através de foto do domicílio</div></li>
					<li class="clearfix"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/checkmark.png"; ?>" /><div class="check-desc">Rastreamento do entregador</div></li>
				</ul>
				<h2 class="mobi-destaque">Tracking online</h2>
				<p>
					O aplicativo provê a cada 1 minuto dados de geoposicionamento do entregador, hora da parada para entrega, número da nota entregue, nome do destinatário (pesso física ou jurídica) sobre plataforma Google Maps.
				</p>
				<h2 class="mobi-destaque">Baixa remota</h2>
				<p>
					Uma vez realizada a entrega, o sistema permite o reporte da informação no aplicativo sob status "Entregue e Digitalizado". Neste momento o Mobidata atualiza o status e disponibiliza a imagem do PDO devidamente preenchido.
				</p><br>
				<a href="https://play.google.com/store/apps/details?id=br.com.mobidata" target="_blank"><img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/btn-playstore.png"; ?>" /></a><br>
			</div>
			<div class="col-md-5">
				<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/mobi-cel.png"; ?>" />
			</div>
		</div>
	</div><br><br>
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="videoWrapper">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/m8ibxHaGcPw?rel=0" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
	</div>		
</section>

<?php get_footer(); ?>
