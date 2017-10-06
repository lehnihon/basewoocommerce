<?php
get_header(); ?>

<?php get_template_part( 'template-parts/breadcrumbs' ); ?>

<section id="orcamento">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="small">Quero ser Cliente</h1>
				<h5>Verifique se o seu segmento está em nossa área de atuação!</h5><br>
			</div>
		</div><br>

		<?php echo do_shortcode('[contact-form-7 id="1647" title="Quero ser cliente"]'); ?>
	</div>
</section> 

<?php get_footer(); ?>
