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
				<img class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Logistica para pequenas e medias empresas Data Certa Logistica.jpg"; ?>" alt="logistica-pequenas-e-medias-empresas"><br><br>
				<h1>Logística para Pequenas e Médias Empresas</h1><br>
				<p>
					Não importa se a sua empresa é de pequeno ou médio porte. Para ser competitivo no mercado, é preciso ter um excelente 
					planejamento logístico, para evitar o fracasso em tempos de crise e onde a concorrência está cada vez mais forte.
				</p>
				<p>
					A Data Certa, oferece <strong>soluções de logística customizadas para Pequenas e Médias Empresas</strong>, para reduzir os custos e 
					garantir o sucesso da sua empresa.
				</p>
				<p>Atualmente, a redução de custos se tornou um fator fundamental para a sobrevivência das empresas, e isto também faz parte 
				do planejamento logístico.</p>
				<p>
					<strong>Os benefícios da Data Certa para pequenas e médias empresas:</strong>
					<br>- Soluções customizadas
					<br>- Otimização de processos logísticos
					<br>- Frota própria de veículos
					<br>- Gestão inteligente
					<br>- Logística integrada
					<br>- Redução de custos logísticos
				</p>
				<p>
				Com gestão eficiente, otimização de processos e realizando um bom trabalho nas operações logísticas, é possível reduzir 
				esses custos.
				</p>
				<p>
				Por isso, a armazenagem dos produtos, a qualificação da equipe, a infra-estrutura de transporte e a capacidade de gestão e 
				otimização da logística são cruciais para o bom desempenho da sua empresa.
				</p>

				<p>
				Portanto, a logística é uma ferramenta extremamente importante, desde que seja eficiente e bem planejada. Contudo, é 
				necessário que a empresa escolhida para armazenar e transportar seus produtos esteja preparada para fazer o transporte 
				com a qualidade e eficiência necessária. Qualquer problema no transporte recairá sobre a sua empresa.
				</p>

				<p>Acreditamos que é extremamente importante garantir que seu produto seja entregue em perfeitas condições e no prazo certo.</p>

				<p>Para isso, contamos com uma estrutura física de armazenamento em local estratégico, profissionais qualificados e de uma
				frota de veículos compatível para o atendimento da demanda de seu nicho de mercado.</p>
				<?php get_template_part( 'template-parts/quer-saber-mais' ); ?>
		</div>
	</div>
</section>



<?php get_footer(); ?>
