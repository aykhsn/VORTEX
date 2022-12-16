<?php get_header(); ?>
<section class="vt_page">
	<div class="vt_page-heading vt_block--bg"></div>
</section>
<section class="vt_single vt_block">
	<div class="vt_block-inner vt_block-inner--s">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article>
			<ul class="meta">
				<li><?php the_time('Y年m月d日'); ?></li>
			</ul>
			<h1 class="title"><?php the_title(); ?></h1>
			<?php the_tags('<ul class="tags"><li>','</li><li>','</li></ul>'); ?>
			<?php if(has_post_thumbnail()) : ?>
            <div class="thumbnail">
                <?php the_post_thumbnail(); ?>
            </div>
            <?php endif; ?>
			<div class="content">
				<?php the_content(); ?>
			</div>
		</article>
		<?php endwhile; endif; ?>
	</div>
</section>
<?php get_footer(); ?>