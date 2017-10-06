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
				<img class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Manuseio de kits data certa logistica.jpg"; ?>" alt="manuseio-de-kits"><br><br>
			<h1>Fulfillment - Alta performance em montagem e embalagem</h1>
			<p>
				A Data Certa Logística oferece soluções completas de Fulfillment.
			</p>
			<p>Alta performance em <strong>montagem e embalagem de kits promocionais, de mídia, de boas vindas e brindes com dados variáveis.</strong><br>
			Operações dedicadas de manuseio em ambientes segregados e monitorados.</p>

			<p>Os materiais promocionais, didáticos, insumos gráficos (brindes, folhetos, catálogos, banners etc) tem como característica própria uma alta rotatividade e diversidade de estoque.</p>

			<p>Através de um sistema com acesso pela internet, o cliente pode, de qualquer lugar,solicitar retiradas do estoque (picking) acompanhar em tempo real a posição do seu estoque, solicitar manuseios envolvendo diversos ítens, embalagens específicas, emitir relatórios etc.
			</p>

			<p>Os pedidos de distribuição são prontamente atendidos com a separação dos materiais nas quantidades solicitadas, embalados adequadamente de acordo com o tipo de produto e expedidos para entregas domiciliares ou movimentação entre armazens.</p>
			
			<p>Seja qual for a necessidade de sua empresa, nós podemos ajudar com soluções sob medida. </p>
			<p>Entre em contato conosco, estamos prontos para atender sua empresa!</p>
			<?php get_template_part( 'template-parts/quer-saber-mais' ); ?>
		</div>
	</div>
</section>


<?php get_footer(); ?>
