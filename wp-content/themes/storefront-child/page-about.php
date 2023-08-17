<?php
/**
 * Template: The template for displaying the About page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */

get_header(); 
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<h1>About Calido</h1>

			<?php the_content();

			if( function_exists( 'get_field' ) ) :
				if( have_rows( 'about_page_layout' ) ) :
					while( have_rows( 'about_page_layout' ) ): the_row();
						$subfield_value = get_sub_field( 'my_story' );
						if( get_row_layout() == 'my_story' ):
							echo wp_get_attachment_image( get_sub_field( 'banner_image' ), 'large' );
							echo '<section class="my-story-section my_story_section">';
							echo '<p>' . get_sub_field( 'intro_content' ) . '</p>';
							echo wp_get_attachment_image( get_sub_field( 'bio_photo' ), 'medium' );
							echo '<p>' . get_sub_field( 'text_content' ) . '</p>';
							echo '</section>';
						elseif( get_row_layout() == 'my_glass_journey' ):
							echo '<section class="journey-section journey_section"><h2>My Glass Journey</h2>';
							echo wp_get_attachment_image( get_sub_field( 'image' ), 'medium' );
							echo '<p>' . get_sub_field( 'text_content' ) . '</p>';
							echo '</section>';
						elseif( get_row_layout() == 'the_process' ):
							echo '<section class="process-section process"><h2>The Process</h2>';
							echo wp_get_attachment_image( get_sub_field( 'image' ), 'medium' );
							echo '<p>' . get_sub_field( 'text_content' ) . '</p>';
							echo '</section>';
						endif;
					endwhile;
				endif;
			endif;
			while ( have_posts() ) :
				the_post();

				
				do_action( 'storefront_page_before' );

				get_template_part( 'content', 'page' );

				/**
				 * Functions hooked in to storefront_page_after action
				 *
				 * @hooked storefront_display_comments - 10
				 */
				do_action( 'storefront_page_after' );

			endwhile; // End of the loop.
			?>
			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
