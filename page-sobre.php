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

<section id="sobre">
	<div class="container">
		<div class="row">
			<h1 class="titulo-linha">Sobre a Data Certa Logística</h1>
			<div class="separador"></div>
		</div>
		<div class="row"><br>
			<div class="col-md-7 text-left">
				<p class="sobre-destaque">
					Vivência acumulada de mais de 20 anos na gestão da cadeia logística, e-commerce, movimentação e transferência de cargas sensíveis, 
					manuseio e entrega de produtos valorados (benefícios), courier, cross-docking, logística reversa, fulfillment e armazenagem.					
				</p>
				<p>
					<strong>A Data Certa surgiu com o objetivo de oferecer soluções de logística que tornem mais simples a vida da sua empresa, seja de pequeno ou grande porte.</strong>
				</p>
				<p>
					Com nossas soluções em manuseio, transporte, courier, logística reversa, impressão com dados variáveis e gestão postal, seus prazos são levados a sério.
				</p>
				<p>
					<strong>Interligando bairros, cidades e estados, a Data Certa oferece mais uma ferramenta de gerenciamento, rastreamento e baixa remota que permite a você um pleno acompanhamento das etapas 
					do processo no menor tempo de trânsito.</strong>
				</p>
				<p>
					Com tecnologia, excelência no atendimento e o melhor custo-benefício, a Data Certa cuida do gerenciamento completo de toda a cadeia produtiva do seu produto do início ao destino final.
				</p>
			</div>
		</div><br>
		<div class="row text-left">
			<img class="e-cinza img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/depoimento.png"; ?>" />			
		</div>		
	</div>
</section>

<section id="sobre-info">
	<div class="container">
		<div class="row">
			<h2>Informações interessantes sobre nós</h2>
		</div><br>		
		<div class="row">
			<div class="col-md-4">
				<img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/sobre-empilhadeira.png"; ?>" />
				<h2 class="sobre-num">500.000</h2>
				<div class="sobre-desc">Volumes entregues de encomendas por ano.</div>
			</div>
			<div class="col-md-4">
				<img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/sobre-caminhao.png"; ?>" />
				<h2 class="sobre-num">4.000km</h2>
				<div class="sobre-desc">Percorridos para realização das entregas por dia.</div>

			</div>
			<div class="col-md-4">
				<img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/sobre-graficos.png"; ?>" />
				<h2 class="sobre-num">99,7%</h2>
				<div class="sobre-desc"><strong>SLA</strong> Prazo de entrega.</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
