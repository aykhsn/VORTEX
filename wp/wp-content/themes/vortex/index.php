<?php get_header(); ?>

<section class="vt_cover">
	<div class="vt_cover-inner">
		<h1><span class="reveal-text">関わる人の</span><br><span class="reveal-text">「もっと」を応援する</span></h1>
		<p class="fadeIn fadeIn--1">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
		<a href="<?php bloginfo('url'); ?>/about" class="vt_button fadeIn fadeIn--1"><span>View More</span></a>
	</div>
	<img src="<?php echo get_template_directory_uri(); ?>/dist/assets/background.svg" class="js-textAnimation fadeIn fadeIn--3 fadeIn--2d">
</section>
<section class="vt_block vt_service">
	<div class="vt_block-inner">
		<div class="vt_block-heading">
			<h1>Service</h1>
		</div>
		<div class="vt_card-row vt_card-row_half">
			<div>
				<h2>システム<br class="vt_tb--view">エンジニアリング<br>サービス事業</h2>
			</div>
			<div>
				<p>クライアント先にエンジニアが常駐し、特定の業務に対して技術提供するSES（システムエンジニアリングサービス）事業を展開しており、特にシステム基盤（OSからミドルウェア領域）の設計構築や維持保守対応を得意としています。<br>システム設計案件を多く抱えているため、エンジニアのスキルアップに繋がる案件をご案内できます。</p>
				<div class="vt_button-wrapper">
					<a href="<?php bloginfo('url'); ?>/service" class="vt_button"><span>View More</span></a>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="vt_swiper-card-switch vt_block">
	<div class="vt_block-inner">
		<div class="vt_block-heading">
			<h1>Project</h1>
			<p>最新の案件情報をお知らせします。</p>
		</div>
	    <div id="mySwiperCardSwitch" class="swiper">
	        <div class="swiper-wrapper">
	        	<?php
	        	$cat_id = get_cat_ID( 'project' );
	        	$args = array(
	        		'posts_per_page' => 4,
	        		'category'=> $cat_id
	        	);
	        	$posts = get_posts( $args );
	        	foreach ( $posts as $post ):
	        		setup_postdata( $post );
				?>
				<a href="<?php the_permalink(); ?>" class="swiper-slide">
	                <article class="slide">
	                    <div class="slide-content">
	                        <time class="slide-date"><?php the_time('Y年m月d日'); ?></time>
	                        <div class="slide-text">
	                        	<h2><?php the_title(); ?></h2>
	                        </div>
	                        <div class="slide-text">
	                            <p>
	                            	<?php
								if (mb_strlen(strip_tags(get_the_content()), 'UTF-8') > 60) {
									$content = mb_substr(strip_tags(get_the_content()), 0, 60, 'UTF-8');
									echo $content . '…';
								} else {
									echo strip_tags(get_the_content());
								}
								?></p>
	                        </div>
	                    </div>
	                </article>
	            </a>
	            <?php
			        endforeach;
			        wp_reset_postdata();
				?>
	        </div>
	        <div class="swiper-button-prev"></div>
	        <div class="swiper-button-next"></div>
	    </div>
	    <div class="vt_button-wrapper vt_button-wrapper--right">
			<a href="<?php bloginfo('url'); ?>/category/project" class="vt_button"><span>View All</span></a>
		</div>
	</div>
</section>
<section class="vt_block vt_points">
	<div class="vt_block-inner">
		<div class="vt_block-heading">
			<h1>For Engineer</h1>
			<p>VORTEXはエンジニアが安心して業務に専念できるよう、よりよい環境を用意することで高いクオリティのサービスを提供します。</p>
		</div>
		<ul>
			<li>
				<div class="vt_points-block vt_block--gray">
					<div class="vt_points-img">
						<img src="<?php echo get_template_directory_uri(); ?>/dist/assets/point-01.jpg">
					</div>
					<div class="vt_points-text">
						<h2>還元率80%</h2>
						<p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
					</div>
				</div>
			</li>
			<li>
				<div class="vt_points-block vt_block--gray">
					<div class="vt_points-img">
						<img src="<?php echo get_template_directory_uri(); ?>/dist/assets/point-02.jpg">
					</div>
					<div class="vt_points-text">
						<h2>案件選択の自由</h2>
						<p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
					</div>
				</div>
			</li>
			<li>
				<div class="vt_points-block vt_block--gray">
					<div class="vt_points-img">
						<img src="<?php echo get_template_directory_uri(); ?>/dist/assets/point-03.jpg">
					</div>
					<div class="vt_points-text">
						<h2>福利厚生の充実</h2>
						<p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
					</div>
				</div>
			</li>
		</ul>
		<div class="vt_button-wrapper vt_button-wrapper--right">
			<a href="<?php bloginfo('url'); ?>/recruit" class="vt_button"><span>View More</span></a>
		</div>
	</div>
</section>
<section class="vt_block vt_recruit vt_block--bg">
	<div class="vt_block-inner">
		<div class="vt_block-heading">
			<h1>Recruit</h1>
		</div>
		<div>
			<h2><span>Fun</span><span>to</span><span>progress</span></h2>
			<p>昔から「売り手、買い手、世間の3つすべてにとって良い商売を心掛けるべし」という「三方よし」の考え方があります。我々は昔ながらの「三方」を「会社」「お客様」「社員」に置き換え、それぞれが win-win-win の関係を築くことで周囲（世間）へ良い影響を与えることが出来る、という捉え方をしています。</p>
			<p>会社が成長するためにも、お客様が満足してくださるためにも、エンジニア個々人のスキルアップや日々の仕事への充実感・納得感が必要不可欠です。そのため、我が社では、エンジニアのキャリア設計を汲んだ案件の提供、不必要な費用を削り給与へ還元するシステム等に取り組んでいます。</p>
			<p>関係する人が全て幸せになる、そんな仕事を一緒にしましょう！</p>
		</div>
		<div class="vt_button-wrapper vt_button-wrapper--right">
			<a href="<?php bloginfo('url'); ?>/recruit" class="vt_button"><span>View More</span></a>
		</div>
	</div>
</section>
<section class="vt_block vt_information">
	<div class="vt_block-inner">
		<div class="vt_block-heading">
			<h1>Information</h1>
			<p>最新情報をお知らせします。</p>
		</div>
		<ul class="vt_information-list">
			<?php
			$cat_id = get_cat_ID( 'information' );
        	$args = array(
        		'posts_per_page' => 3,
        		'category'=> $cat_id
        	);
        	$posts = get_posts( $args );
        	foreach ( $posts as $post ):
        		setup_postdata( $post );
			?>
			<li>
				<a href="<?php the_permalink(); ?>">
					<div class="vt_article-list-items">
						<time class="slide-date"><?php the_time('Y年m月d日'); ?></time>
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
					<div>
						<p><?php the_title(); ?></p>
					</div>
				</a>
			</li>
            <?php
		        endforeach;
		        wp_reset_postdata();
			?>
		</ul>
		<div class="vt_button-wrapper vt_button-wrapper--right">
			<a href="<?php bloginfo('url'); ?>/category/information" class="vt_button"><span>View All</span></a>
		</div>
	</div>
</section>
<!-- Loading -->
<script src="<?php echo get_template_directory_uri(); ?>/dist/js/loading.min.js"></script>
<!-- Swiper -->
<script src="<?php echo get_template_directory_uri(); ?>/dist/js/swiper-bundle.min.js"></script>
<script>
	////////////////////
	// mySwiperCardSwitch
	////////////////////
	let mySwiperCardSwitch = null;
	const mediaQuery = window.matchMedia('(max-width: 1024px)');
	const checkBreakpoint = (e) => {
		if (e.matches) {
			initMySwiperCardSwitch();
		} else if (mySwiperCardSwitch) {
			mySwiperCardSwitch.destroy(false, true);
		}
	}
	const initMySwiperCardSwitch = () => {
		mySwiperCardSwitch = new Swiper('#mySwiperCardSwitch.swiper', {
			slidesPerView: 1,
			spaceBetween: 16,
			loop: false,
			speed: 1000,
			grabCursor: true,
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
			breakpoints: {
				420: {
					slidesPerView: 2,
				}
			},
		});
	};
	mediaQuery.addListener(checkBreakpoint);
	checkBreakpoint(mediaQuery);
</script>

<?php get_footer(); ?>