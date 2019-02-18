<?php
/**
 * The template for displaying all pages FRONT PAGE
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Durham Tax Hub
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
			// does get field exist
			/*
			if (function_exists('get_field')){
				$featured_slider = get_field('featured_slider');
				?>
				
				<div class="slider">
					<?php
					// var_dump($featured_slider);
					foreach($featured_slider as $featured_slide) {
						$header = $featured_slide['heading'];
						$content = $featured_slide['content'];
						$image = $featured_slide['image'];
						//var_dump($header);
						?>

						<div class="slide" style="background-image:url(<?php echo $image['url'];?>);">
							<h1><?php echo $header ?></h1>
							<p><?php echo $content ?></p>
						</div>
						<?php
					}
					?>
				</div>
				<?php
			}
			*/

			if (function_exists('get_field')){
				$how_to_qualify = get_field('how_to_qualify');
				?>
				
				<div class="qualify">
					<?php
					// var_dump($featured_slider);
					foreach($how_to_qualify as $section) {
						$button = $section['button'];
						$content = $section['content'];
						?>

						<section class="qualification">
							<div class="qualification-buttons">
								<ul>
									<li><?php echo $button?></li>
								</ul>
							</div>
							<div class="qualification-contents">
								<div><?php echo $content?><div>
							</div>
						</section>

						<?php
					}
					?>
				</div>
				<?php
			}
		?>

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
