<footer class="page-footer" role="contentinfo">
	<div class="row">
		<div class="small-12 columns">
			<div class="foot-inner">
				<p class="copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>
				
				<p class="extras"><?php /* wp_nav_menu( array( 'menu' => 'Footer Nav', 'container' => '' ,'container_class' => '' ) );  */?><a href="/privacy-policy">Privacy Policy</a> | <a href="terms-conditions">Terms & Conditions</a></p>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

<!-- Grunt Live Reload, to remove before production -->
<script src="http://localhost:35729/livereload.js"></script>

</body>
</html>