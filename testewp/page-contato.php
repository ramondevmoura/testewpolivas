<?php
	//Template name: Contato
?>

	<?php
		get_header();
	?>

	</div>
	</section>


	<section class="contato">
		<div class="center">
			<div class="w50 contato-info">
				<h2>A mais importante,<br/>primeira conversa.</h2>
				<br />
				<p><b>Telefone:</b> (32) 99120-0367</p>
				
			<div class="mapa-container">
				<div id="mapa"></div>
			</div><!--mapa-->
			</div>

			<div class="w50 contato-form">
				<?php echo do_shortcode( '[contact-form-7 id="6" title="Formulário de contato 1"]' ); ?>
			
				
			</div>
			<div class="clear"></div>
		</div>
	</section>

	<?php
		get_footer();
	?>


	