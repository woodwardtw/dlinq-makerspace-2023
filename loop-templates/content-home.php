<?php
/**
 * Partial template for content in home.php
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
<div class="title-block">
	<div class="center-this">
		<img src="<?php echo get_template_directory_uri();?>/imgs/maker-logo.png" class="main-logo" alt="A cube with Middlebury Makerspace written on it.">
	</div>
</div>
      	<div class="info">
      		<div class="item">
      			<span class="location"></span> <a href="https://map.middlebury.edu/?id=229#!dir/?m/513960?s/?sbc/">102 Johnson</a>
      		</div>
		    <div class="item">
			   <svg height='100px' class="heart" width='100px' xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve"><style type="text/css">
		.st0{fill-rule:evenodd;clip-rule:evenodd;}
	</style><g><path class="st0" d="M30.3,15.1c2.8,0,7.7,1.3,15.8,9.3l4,3.9l3.9-4c5.6-5.7,11.6-9.2,15.6-9.2c5.2-0.1,10.2,2.1,13.8,6   c8.1,8,8.1,21.1,0.1,29.1c0,0-0.1,0.1-0.1,0.1C83,50.6,66,68.9,51.8,84.2c-1,1-2.6,1-3.7,0c-3.5-3.8-28.6-31.7-31.5-34.7   c-8.1-8-8.1-21.1-0.1-29.1c0,0,0,0,0.1-0.1C20.3,16.8,25.2,14.9,30.3,15.1 M30.3,9.5c-6.6-0.2-12.9,2.3-17.6,6.9   c-10.2,10.2-10.3,26.8-0.1,37c0,0,0,0,0.1,0.1c2.9,2.9,31.4,34.6,31.4,34.6c3.2,3.2,8.5,3.2,11.7,0c0,0,31.1-33.6,31.5-33.9   c10.2-10.2,10.3-26.8,0.1-37c0,0,0,0-0.1-0.1c-4.6-4.9-11-7.7-17.7-7.6c-6.6,0-14,5.3-19.6,10.9C44.3,14.7,37.1,9.5,30.3,9.5   L30.3,9.5z"></path></g>
	</svg>Everyone is welcome.
		    </div>
		</div>
		<div class="container">	
			<?php echo makerspace_home_blocks();?>	  		 
		<!--   <div class="content-block">
		  	<div class="tool-list">
		    	<div class="tool printer"><a href="#">3D Printing</a></div>
		    	<div class="tool sewing-machine"><a href="#">Sewing</a></div>
		    	<div class="tool soldering"><a href="#">Soldering</a></div>
		    	<div class="tool laser"><a href="tools/laser-cutter.html">Laser Cutter</a></div>
		    	<div class="tool heat-press"><a href="#">Heat Press</a></div>
		    	<div class="tool cnc"><a href="#">CNC Machine</a></div>
		    </div>
		  </div> -->
		  
		</div>

	</div><!-- .entry-content -->

	<footer class="footer">
		<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>

		<?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
