<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>

<section class="vt_page">
	<div class="vt_page-heading vt_block--bg">
		<div class="vt_block-inner">
			<h1>Contact</h1>
			<p>お問い合わせ</p>
		</div>
	</div>
	<div class="vt_page-content">
		<div class="vt_block-inner vt_block-inner--s">
			<?php echo do_shortcode('[contact-form-7 id="7" title="Contact"]'); ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>