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

        <!--        temporary nav-->
        <!-- <nav>
            <ul class="nav-bar"> -->
                <!-- <li id="testimonial">Testimonials</li>
                <li id="volunteer">volunteers</li>
                <li id="empowerment">empowerment</li>
                <li id="qualification">qualification</li> -->

            <!-- </ul>
        </nav> -->
        <?php

			// does get field exist
			
			if (function_exists('get_field')){

			$eligible = get_field('header');
      		$navigation_menu = get_field('menu_bar');
			$featured_slider = get_field('featured_slider');
			$location = get_field('location');
			$volunteers = get_field('volunteers');
			$empowerment = get_field('financialempowerment');
			$testimonials = get_field('testimonials');
			$how_to_qualify = get_field('how_to_qualify');
			$footer = get_field('footer');

		?>

        <!-- <div class="slider"> -->
        <?php
				/*
				// var_dump($featured_slider);
				foreach($featured_slider as $featured_slide) {
					$header = $featured_slide['heading'];
					$content = $featured_slide['content'];
					$image = $featured_slide['image'];
					//var_dump($header);
					?>

        <div class="slide" style="background-image:url(<?php echo $image['url'];?>);">
            <h1>
                <?php echo $header; ?>
            </h1>
            <p>
                <?php echo $content; ?>
            </p>
        </div>
        <?php
				}
				*/
				?>
        <!-- </div> -->
        
      
        <!-- header section -->
        <div class="header-page">
        <?php
        // var_dump($header);
        foreach($eligible as $eligible_header) {
          $header = $eligible_header['heading'];
          $content = $eligible_header['content'];
          $image = $eligible_header['image'];
          $button = $eligible_header['button'];
          $threshold = $eligible_header['threshold'];
          //var_dump($header);
          ?>
          <section id="header">
			  	<div id="logo"></div>
				<div class="header" style="background-image:url(<?php echo $image['url'];?>);">
					<h1 class="header_title"><?php echo $header ?></h1>
					<p class="header_desc"><?php echo $content ?></p>
					<div class="form">
						<input id="userInput" placeholder="Example: $30,000"/>
						<input id="threshold" value = "<?php echo $threshold ?>" />
						<button id="inputCheck">Am I Eligible?</button>
					</div>
					<button class="header_button">Be a Volunteer!</button>
				</div>
			</section>
          <?php 
            }        
        ?>
        </div>
        <!--  menu setcion  -->
        <div class="menu-bar">
			<nav>
				<div id="navigation" data-click-state = "0"></div>
				<ul>
					<?php
					// var_dump($nav_menu);
					foreach($navigation_menu as $nav_menu) {
						$icon = $nav_menu['nav_div1'];
						$text = $nav_menu['nav_div2'];
						$idName = $nav_menu['id_name'];
						// var_dump($idName);
					?>
					<div class="nav-menu">
						<div class="nav-border">
							<li class="menu-list" id="<?php echo $idName ?>">
								<img src="<?php echo $icon['url']; ?>"/>
								<p><?php echo $text?></p>
							</li>
						</div>
					</div>
					
					<?php	
					}
					?>		
				</ul>
			</nav>
		</div>
		
		<!-- how to qualified -->
		<section class="qualification">
            <h1>How to Qualify</h1>
            <div class="qualification-buttons">
                <ul id="qualificationBubble">
                    <?php
					// var_dump($featured_slider);
					foreach($how_to_qualify as $section) {
						$button = $section['button'];
						?>

                    <li class="qualification-btn">
                        <?php echo $button ?>
                    </li>

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

                <div id="<?php echo $id?>" class="qualification-div">
                    <?php echo $content?>
                </div>

                <?php
						$idCounter++;
					}
					?>
            </div>
        </section>

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

        <!--volunteers section-->
        <section class="volunteer">
            <?php 
				$volunteer_header = $volunteers["header"];
				$volunteer_volunteertext1 = $volunteers["volunteertext1"];
				$volunteer_volunteerVideo = $volunteers["volunteerVideo"];	
				$volunteer_volunteerVideoDesc = $volunteers["volunteervideodesc"];		
				$volunteer_volunteertext2 = $volunteers["volunteertext2"];						
			?>
            <div class="grid-container">
                <h1 class="volunteerHeader">
                    <?php echo $volunteer_header; ?>
                </h1>
                <div class="volunteerContainer grid-x grid-margin-x">

                    <div class="volunteerTextSection cell large-4">
                        <h1>How to become a volunteer </h1>
                        <p class="volunteerText1">
                            <?php echo $volunteer_volunteertext1; ?>
                        </p>
                        <a>Click here >></a>
                    </div>

                    <div class="volunteerVideo cell small-8 medium-6 large-4">

                        <div class="volunteerVideo1"><img src="<?php echo $volunteer_volunteerVideo;?>" alt="video"></div>

                        <p class="volunteerVideoDesc">
                            <?php echo $volunteer_volunteerVideoDesc;?>
                        </p>
                    </div>

                    <div class="volunteerTextSection cell large-4">
                        <h1>How to become a volunteer </h1>
                        <p class="volunteerText1">
                            <?php echo $volunteer_volunteertext1; ?>
                        </p>
                        <a>Click here >></a>
                    </div>
                </div>

            </div>
        </section>



        <!--section for empowerment-->
        <section class="empowerment">
            <?php 
					$empowerment_header = $empowerment["header"];
					$empowerment_listItems = $empowerment["empowermentlist"];
					$empowerment_text1 = $empowerment["empowermenttext1"];
					$empowerment_text2 = $empowerment["empowermenttext2"];
					$empowerment_listitem1 = $empowerment_listItems["listitem1"];
					$empowerment_listitem2 = $empowerment_listItems["listitem2"];
					$empowerment_listitem3 = $empowerment_listItems["listitem3"];
					$empowerment_listitem4 = $empowerment_listItems["listitem4"];
					$empowerment_listitem5 = $empowerment_listItems["listitem5"];
									
				?>
            <div class="grid-container">
                <h1 class="empowermentHeader">
                    <?php echo $empowerment_header; ?>
                </h1>
                <div class="empowermentContainer grid-x grid-margin-x">

                    <div class="listContain cell small-12 medium-8 large-3">
                        <div class="orderedList">
                            <div class="listItem">
                                <p>
                                    <?php echo $empowerment_listitem1; ?>
                                </p>
                            </div>

                            <div class="listItem">
                                <p>
                                    <?php echo $empowerment_listitem2; ?>
                                </p>
                            </div>

                            <div class="listItem">
                                <p>
                                    <?php echo $empowerment_listitem3; ?>
                                </p>
                            </div>

                            <div class="listItem">
                                <p>
                                    <?php echo $empowerment_listitem4; ?>
                                </p>
                            </div>

                            <div class="listItem">
                                <p>
                                    <?php echo $empowerment_listitem5; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="listContainBg cell small-12 medium-8 large-8">
                        <div class="listResult ">
                            <h2>Overview</h2>
                            <p>
                                <?php echo $empowerment_text1; ?>
                            </p>
                            <p>
                                <?php echo $empowerment_text2; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        


        <section class="testimonial">
           <?php 
					$testimonial_header = $testimonials["header"];	?>

            
			<h1 class="sectionHeader"><?php echo $testimonial_header; ?></h1>
            
            <div id="alltestimonial">
                <?php 

					$testimonialItem = 0;
					foreach($testimonials as $testimonial){
						if($testimonialItem > 0){
						$testimonial_img = $testimonial['image'];
						$testimonial_content = $testimonial['content'];
						$testimonial_name = $testimonial['name'];
						// var_dump($testimonial_img);						

						?>
						
                <div class="testimonialGroup">
                    <div class="testimonialImage" style="background-image:url(<?php echo $testimonial_img['url'];?>);"></div>
                    <div class="testimonialContent">
                        <?php echo $testimonial_content; ?>
                    </div>
                    <div class="testimonialName">
                        <?php echo $testimonial_name; ?>
                    </div>
                </div>

                <?php	
						}
						$testimonialItem++;						

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
                <a>
                    <?php echo $footer_link; ?> </a>
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
		?>

		<?php
		// while ( have_posts() ) :
		// 	the_post();

		// 	get_template_part( 'template-parts/content', 'page' );

		// 	// If comments are open or we have at least one comment, load up the comment template.
		// 	if ( comments_open() || get_comments_number() ) :
		// 		comments_template();
		// 	endif;


		// endwhile; // End of the loop.

		?>

    </main><!-- #main-->
</div>

<?php
// get_sidebar();
// get_footer();
