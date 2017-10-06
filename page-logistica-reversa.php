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
				<img class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Logistica reversa data certa logistica.jpg"; ?>" alt="logistica-reversa"><br><br>
				<h1>Logística Reversa</h1><br>
				<p>A Data Certa é especialista em Logística Reversa.</p>
				
				<p><strong>Logística Reversa</strong>, o termo refere-se ao papel da logística no retorno de produtos, redução na fonte, reciclagem, substituição 
				de materiais, reuso de materiais, disposição de resíduos, reforma, reparação e remanufatura. Prints color em papel ou pvc de 
				peças com aplicação de dados do cliente como nome, endereço, códigos etc.</p>
				
				<p>As atividades de <strong>Logística Reversa</strong> variam desde a simples revenda de um produto até processos que abrangem inúmeras 
				etapas como: coleta, inspeção, separação, levando a uma remanufatura ou reciclagem. 
</p>
				
				<p>A  <strong>Logística Reversa</strong> envolve todas as operações relacionadas à reutilização de produtos e materiais, na busca de uma 
				recuperação sustentável. Como procedimento logístico, trata-se também do fluxo de materiais que retornam por algum motivo,
				devoluções de clientes, retorno de embalagens, retorno de produtos e/ou materiais para atender à legislação etc. </p>
				
				<p>A Logística Reversa não trata apenas do fluxo físico de produtos, mas também de todas as informações envolvidas nesse 
				processo.</p>
				
				<p>Seja qual for a necessidade de sua empresa, nós podemos ajudar com soluções sob medida.</p>
				<?php get_template_part( 'template-parts/quer-saber-mais' ); ?>
		</div>
	</div>
</section>



<?php get_footer(); ?>
