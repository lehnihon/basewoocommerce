<?php
get_header(); ?>

<?php get_template_part( 'template-parts/breadcrumbs' ); ?>

<section id="orcamento">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="small">Trabalhe Conosco</h1>
				<h5>Assim que surgir uma oportunidade, entraremos em contato com você. Por favor preecha todos os campos.</h5><br>
			</div>
		</div><br>

		<?php echo do_shortcode('[contact-form-7 id="1651" title="Trabalhe Conosco"]'); ?>
	</div>
</section> 

<?php get_footer(); ?>
