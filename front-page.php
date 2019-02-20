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
<<<<<<< HEAD
			// does get field exist	
			/*	
			if(function_exists('get_field')){
				$featured_slider = get_field('featured_slider');

				?>
=======
			// does get field exist
			
			if (function_exists('get_field')){
				
        $featured_slider = get_field('featured_slider');

				

				$testmonials = get_field('testmonials');
        
        $how_to_qualify = get_field('how_to_qualify');
        
        $footer = get_field('footer');

				?>
      
        /*
>>>>>>> develop
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
							<h1><?php echo $header; ?></h1>
							<p><?php echo $content; ?></p>
						</div>
						<?php
					}
					?>
<<<<<<< HEAD
				</div>
				<?php
			}

			*/


			// how am I qualified section
			if (function_exists('get_field')){
				$how_to_qualify = get_field('how_to_qualify');
				?>
				
				<section  class="qualification">
=======
				</div>      
        */
      
				<div class="testmonial">
					<?php 
						$testmonial_header = $testmonials["header"];						
						?>
						
						<p class="sectionHeader"><?php echo $testmonial_header; ?></p>
						<div id="allTestmonial">
						<?php 

						$testimonialSubEle = 0;
						foreach($testmonials as $testmonial){
							if($testimonialSubEle > 0){
							$testmonial_img = $testmonial['image'];
							$testmonial_content = $testmonial['content'];
							$testmonial_name = $testmonial['name'];
							// var_dump($testmonial_img);						
							?>
							
							<div class="testmonialGroup">								
								<div class="testmonialImage" style="background-image:url(<?php echo $testmonial_img['url'];?>);"></div>
								<div class="testmonialContent"><?php echo $testmonial_content; ?></div>
								<div class="testmonialName"><?php echo $testmonial_name; ?></div>
							</div>
							
							<?php	
							}
							$testimonialSubEle++;						
						}
						?>
						</div>
					
				</div>
        <section  class="qualification">
>>>>>>> develop
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
						$idCounter = 1;
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
      
        
        <footer>
          <div class="footerContent">
            <?php
              $footer_header = $footer['heading'];
              $footer_paragraph = $footer['paragraph'];
              $footer_link = $footer['link'];
              $footer_partner_one = $footer['partner_logo_one'];
              $footer_partner_two = $footer['partner_logo_two'];
              $footer_partner_three = $footer['partner_logo_three'];
              $footer_partner_four = $footer['partner_logo_four'];
              // var_dump($footer_header);
              // var_dump($footer_content);
              ?>
              <p class="footerHeader">
                <?php echo $footer_header; ?>
              </p>
              <p class="footerParagraph">
                <?php echo $footer_paragraph; ?>
              </p>
              <a <?php echo $footer_link; ?> </a>
              <div class="partnerLogos">
                <img src='<?php echo $footer_partner_one ?>' />
                <img src='<?php echo $footer_partner_two ?>' />
                <img src='<?php echo $footer_partner_three ?>' />
                <img src='<?php echo $footer_partner_four ?>' />
              </div>
          </div>
        </footer>
      
				<?php
			}
<<<<<<< HEAD

			// testimonial section
			if (function_exists('get_field')){
				// $featured_slider = get_field('featured_slider');
				$testmonials = get_field('testmonials');
				?>
				
				
				<div class="testmonial">
					<?php 
						$testmonial_header = $testmonials["header"];						
						?>
						
						<p class="sectionHeader"><?php echo $testmonial_header; ?></p>
						<div id="allTestmonial">
						<?php 

						$i = 0;
						foreach($testmonials as $testmonial){
							if($i > 0){
							$testmonial_img = $testmonial['image'];
							$testmonial_content = $testmonial['content'];
							$testmonial_name = $testmonial['name'];
							// var_dump($testmonial_img);						
							?>
							
							<div class="testmonialGroup">								
								<div class="testmonialImage" style="background-image:url(<?php echo $testmonial_img['url'];?>);"></div>
								<div class="testmonialContent"><?php echo $testmonial_content; ?></div>
								<div class="testmonialName"><?php echo $testmonial_name; ?></div>
							</div>
							
							<?php	
							}
							$i++;						
						}
						?>
						</div>
					
				</div>
				<?php
			}
			
	
=======
			
>>>>>>> develop
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
// get_sidebar();
get_footer();
