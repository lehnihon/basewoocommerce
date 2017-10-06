<?php
get_header(); ?>

<?php get_template_part( 'template-parts/breadcrumbs' ); ?>

<section id="orcamento">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h1 class="small">Rastreie seu pedido</h1>
				<h5>Por favor, preencha todos os campos</h5><br>
				<form action="<?php echo home_url( '/' ).'rastreamento'; ?>" method="POST" class="tracking-form clearfix">
					<select name="pesquisawebserv" class="input-contato">
						<option value="remessa">Número de remessa</option>
						<option value="cpf">CPF</option>
						<option value="ra">RA</option>
					</select>
					<input type="text" class="input-contato" name="valor" placeholder="Número">
					<input class="btn btn-azulescuro" value="Rastrear pedido" type="submit">
				</form>
			</div>
			<div class="col-md-6">
				<h2>Não está conseguindo rastrear seu pedido?</h2>
				<h5><strong>Converse com um especialista em logística e veja como podemos te ajudar!</strong></h5><br>
				<div class="tel-botao">
					<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/tel.jpg"; ?>" alt="telefone"><span>11 2061-3138</span>
				</div>
			</div>
		</div>
	</div>
</section> 

<?php get_footer(); ?>
