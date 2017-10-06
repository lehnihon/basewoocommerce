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

<section id="solucoes-detalhes">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<?php get_template_part( 'template-parts/solucoes-menu' ); ?>
			</div>
			<div class="col-md-9">
				<img class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Armazenagem logistica data certa logistica.jpg"; ?>" alt="logistica-armazenagem"><br><br>
			<h1>Logística de Armazenagem</h1>

			<p>A Data Certa Logística oferece <strong>soluções completas de Armazenagem</strong>, que engloba desde o recebimento da mercadoria, armazenagem, movimentação, separação e demais serviços complementares, para que os produtos estejam prontos para expedição, além de garantir a qualidade e segurança.
			</p>

			<p>Custódia de cargas em <strong>ambiente seguro</strong>, monitorado, coberto, dotado de CFTV, controle de acesso e sob gerenciamento de WMS com levantamento cíclico de inventário.
			</p>

			<p>A Data Certa dispõe de uma área coberta para armazenagem e pátio para estacionamento e manobra. O local é amplo, seguro e de fácil acesso para qualquer tamanho de carro ou caminhão.</p>

			<p>Seja qual for a necessidade de sua empresa, nós podemos ajudar com soluções sob medida. Entre em contato conosco, estamos prontos para atender sua empresa!</p>

			<?php get_template_part( 'template-parts/quer-saber-mais' ); ?>
		</div>
	</div>
</section>


<?php get_footer(); ?>
