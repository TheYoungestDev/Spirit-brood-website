<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PressBook
 */

?>
	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
    <?php
    do_action( 'pressbook_after_footer_start' );

    // Load the theme's footer sections (optional - can be removed if not needed)
    get_template_part( 'template-parts/footer/block-section' );
    get_template_part( 'template-parts/footer/widgets' );
		// remove current copywrite
    // get_template_part( 'template-parts/footer/copyright-text' );

    // Include your custom footer HTML file
    // $IPATH = $_SERVER["DOCUMENT_ROOT"] . "/assets/php/";
    // include($IPATH . "footer-blog.html");
   
 
    // defined( 'ABSPATH' ) || die();
    // include($_SERVER['DOCUMENT_ROOT'].'/assets/php/footer-blog.html');



    do_action( 'pressbook_before_footer_end' );
    ?>
</footer><!-- #colophon -->

<!-- Optional Go-to-top button -->
<?php if ( ! PressBook\Options\Footer::get_hide_go_to_top() ) { ?>
    <a href="#" class="go-to-top" aria-label="<?php esc_attr_e( 'Go to top', 'pressbook' ); ?>"></a>
<?php } ?>

<!-- Keep this part intact for WordPress to function properly -->
<?php wp_footer(); ?>
</body>
</html>
