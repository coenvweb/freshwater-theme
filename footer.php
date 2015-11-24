<?php
/**
 * Footer Template
 *
 * The footer template is generally used on every page of your site. Nearly all other
 * templates call it somewhere near the bottom of the file. It is used mostly as a closing
 * wrapper, which is opened with the header.php file. It also executes key functions needed
 * by the theme, child themes, and plugins. 
 *
 * @package Oxygen
 * @subpackage Template
 */
?>
				
				
				<?php get_sidebar( 'secondary' ); // Loads the sidebar-secondary.php template. ?>
				
				</div><!-- .content-wrap -->

				<?php do_atomic( 'close_main' ); // oxygen_close_main ?>

		</div><!-- #main -->

		<?php do_atomic( 'after_main' ); // oxygen_after_main ?>

		<?php get_sidebar( 'subsidiary' ); // Loads the sidebar-subsidiary.php template. ?>		

		<?php do_atomic( 'before_footer' ); // oxygen_before_footer ?>

		<div id="footer">

			<?php do_atomic( 'open_footer' ); // oxygen_open_footer ?>
			
			<div id="footer-content" class="footer-content">
				
				<?php echo apply_atomic_shortcode( 'footer_content', hybrid_get_setting( 'footer_insert' ) ); ?>
				
			</div>
				
			<?php get_template_part( 'menu', 'subsidiary' ); // Loads the menu-subsidiary.php template.  ?>

			<?php do_atomic( 'footer' ); // oxygen_footer ?>

			<?php do_atomic( 'close_footer' ); // oxygen_close_footer ?>

		</div><!-- #footer -->

		<?php do_atomic( 'after_footer' ); // oxygen_after_footer ?>
		
		</div><!-- .wrap -->

	</div><!-- #container -->

	<?php do_atomic( 'close_body' ); // oxygen_close_body ?>
	
	<?php wp_footer(); // wp_footer ?>

<div id="footerMainNoPatch" class="logoYes wNo">
 <div id="footerLeft">    	
  <ul>
   <li class="logoArea"><a href="//www.washington.edu/">&#169; 2012 University of Washington</a></li>  
  </ul>
 </div>
 <div id="footerRight">  
  <ul>
   <li class="centerText"><a href="//www.seattle.gov/">Seattle, Washington</a></li>
  </ul>   
 </div>
 <div id="footerCenter">
  <ul>
   <li><a href="//www.washington.edu/home/siteinfo/form/">Contact Us</a></li>
   <li class="footerLinkBorder"><a href="//www.washington.edu/jobs/">Jobs</a></li>
   <li class="footerLinkBorder"><a href="//myuw.washington.edu/">My UW</a></li>
   <li class="footerLinkBorder"><a href="//www.washington.edu/online/privacy">Privacy</a></li>
   <li class="footerLinkBorder"><a href="//www.washington.edu/online/terms">Terms</a></li>
  </ul>
 </div>
</div>


</body>
</html>