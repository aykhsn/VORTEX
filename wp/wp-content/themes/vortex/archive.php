<?php get_header(); ?>
<section class="vt_page">
	<div class="vt_page-heading vt_block--bg">
		<div class="vt_block-inner vt_block-inner--s">
			<h1><?php the_archive_title(); ?></h1>
			<?php the_archive_description('<div>', '</div>'); ?>
		</div>
	</div>
	<div class="vt_page-content">
		<div class="vt_block-inner vt_block-inner--s">
			<div class="vt_article-list">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<article>
						<a href="<?php the_permalink(); ?>">
							<div class="vt_article-list-items">
								<time><?php the_time('Y年m月d日'); ?></time>
								<ul class="vt_tags">
									<?php
									$posttags = get_the_tags();
									if ($posttags) {
									foreach($posttags as $tag) {
									echo '<li>' . $tag->name . '</li>';
									}
									}
									?>
								</ul>
							</div>
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