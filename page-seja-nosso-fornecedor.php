<?php
get_header(); ?>

<?php get_template_part( 'template-parts/breadcrumbs' ); ?>

<section id="orcamento">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="small">Seja nosso fornecedor</h1>
				<h5>Por favor, preencha todos os campos.</h5><br>
			</div>
		</div><br>

		<?php echo do_shortcode('[contact-form-7 id="1650" title="Seja nosso fornecedor"]'); ?>
	</div>
</section> 

<?php get_footer(); ?>
