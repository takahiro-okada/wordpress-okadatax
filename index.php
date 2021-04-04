<?php get_header(); ?>

<!-- mv -->
<div class="mv">
	<div class="swiper-container">
		<div class="swiper-wrapper">
			<div class="swiper-slide">
			<img class="is-sp" src="<?php echo get_template_directory_uri(); ?>/img/mv1_pc.png" alt="">
				<img class="is-pc" src="<?php echo get_template_directory_uri(); ?>/img/mv1_sp.png" alt="">
			</div>
			<div class="swiper-slide">
			<img class="is-sp" src="<?php echo get_template_directory_uri(); ?>/img/mv2_pc.png" alt="">
				<img class="is-pc" src="<?php echo get_template_directory_uri(); ?>/img/mv2_sp.png" alt="">
			</div>
			<div class="swiper-slide">
			<img class="is-sp" src="<?php echo get_template_directory_uri(); ?>/img/mv3_pc.png" alt="">
				<img class="is-pc" src="<?php echo get_template_directory_uri(); ?>/img/mv3_sp.png" alt="">
			</div>
		</div><!-- swiper-wrapper -->
		<div class="swiper-pagination swiper-pagination-blue"></div>
	</div><!-- swiper-container -->
	<span class="scroll">
	<span class="scroll-box"></span>
	<span class="scroll-text">scroll</span>
	</span>
</div><!-- mv -->

<!-- message -->
<section class="message" id="message">
	<div class="message__inner inner">
		<div class="message__content">
			<h2 class="util__title"><span class="util__title-en">MESSAGE</span>岡田税理士事務所は、<br class="is-pc">お客様の頼れるパートナーとして<br class="is-pc">
				あらゆる経営上の課題に真摯に取り組み、<br class="is-pc">事業の継続・発展をサポートします</h2>
			<p class="message__text">お客様の事業の存続、発展があってこそ、パートナーである私たちの喜びがあります。<br>
				経営上の課題や直面する問題にまっすぐ向き合い、正確かつスピーディーに情報を提供することで<br>
				早期かつベストな課題解決ができるよう取り組んでいます。
			</p>
			<div class="util__button">
				<a href="<?php echo home_url(); ?>/concept#rep-message" class="util__button-link _more">代表メッセージ</a>
			</div>
		</div>
		<div class="message__img">
			<img src="<?php echo get_template_directory_uri(); ?>/img/index-message.png" alt="">
		</div>
	</div>
</section><!-- message -->

<!-- service -->
<section class="service">
	<div class="inner">
		<h2 class="util__title"><span class="util__title-en">SERVICE</span>事業内容</h2>
		<ul class="service__list">
			<!-- 1 -->
			<li class="service__item">
				<div class="service__item-img"><img src="<?php echo get_template_directory_uri(); ?>/img/service1.png" alt=""></div>
				<div class="service__item-body">
					<p class="service__item-title">税務顧問・財務<br class="is-pc">コンサルティング</p>
					<p class="service__item-en">Tax adviser・Financial consulting</p>
					<p class="service__item-text">会計、税務、経営相談、資金繰りなど経営上の課題に真摯に取り組み、最善策をご提案。</p>
				</div>
				<div class="util__button">
					<a href="<?php echo home_url(); ?>/service#service-1" class="util__button-link _more">詳しく見る</a>
				</div>
			</li>
			<!-- 2 -->
			<li class="service__item">
				<div class="service__item-img"><img src="<?php echo get_template_directory_uri(); ?>/img/service2.png" alt=""></div>
				<div class="service__item-body">
					<p class="service__item-title">経理派遣、<br class="is-pc">経理業務の設計</p>
					<p class="service__item-en">Accounting dispatch, accounting business design</p>
					<p class="service__item-text">経理をアウトソーシングすることで正確かつスピーディーな経理業務を実現します。</p>
				</div>
				<div class="util__button">
					<a href="<?php echo home_url(); ?>/service#service-2" class="util__button-link _more">詳しく見る</a>
				</div>
			</li>
			<!-- 3 -->
			<li class="service__item">
				<div class="service__item-img"><img src="<?php echo get_template_directory_uri(); ?>/img/service3.png" alt=""></div>
				<div class="service__item-body">
					<p class="service__item-title">相続税申告、<br class="is-pc">相続税対策</p>
					<p class="service__item-en">Inheritance tax declaration, inheritance tax measures</p>
					<p class="service__item-text">相続に関わる手間や時間などのコストの削減、トラブルを回避しスムーズな相続手続きを。</p>
				</div>
				<div class="util__button">
					<a href="<?php echo home_url(); ?>/service#service-3" class="util__button-link _more">詳しく見る</a>
				</div>
			</li>
			<!-- 4 -->
			<li class="service__item">
				<div class="service__item-img"><img src="<?php echo get_template_directory_uri(); ?>/img/service4.png" alt=""></div>
				<div class="service__item-body">
					<p class="service__item-title">民事信託</p>
					<p class="service__item-en">Civil trust</p>
					<p class="service__item-text">生前に相続財産を信託化することにより、スムーズな承継を支援いたします。</p>
				</div>
				<div class="util__button">
					<a href="<?php echo home_url(); ?>/service#service-4" class="util__button-link _more">詳しく見る</a>
				</div>
			</li>
			<!-- 5 -->
			<li class="service__item">
				<div class="service__item-img"><img src="<?php echo get_template_directory_uri(); ?>/img/service5.png" alt=""></div>
				<div class="service__item-body">
					<p class="service__item-title">事業承継支援・<br class="is-pc">株価対策</p>
					<p class="service__item-en">Business succession support・stock price measures</p>
					<p class="service__item-text">事業の承継、存続、成長のために創業者の想いを大切にした事業承継をお手伝い致します。</p>
				</div>
				<div class="util__button">
					<a href="<?php echo home_url(); ?>/service#service-5" class="util__button-link _more">詳しく見る</a>
				</div>
			</li>
			<!-- 6 -->
			<li class="service__item">
				<div class="service__item-img"><img src="<?php echo get_template_directory_uri(); ?>/img/service6.png" alt=""></div>
				<div class="service__item-body">
					<p class="service__item-title">組織再編提案</p>
					<p class="service__item-en">Proposal for reorganization</p>
					<p class="service__item-text">豊富な経験と企画力を活かし、お客様に最適な組織作りをご提案。</p>
				</div>
				<div class="util__button">
					<a href="<?php echo home_url(); ?>/service#service-6" class="util__button-link _more">詳しく見る</a>
				</div>
			</li>
			<!-- 7 -->
			<li class="service__item">
				<div class="service__item-img"><img src="<?php echo get_template_directory_uri(); ?>/img/service7.png" alt=""></div>
				<div class="service__item-body">
					<p class="service__item-title">ファミリー<br class="is-pc">オフィスの組成</p>
					<p class="service__item-en">Family office composition</p>
					<p class="service__item-text">専門家と連携し、相続税対策から大切な資産の運用までトータルサポート。</p>
				</div>
				<div class="util__button">
					<a href="<?php echo home_url(); ?>/service#service-7" class="util__button-link _more">詳しく見る</a>
				</div>
			</li>
			<!-- 8 -->
			<li class="service__item">
				<div class="service__item-img"><img src="<?php echo get_template_directory_uri(); ?>/img/service8.png" alt=""></div>
				<div class="service__item-body">
					<p class="service__item-title">各種節税提案</p>
					<p class="service__item-en">Various tax-saving proposals</p>
					<p class="service__item-text">税制を熟知した専門家として、お客様に納得いただけるベストな節税対策をご提供。</p>
				</div>
				<div class="util__button">
					<a href="<?php echo home_url(); ?>/service#service-8" class="util__button-link _more">詳しく見る</a>
				</div>
			</li>
		</ul>
	</div>
</section><!-- service -->

<!-- news -->
<section class="news">
	<div class="inner">
		<h2 class="util__title"><span class="util__title-en">NEWS</span>最新ニュース</h2>

		<?php
		$newslist = get_posts(array(
			'category_name' => 'news', //特定のカテゴリースラッグを指定
			'posts_per_page' => 5 //取得記事件数
		));
		if ($newslist) :
		?>

			<div class="news__list">
				<?php
				foreach ($newslist as $post) :
					setup_postdata($post);
				?>

				<a class="news-link" href="<?php the_permalink(); ?>">
					<article class="news__item">
						<div class="news__meta">
							<time class="news__item-time" datetime=""><?php the_time('Y.m.d'); ?></time>
							<div class="news__item-label"><span><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></span></div>
						</div>
						<div class="news__main">
							<p class="news__item-title"><span><?php the_title(); ?></span></p>
						</div>
					</article>
				</a>

				<?php
				endforeach;
				wp_reset_postdata();
				?>
			</div><!-- index-post-list -->
		<?php else : ?>
			<p>準備中です。</p>
		<?php endif; ?>
	<div class="util__button">
		<a href="<?php echo home_url(); ?>/category/news/" class="util__button-link _more">ニュース一覧</a>
	</div>
	</div><!-- inner -->
</section><!-- news -->

<?php get_footer(); ?>