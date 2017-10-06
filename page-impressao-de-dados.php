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
				<img class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Impressao de dados variaveis data certa logistica.jpg"; ?>" alt="logistica-reversa"><br><br>
				<h1>Impressão de Dados Variáveis</h1><br>
				<p>Atendimento dedicado ponto a ponto com distribuição em mais de 300 localidades nos estados de São Paulo e Rio de Janeiro.</p>
				
				<p>A solução da <strong>Data Certa Logística</strong> é voltada para impressão com conteúdo variável. O objetivo é otimizar a produção de 
				impressão e fluxos de trabalho, permitindo a criação de aplicações e rotinas customizadas voltadas à impressão de faturas, 
				cobranças, informativos, boletos de cobrança, etiquetas e malas diretas utilizados para comunicação promocional.</p>
				
				<p>Nessa solução, é possível gerar documentos para cada necessidade, desde uma simples mala direta até formulários com 
				dados dinâmicos de acordo com as regras do negócio. </p>
				
				<p><strong>Impressão de Dados Variáveis:</strong><br><br>
				- Etiquetas<br>
				- Informativos<br>
				- Boletos<br>
				- Malas Diretas
				</p>
				
				<p>Os documentos gerados podem conter condições e regras incorporadas de forma dinâmica. Esta aplicação torna possível 
				adicionar códigos de barra, gráficos, logos, números de página, mensagens de marketing direcionadas ou ainda, controles de
				inserções de envelopes, todos baseados nas informações encontradas nos dados ou no documento original formatado.
</p>
				<p>A solução de <strong>Impressão de Dados Variáveis</strong> da Data Certa, possibilita a transformação dos documentos comuns em veículos
				de propaganda, compensando ao máximo os gastos investidos em postagem e criando uma comunicação diferenciada com 
				seus clientes.</p>
				
				<?php get_template_part( 'template-parts/quer-saber-mais' ); ?>
		</div>
	</div>
</section>


<?php get_footer(); ?>
