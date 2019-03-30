<?php
wp_footer();
?>
<footer>
	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<?php if (have_rows('social')) : ?>
						<div class="socials">
							<?php while (have_rows('social')) : the_row() ?>
								<a href="<?php the_sub_field('link') ?>" class="socialLink">
									<img src="<?php the_sub_field('icon') ?>" alt="" class="socialLink__icon">
								</a>
							<?php endwhile; ?>
						</div>
					<?php endif; ?>
					<p class="footer__copyright">
						&#169; Мебель в Ростове 2018
					</p>
				</div>
			</div>
		</div>
	</div>
</footer>


<div class="scrollUp">
	<span class="scrollUp_span__1"></span>
	<span class="scrollUp_span__2"></span>
</div>


<script src="<?= get_template_directory_uri() . "/js/jquery-3.2.1.js" ?>"></script>
<script src="<?= get_template_directory_uri() . "/vendor/wow-animation/wow.min.js" ?>"></script>
<script src="<?= get_template_directory_uri() . "/vendor/anchor/sweet-links-min.js" ?>"></script>
<script src="<?= get_template_directory_uri() . "/vendor/magnific-popup/jquery.magnific-popup.min.js" ?>"></script>
<script src="<?= get_template_directory_uri() . "/js/scripts.js" ?>"></script>
<script>
	new WOW().init();
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-136830836-1"></script>
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-136830836-1');
</script>


</body>
</html>