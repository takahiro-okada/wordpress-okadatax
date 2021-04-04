<!-- contact -->
<section class="contact">
	<div class="contact__inner inner">
		<div class="contact__left">
			<h2 class="util__title"><span class="util__title-en">CONTACT</span>お問い合わせ</h2>
			<p class="contact__text">初回のご相談を無料で承っております。<br class="is-sp">お気軽にお問い合わせください。</p>
		</div><!-- contact__left -->

		<div class="contact__right">
			<div class="contact__right-box _tel">
				<div>
					<p class="contact__right-text">お電話でのお問い合わせ</p>
					<a href="tel:052-875-5607" class="contact__right-link _tel">052-875-5607</a>
				</div>
			</div>
			<div class="contact__right-box _email">
				<div>
					<p class="contact__right-text">メールでのお問い合わせ</p>
					<a href="<?php echo home_url(); ?>/contact" class="contact__right-link _email">info@okada-tax.co.jp</a>
				</div>
			</div>
		</div><!-- contact__right -->
	</div><!-- contact__inner -->
</section><!-- contact -->

<!-- footer -->
<footer class="footer" role="contentinfo">
	<div class="inner">
		<div class="footer__wrapper">
			<a class="footer__logo"><img src="<?php echo get_template_directory_uri(); ?>/img/footer-logo.png" alt="岡田税理士事務所" alt=""></a>
			<div class="footer__link">
				<ul class="footer__left-list">
					<li class="footer__left-item"><a href="<?php echo home_url(); ?>/service">事業内容</a></li>
					<li class="footer__left-item"><a href="<?php echo home_url(); ?>/service#service-1">税務顧問・財務コンサルティング</a></li>
					<li class="footer__left-item"><a href="<?php echo home_url(); ?>/service#service-2">経理派遣・経理業務の設計</a></li>
					<li class="footer__left-item"><a href="<?php echo home_url(); ?>/service#service-3">相続税申告・相続税対策</a></li>
					<li class="footer__left-item"><a href="<?php echo home_url(); ?>/service#service-4">民事信託</a></li>
					<li class="footer__left-item"><a href="<?php echo home_url(); ?>/service#service-5">事業承継支援・株価対策</a></li>
					<li class="footer__left-item"><a href="<?php echo home_url(); ?>/service#service-6">組織再編提案</a></li>
					<li class="footer__left-item"><a href="<?php echo home_url(); ?>/service#service-7">ファミリーオフィス（資産管理会社）の組成</a></li>
					<li class="footer__left-item"><a href="<?php echo home_url(); ?>/service#service-8">各種節税提案</a></li>
				</ul>
				<ul class="footer__right-list">
					<li class="footer__right-item"><a href="<?php echo home_url(); ?>/concept">事務所概要</a></li>
					<li class="footer__right-item"><a href="<?php echo home_url(); ?>/category/news">ニュース</a></li>
					<li class="footer__right-item"><a href="<?php echo home_url(); ?>/recruit">採用情報</a></li>
					<li class="footer__right-item"><a href="<?php echo home_url(); ?>/contact">お問い合わせ</a></li>
				</ul>
			</div>
			<div class="totop" id="js-totop"><a href="#">▲PAGE TOP</a></div>
		</div>
	</div>
	</div>
</footer><!-- /footer -->

<?php wp_footer(); ?>

<!-- analytics -->
<script>
	(function(f, i, r, e, s, h, l) {
		i['GoogleAnalyticsObject'] = s;
		f[s] = f[s] || function() {
			(f[s].q = f[s].q || []).push(arguments)
		}, f[s].l = 1 * new Date();
		h = i.createElement(r),
			l = i.getElementsByTagName(r)[0];
		h.async = 1;
		h.src = e;
		l.parentNode.insertBefore(h, l)
	})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
	ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
	ga('send', 'pageview');
</script>

</body>

</html>