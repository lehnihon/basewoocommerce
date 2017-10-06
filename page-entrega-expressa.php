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
				<img class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Entrega Expressa Data Certa Logistica.jpg"; ?>" alt="entrega-expressa"><br><br>
				<h1>Entrega Expressa ou Emergencial</h1><br>

				<p>Courier é o serviço de Entrega Expressa da Data Certa Logística, indicado para encomendas e entregas urgentes, que necessitam de máxima precisão e agilidade.
				</p>
				<p>Entrega domiciliar expressa ou emergencial nos estados de São Paulo e Rio de Janeiro.</p>
				<p>Acompanhanhamos pessoalmente a carga do local de coleta até a porta do destinatário, tendo o embarque imediato. 
				<br>O serviço de Courier é ideal para lojas virtuais e empresas de todos os portes.
				</p>

				<p><strong>Aplicativo Mobidata</strong>
				Você pode monitorar em tempo real suas entregas através aplicativo Mobidata, nosso próprio aplicativo de rastreamento e monitoramento de envios.</p>
				<p>É o serviço mais rápido de entregas expressas do mercado!</p>
				<p>Entre em contato conosco, estamos prontos para atender sua empresa!</p>

				<?php get_template_part( 'template-parts/quer-saber-mais' ); ?>
				
		</div>
	</div>
</section>

<?php get_footer(); ?>
