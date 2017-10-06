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
				<img class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Digitalizacao de documentos data certa logistica.jpg"; ?>" alt="logistica-reversa"><br><br>
				<h1>Digitalização de documentos com Certificação Digital</h1><br>
				<p>Todos os dias uma grande quantidade de documentos são produzidos pela sua empresa. Esses documentos são impressos, enviados, armazenados e constantemente procurados, e isso ocupa uma grande parte do tempo e recursos da sua empresa.</p>
				<p>Por esse motivo, vale a pena investir no processo de <strong>digitalização de documentos com certificação digital.</strong><br>
				A Data Certa desenvolve soluções simples, práticas e seguras para digitalizar e armazenar todos os seus documentos.
				</p>
				<p>Primeiro, escaneamos todos os seus documentos, e aqueles milhares de papéis se tornam arquivos digitais. Em seguida, todos esses dados são organizados, criptografados <strong>e armazenados no nosso servidor na nuvem.</strong>
				</p>
				<p>Com o nosso sistema de gestão de documentos, com apenas um clique, você consegue acessar seus dados de qualquer computador, tablet e celular que estejam conectados a internet.</p>

				<p><strong>Benefícios da digitalização de documentos:</strong>
				<br>- Você acessa seus documentos digitais de qualquer dispositivo
				<br>- Sem papel, econômico e sustentável
				<br>- Envia, assina, armazena de maneira simples e rápido
				<br>- Dados criptografados em nosso servidor na nuvem
				<br>- Economia de tempo e recursos
				<br>- Válidade Jurídica
				<br>- Autenticidade</p>

				<p>Na Data Certa, você também tem uma grande vantagem, todos os seus documentos digitalizados tem validade jurídica, 
				estando em conformidade com a legislação brasileira, ou seja, todos os documentos digitalizados passam por um processo 
				de <strong>certificação digital.</strong>
				</p>

				<p><strong>Cada documento digitalizado ganha um selo que identifica a autenticidade desse documento.</strong></p>

				<p>
				Esse selo contém informações como o endereço IP, e-mail, data de digitalização e a assinatura eletrônica do signatário.<br>
				Todo esse processo é integrado com a Receita Federal, garantindo assim, a <strong>validade jurídica</strong> desses documentos digitalizados.
				</p>

				<p>
				Com a Data Certa, você economiza tempo, reduz gastos com impressão e armazenamento. E ainda ajuda a preservar o meio
				ambiente. Com a redução do uso de papel, você evita que mais árvores sejam cortadas.
				</p>

				<?php get_template_part( 'template-parts/quer-saber-mais' ); ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>
