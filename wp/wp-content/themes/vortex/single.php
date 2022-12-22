<?php get_header(); ?>
<section class="vt_single vt_block">
	<div class="vt_block-inner vt_block-inner--s">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php
		  $category = get_the_category();
		  $cat = $category[0];

		  $cat_name = $cat->name;
		  $cat_id = $cat->cat_ID;
		  $cat_slug = $cat->slug;
		?>
		<div class="vt_block-heading vt_block-heading--l">
			<h1><?php echo $cat_name; ?></h1>
		</div>
		<article>
			<h1 class="vt_single-title"><?php the_title(); ?></h1>
			<div class="vt_single-items">
				<time><?php the_time('Y年m月d日'); ?></time>
				<?php the_tags('<ul class="vt_tags"><li>','</li><li>','</li></ul>'); ?>
			</div>
			<?php if(has_post_thumbnail()) : ?>
            <div class="vt_single-thumbnail">
                <?php the_post_thumbnail(); ?>
            </div>
            <?php endif; ?>
			<div class="vt_single-content">
				<?php the_content(); ?>
			</div>
		</article>
		<?php endwhile; endif; ?>
		<div class="vt_single-nav">
			<a href="<?php bloginfo('url'); ?>">Top</a>
			<span></span>
			<?php the_category(); ?>
			<span></span>
		</div>
	</div>
</section>

<?php get_footer(); ?>