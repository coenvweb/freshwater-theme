<?php
/**
 * Template Name: Projects & Events
 *
 * The archive template is the default template used for archives pages without a more specific template. 
 *
 * @package Oxygen
 * @subpackage Template
 */

get_header(); // Loads the header.php template. ?>

	<div class="aside">
	
		<?php get_template_part( 'menu', 'secondary' ); // Loads the menu-secondary.php template.  ?>
		
		<?php get_sidebar( 'primary' ); // Loads the sidebar-primary.php template. ?>
	
	</div>
	
	<div class="content-wrap">
		
		<?php do_atomic( 'before_content' ); // oxygen_before_content ?>

		<div id="content">
	
			<?php do_atomic( 'open_content' ); // oxygen_open_content ?>
	
			<div class="hfeed">
	               
                <?php 
                // the query
                $the_query = new WP_Query( array( 'category_name' => $post->post_name ) ); ?>

                <?php if ( $the_query->have_posts() ) : ?>

                    <!-- pagination here -->

                    <!-- the loop -->
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	
						<?php do_atomic( 'before_entry' ); // oxygen_before_entry ?>
	
						<div id="post-<?php the_ID(); ?>" class="<?php hybrid_entry_class(); ?>">		
	
							<?php do_atomic( 'open_entry' ); // oxygen_open_entry ?>
	
							<?php if ( current_theme_supports( 'get-the-image' ) ) {
											
								get_the_image( array( 'meta_key' => 'Thumbnail', 'size' => 'archive-thumbnail', 'image_class' => 'featured', 'attachment' => false, 'width' => 590, 'height' => 140, 'default_image' => get_template_directory_uri() . '/images/archive-thumbnail-placeholder.gif' ) );							
									
							} ?>
	
							<div class="entry-header">
										
								<?php echo apply_atomic_shortcode( 'entry', '[entry-title]' ); ?>
								
								<?php echo apply_atomic_shortcode( 'byline_edit', '<div class="byline byline-edit">' . __( '[entry-edit-link]', 'oxygen' ) . '</div>' ); ?>
			
							</div>
	
							<?php echo apply_atomic_shortcode( 'byline_category', '<div class="byline byline-cat">' . __( '[entry-terms taxonomy="category" before=""]', 'oxygen' ) . '</div>' ); ?>
								
							<div class="entry-summary">
								
								<?php the_advanced_excerpt(); ?>
								
								<?php wp_link_pages( array( 'before' => '<p class="page-links">' . __( 'Pages:', 'oxygen' ), 'after' => '</p>' ) ); ?>
								
							</div>
								
							<a class="read-more" href="<?php the_permalink(); ?>">Read Article &rarr;</a>
	
							<?php do_atomic( 'close_entry' ); // oxygen_close_entry ?>
	
						</div><!-- .hentry -->
	
						<?php do_atomic( 'after_entry' ); // oxygen_after_entry ?>
	
					<?php endwhile; ?>
	
				<?php else : ?>
	
					<?php get_template_part( 'loop-error' ); // Loads the loop-error.php template. ?>
	
				<?php endif; ?>
	
			</div><!-- .hfeed -->
	
			<?php do_atomic( 'close_content' ); // oxygen_close_content ?>
	
			<?php get_template_part( 'loop-nav' ); // Loads the loop-nav.php template. ?>
	
		</div><!-- #content -->
	
		<?php do_atomic( 'after_content' ); // oxygen_after_content ?>

<?php get_footer(); // Loads the footer.php template. ?>