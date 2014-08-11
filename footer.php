		<div class="wrapper">
            <!-- footer -->
			<footer class="footer" role="contentinfo">

				<!-- copyright -->
				<div class="copyright">
					&copy; <?php echo date('Y'); ?><span class="footer-maid">&nbsp;|&nbsp;Maid Services</span>
				</div>
                <div class="footer-menu">
                    <!-- nav -->
					<nav class="footer-nav" role="navigation">
                        <?php wp_nav_menu( array( 'theme_location' => 'extra-menu' ) ); ?>
                    </nav>
					<!-- /nav -->

                </div>
                <span class="chc">Website design by <a target="_blank" href="http://crosshatchcreative.com/">Crosshatch Creative</a></span>

				<!-- /copyright -->

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
