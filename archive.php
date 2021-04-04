<?php get_header(); ?>

<section class="category-news common">
	<!-- 共通ヘッダー -->
	<div class="common__inner">
		<div class="common__header">
			<div class="common-header__box">
				<h2 class="common-header__title ">
					<img src="<?php echo get_template_directory_uri(); ?>/img/title-news.png" alt="">
					<div class="common-header__title-ja">ニュース</div>
				</h2>
			</div>
			<div class="common-header__img">
				<img class="is-sp" src="<?php echo get_template_directory_uri(); ?>/img/header-news.png" alt="">
				<img class="is-pc" src="<?php echo get_template_directory_uri(); ?>/img/header-news_sp.png" alt="">
			</div>
		</div><!-- common__header -->
	</div>


	<div class="inner">
		<?php
		$newslist = get_posts(array(
			'category_name' => 'news', //特定のカテゴリースラッグを指定
			'paged' => $paged,
			'posts_per_page' => 5, //取得記事件数
			'orderby' => 'DESC'
		));
		if ($newslist) :
		?>

			<div class="news__list">
				<?php
				foreach ($newslist as $post) : setup_postdata($post);
				?>
					<a class="news-link" href="<?php the_permalink(); ?>">
						<article class="news__item">
							<div class="news__meta">
								<time class="news__item-time" datetime=""><?php the_time('Y.m.d'); ?></time>
								<div class="news__item-label"><span><?php $cat = get_the_category();
																										$cat = $cat[0]; {
																											echo $cat->cat_name;
																										} ?></span></div>
							</div>
							<div class="news__main">
								<p class="news__item-title"><span><?php the_title(); ?></span></p>
								<div class="news__item-text">
									<?php
									echo ' <p>';
									if (mb_strlen($post->post_content, 'UTF-8') > 100) {
										$content = str_replace('\n', '', mb_substr(strip_tags($post->post_content), 0, 100, 'UTF-8'));
										echo $content . '[...] <a class="news-link-more" href="' . get_permalink() . '">続きを読む</a>';
									} else {
										echo str_replace('\n', '', strip_tags($post->post_content));
									}
									echo '</p>';
									?>
								</div>
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
		<!-- pagenation -->
		<?php if (paginate_links()) : //ページが1ページ以上あれば以下を表示 
		?>
			<!-- pagenation -->
			<div class="pagenation wow fadeInUp">
				<?php wp_pagenavi(); ?>
			</div><!-- /pagenation -->
		<?php endif; ?>

	</div><!-- inner -->
</section><!-- news -->


<?php get_footer(); ?>