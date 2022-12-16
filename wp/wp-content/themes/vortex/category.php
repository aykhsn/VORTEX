<?php get_header(); ?>
<section class="vt_page">
	<div class="vt_page-heading vt_block--bg">
		<div class="vt_block-inner">
			<h1><?php single_term_title(); ?></h1>
			<p><?php the_archive_description(); ?></p>
		</div>
	</div>
	<div class="vt_page-content">
		<div class="vt_block-inner vt_block-inner--s">
			<div class="vt_article-list">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<article>
						<a href="<?php the_permalink(); ?>">
							<ul class="meta">
								<li><?php the_time('Y年m月d日'); ?></li>
							</ul>
							<p class="title"><?php the_title(); ?></p>
							<p class="text">
								<?php
								if (mb_strlen(strip_tags(get_the_content()), 'UTF-8') > 80) {
									$content = mb_substr(strip_tags(get_the_content()), 0, 80, 'UTF-8');
									echo $content . '…';
								} else {
									echo strip_tags(get_the_content());
								}
								?>
							</p>
						</a>
					</article>
				<?php endwhile; endif; ?>
			</div>
			<?php
			$args = array(
			    'mid_size' => 1,
			    'prev_text' => '前へ',
			    'next_text' => '次へ',
			    'screen_reader_text' => ' ',
			);
			the_posts_pagination($args);
			?>
			<?php get_footer(); ?>
		</div>
	</div>
</section>