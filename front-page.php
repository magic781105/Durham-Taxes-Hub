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
				
				<section  class="qualification">
					<h1>How to Qualify</h1>
					<div class="qualification-buttons">
						<ul id="qualificationBubble">
						<?php
						// var_dump($featured_slider);
						foreach($how_to_qualify as $section) {
							$button = $section['button'];
							?>

							<li class="qualification-btn"><?php echo $button?></li>

							<?php
						}
						?>
						</ul>
					</div>
					<div class="qualification-contents">
						<?php
						$idCounter = 0;
						foreach($how_to_qualify as $content) {
							$content = $content['content'];
							$id = "qualification-" . $idCounter;
							?>

							<div id="<?php echo $id?>" class="qualification-div"><?php echo $content?></div>

							<?php
							$idCounter++;
						}
						?>
					</div>
				</section>
				<?php
			}

			/**
			 * Location
			 */

			if (function_exists('get_field')){
				$location = get_field('location');
				?>
				
				<section  class="location">
					<h1><?php echo $location['header']?></h1>
					<div class="location-wrapper">
						<div class="location-lists">
							<h2><?php echo $location['header']?></h2>
							<?php
							// var_dump($location);
							$locationCount = 0;
							foreach($location as $section) {
								if($locationCount > 0){
								$name = $section['name'];
								$address = $section['address'];
								$id = "location-" . $locationCount;
								?>
									<div class="location-list">
										<h3 data-id="<?php echo $id?>"><?php echo $name ?></h3>
										<p><?php echo $address ?><p>
									</div>
								<?php
								}
								$locationCount++;
							}
							?>
						</div>
						<div class="location-detail">
							<?php
							$locationCount = 0;
							foreach($location as $section) {
								if($locationCount > 0){
								$locationDetail = $section['content'];
								$name = $section['name'];
								$address = $section['address'];
								$id = "location-" . $locationCount;
								?>
									<div id="<?php echo $id?>" class="tim">
										<h5><?php echo $name?></h5>
										<p><?php echo $address?></p>
										<p><?php echo $locationDetail?></p>
									</div>
								<?php
								}
								$locationCount++;
							}
							?>
						</div>
						<div class="location-map"></div>
					</div>
				</section>
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
