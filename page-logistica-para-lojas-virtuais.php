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

<section id="title-solucoes">
	<div class="container">
		<div class="row">
			<h1 class="titulo-linha">Logística para Lojas Virtuais</h1>
			<div class="separador"></div>
		</div>
	</div>		
</section>

<section id="solucoes-detalhes">
	<div class="container">
		<div class="row">
			<div class="col-md-8 text-left">
				<h2>Coletamos, armazenamos, empacotamos e entregamos pra você!</h2><br>
				<p>
					Com a nossa solução completa de logística para loja virtual, você não perde mais tempo embalando e levando os produtos para os Correios. Quando a loja virtual escolhe por armazenar seu próprio estoque,
					nem sempre é a operação mais econômica.
				</p>
				<p>
					<strong>
					O que você deve levar em consideração é que, além do custo operacional, muitas vezes acaba 
					investindo o seu tempo para preparar, embalar despachar os produtos, e coloca em risco a 
					evolução da própria loja, uma vez que você não fica 100% focado nas estratégias de venda e 
					crescimento da loja virtual.
					</strong>
				</p>
				<ul style="list-style-type:disc">
					<li>Coleta</li>
					<li>Serviços de Armazenagem</li>
					<li>Picking</li>
					<li>Expedição</li>
					<li>Cross Docking</li>
					<li>Montagem de Kits</li>
					<li>Transporte e Distribuição </li>
					<li>Projeto personalizada para cada loja virtual</li>
				</ul>
			</div>
			<div class="col-md-4">
				<img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoesg-6.jpg"; ?>" />
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 text-left">
				<h2>Logística completa para e-Commerce</h2><br>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 text-left">
				<p>
					<strong>Coletamos seus envios com toda segurança</strong>
				</p>
				<p>
					Temos uma equipe especializada para coletar seus produtos e trazer até 
nosso centro logístico, onde o estoque da sua loja virtual ficará 
armazenada.
				</p><br>
				<p>
					<strong>Nosso espaço</strong>
				</p>
				<p>
					A Data Pontual conta com um amplo espaço para armazenagem para 
					todos os tipos de produtos, desde cosméticos, alimentos não perecíveis, 
					correlatos, suplementos, livros, roupas, acessórios e peças automotivas,
					materiais para confecção, eletrônicos e eletroportáteis.<br>
					Nosso centro de armazenagem é seguro e cada loja virtual tem seu 
					próprio box customizado, ou seja, seu estoque não compartilha o mesmo 
					espaço com outras empresas no mesmo box.
				</p>
			</div>
			<div class="col-md-6 text-left">
				<p><strong>Empacotamos seus produtos com segurança</strong></p>
				<p>
					Cada produto é cuidadosamente embalada com itens de proteção 
					resistentes. Tudo para garantir que a encomenda chegue intacta ao 
					destino final.<br>
					Assim, você tem mais segurança nos envios e economiza 
					tempo e dinheiro, já que não precisará mais se preocupar com a 
					compra de embalagens e o empacotamento de seus produtos.
				</p><br>
				<p>
					<strong>Transporte e Distribuição</strong>
				</p>
				<p>
					A Data Pontual possui uma equipe altamente qualificada e uma frota
					própria, tudo para que seus envios chegue ao destino final de forma 
					segura e com o menor tempo possível.
				</p>
			</div>
		</div><br><br><br><br>
		<?php get_template_part( 'template-parts/servicos-solucoes' ); ?>
	</div>
</section>

<?php get_template_part( 'template-parts/contato-solucoes' ); ?>

<?php get_footer(); ?>
