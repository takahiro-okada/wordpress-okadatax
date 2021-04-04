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
							<div class="news__item-text"><?php echo mb_substr(strip_tags($post-> post_content),0,100) . '...'; ?></div>
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