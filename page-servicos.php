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

<section id="home-solucoes">
	<div class="container">
		<div class="row fadeInUp wow">
			<h1 class="titulo-linha">O que a Data Certa pode fazer pela sua empresa</h1>
			<div class="separador"></div>
			<p><strong>Conheça nossas soluções em logística e veja como podemos contribuir para o sucesso do seu negócio</strong></p>
		</div><br/><br/>
		<div class="row fadeIn wow">
			<div class="col-md-3">
				<a class="foto" href="<?php echo home_url( '/' )."logistica-reversa"; ?>">
					<img class="img-responsive home-image" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoes1.jpg"; ?>" />
					<div class="middle">
						<div class="text"><img alt="lupa" class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/lupab.png"; ?>" /></div>
					</div>
				</a>
				<h3>
					Logística Reversa
				</h3>
				<a href="<?php echo home_url( '/' )."logistica-reversa"; ?>">saiba mais ></a>
			</div>
			<div class="col-md-3">
				<a class="foto" href="<?php echo home_url( '/' )."transporte-de-cargas"; ?>">
					<img class="img-responsive home-image" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoes2.jpg"; ?>" />
					<div class="middle">
						<div class="text"><img alt="lupa" class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/lupab.png"; ?>" /></div>
					</div>
				</a>
				<h3>
					Transporte de Cargas
				</h3>
				<a href="<?php echo home_url( '/' )."transporte-de-cargas"; ?>">saiba mais ></a>
			</div>
			<div class="col-md-3">
				<a class="foto" href="<?php echo home_url( '/' )."logistica-armazenagem"; ?>">
					<img class="img-responsive home-image" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoes3.jpg"; ?>" />
					<div class="middle">
						<div class="text"><img alt="lupa" class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/lupab.png"; ?>" /></div>
					</div>
				</a>
				<h3>
					Armazenagem
				</h3>
				<a href="<?php echo home_url( '/' )."logistica-armazenagem"; ?>">saiba mais ></a>
			</div>
			<div class="col-md-3">
				<a class="foto" href="<?php echo home_url( '/' )."entrega-expressa"; ?>">
					<img class="img-responsive home-image" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoes4.jpg"; ?>" />
					<div class="middle">
						<div class="text"><img alt="lupa" class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/lupab.png"; ?>" /></div>
					</div>
				</a>
				<h3>
					Entrega Expressa
				</h3>
				<a href="<?php echo home_url( '/' )."entrega-expressa"; ?>">saiba mais ></a>
			</div>
		</div><br>
		<div class="row fadeIn wow">
			<div class="col-md-3">
				<a class="foto" href="<?php echo home_url( '/' )."impressao-de-dados"; ?>">
					<img class="img-responsive home-image" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoes5.jpg"; ?>" />
					<div class="middle">
						<div class="text"><img alt="lupa" class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/lupab.png"; ?>" /></div>
					</div>
				</a>
				<h3>
					Impressão de Dados
				</h3>
				<a href="<?php echo home_url( '/' )."impressao-de-dados"; ?>">saiba mais ></a>
			</div>
			<div class="col-md-3">
				<a class="foto" href="<?php echo home_url( '/' )."manuseio-de-kits"; ?>">
					<img class="img-responsive home-image" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoes6.jpg"; ?>" />
					<div class="middle">
						<div class="text"><img alt="lupa" class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/lupab.png"; ?>" /></div>
					</div>
				</a>
				<h3>
					Fullfilment
				</h3>
				<a href="<?php echo home_url( '/' )."manuseio-de-kits"; ?>">saiba mais ></a>
			</div>
			<div class="col-md-3">
				<a class="foto" href="<?php echo home_url( '/' )."digitalizacao-de-documentos"; ?>">
					<img class="img-responsive home-image" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoes7.jpg"; ?>" />
					<div class="middle">
						<div class="text"><img alt="lupa" class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/lupab.png"; ?>" /></div>
					</div>
				</a>
				<h3>
					Digitalização de Documentos
				</h3>
				<a href="<?php echo home_url( '/' )."digitalizacao-de-documentos"; ?>">saiba mais ></a>
			</div>
			<div class="col-md-3">
				<a class="foto" href="<?php echo home_url( '/' )."logistica-pequenas-e-medias-empresas"; ?>">
					<img class="img-responsive home-image" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoes8.jpg"; ?>" />
					<div class="middle">
						<div class="text"><img alt="lupa" class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/lupab.png"; ?>" /></div>
					</div>
				</a>
				<h3>
					Logística para Empresas
				</h3>
				<a href="<?php echo home_url( '/' )."logistica-pequenas-e-medias-empresas"; ?>">saiba mais ></a>
			</div>
		</div><br><br><br>
		<div class="row">
			<div class="col-md-12">
					<h2>Quer saber mais sobre nossas soluções?</h2>
					<h5>Converse com um especialista em logística e veja como podemos te ajudar!</h5><br>
					<div class="tel-botao">
						<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/tel.jpg"; ?>" alt="telefone"><span>11 2061-3138</span>
						<a href="<?php echo home_url( '/' )."orcamento"; ?>" class="btn btn-azulclaro">Calcular Frete</a>
						<a href="<?php echo home_url( '/' )."quero-ser-cliente"; ?>" class="btn btn-azulescuro">Quero ser Cliente</a>
					</div>
			</div>
		</div>
	</div>
</section><br><br><br><br>



<?php get_footer(); ?>
