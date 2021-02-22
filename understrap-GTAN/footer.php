<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">

						<?php //understrap_site_info(); ?>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->
	
</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->


<div class="wrapper copyright clearfix" id="wrapper-copyright">

	<div class="<?php echo esc_attr( $container ); ?>">
	
		<p class="copyrighttext">Copyright &copy; <?php echo date('Y'); ?> Global Teach Ag Network</p>
		
		<p class="bvfooter">Site development by: <a href="https://www.bluevalleytech.com/" target="_blank">Blue Valley Technologies LLC</a></p>
	
	</div>

</div>

<?php wp_footer(); ?>

</body>

</html>

