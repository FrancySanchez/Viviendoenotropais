<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package activello
 */
?>
				</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
			</div><!-- close .row -->
		</div><!-- close .container -->
	</div><!-- close .site-content -->

	<div id="footer-area">
		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="site-info container">
				<div class="row">
					<?php if( !get_theme_mod('footer_social') ) activello_social_icons(); ?>
					<div class="copyright col-md-12">
					<p> © <?php echo date("Y"); ?> Viviendo en otro pais. All rights reserved.</p>
					<p> Web creada con ♥ por <a href="http://francysanchez.com/" target="blank"><img  src="<?php echo get_template_directory_uri(); ?>/img/rancy.svg" width="20px" height="auto"></a> | <a href="http://www.digitalocean.com/?refcode=d16347dce861" target="blank"> Hospedada en DigitalOcean</a> </p>
						<?php //echo esc_html( get_theme_mod( 'activello_footer_copyright', 'Activello' ) ); ?>
						<?php //activello_footer_info(); ?>
					</div>
				</div>
			</div><!-- .site-info -->
			<div class="scroll-to-top"><i class="fa fa-angle-up"></i></div><!-- .scroll-to-top -->
		</footer><!-- #colophon -->
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

<script type="text/javascript">
		jQuery('a[href*="#"]:not([href="#"])').click(function() 
			{ 
				if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) { 
				var target = jQuery(this.hash); 
				target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']'); 

			if (target.length) { 
				jQuery('html, body').animate({ scrollTop: (target.offset().top -70) }, 1000); 
				return false; 
			} 
			} }); 

</script>

<!-- Go to www.addthis.com/dashboard to customize your tools --> 
 

</body>
</html>