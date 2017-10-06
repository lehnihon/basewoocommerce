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
				<img class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Transporte de Cargas Data Certa Logistica.jpg"; ?>" alt="transporte-de-cargas"><br><br>
				<h1>Transporte de Cargas</h1><br>
				<p>A Data Certa Logística atua com os serviços de <strong>Transporte de Cargas Completas ou Transporte de Cargas Fracionadas</strong>, embaladas ou não.</p>

				<p>Atendimento dedicado ponto a ponto nas regiões Sul, Sudeste e Centro Oeste e distribuição em mais de 300 localidades nos 
				estados de São Paulo e Rio de Janeiro.</p>
				<p>Nosso foco é o atendimento à empresas de todos os tamanhos. Seja qual for a necessidade de sua empresa, nós podemos 
				ajudar com soluções sob medida em <strong>transporte de cargas.</strong></p>

				<p>
					<strong>Estrutura da Data Certa Logística para sua empresa:</strong>
				</p>

				<p>A Data Certa possui uma frota própria de caminhões e veículos utilitários, além de contar com um centro de armazenamento 
				em local estratégico. Tudo isso para a sua carga chegar ao destino certo e na data certa.</p>

			<?php get_template_part( 'template-parts/quer-saber-mais' ); ?>

		</div>
	</div>
</section>

<?php get_footer(); ?>
