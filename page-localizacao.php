<?php
get_header(); ?>

<?php get_template_part( 'template-parts/breadcrumbs' ); ?>

<section id="orcamento">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h1 class="small">Localização</h1>
				<h5><strong>Confira onde a Data Certa Logística está localizada</strong></h5><br>
				<div class="videoWrapper">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d658.8775070518827!2d-46.59299800496328!3d-23.60084455274367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5c7810b15207%3A0x4ea75ff1b896d1eb!2sR.+Nova+Hamburgo%2C+99+-+Ipiranga%2C+S%C3%A3o+Paulo+-+SP%2C+04217-040!5e0!3m2!1spt-BR!2sbr!4v1497289184582" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
			<div class="col-md-6">
				<h2>Quer saber mais sobre a Data Certa Logística?</h2>
				<h5><strong>Converse com nosso diretor comercial e veja como podemos te ajudar!</strong></h5><br>
				<div class="tel-botao">
					<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/tel.jpg"; ?>" alt="telefone"><span>11 2061-3138</span>
				</div>
				<div class="email">
					<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/email.jpg"; ?>" alt="telefone"><span>contato@datacerta.com</span><br>
					Rua Nova Hamburgo, 99 - Ipiranga, São Paulo - SP	
					
				</div>
			</div>
		</div>
	</div>
</section> 

<?php get_footer(); ?>
