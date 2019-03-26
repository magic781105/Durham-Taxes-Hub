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


                $form_id 		= get_field('form_id');
                $form_shortcode = get_field('form_shortcode');

		?>



      
        <!--header section-->
        <div class="header-page">
        <?php
            // for each for header section 
            // display heading/content/image/button/threshold

            foreach($eligible as $eligible_header) {
                $header = $eligible_header['heading'];
                $content = $eligible_header['content'];
                $image = $eligible_header['image'];
                $button = $eligible_header['button'];
                $threshold = $eligible_header['threshold'];
            ?>

<!--header section-->
<section id="header">
                    <!--desktop-->
                    <div class="grid-x height">
                        <!--desktop header background image-->
                        <div class="cell hide-for-small-only small-12 medium-6 large-8">
                            <!--if header image is not empty display-->
                            <?php if (! empty ($image)) { ?> 
                                <!--displaying image-->
                                <div id="image">
                                    <img src="<?php echo $image['url']; ?>"/>
                                </div>
                            <!-- else no header image added-->
                            <?php } else {
                                echo 'No Header Image Added';
                            }
                            ?>
                        </div>
                        
                        <!--desktop header and content-->
                        <div class="cell hide-for-small-only medium-6 large-4 display-image">
                            <!--if header is not empty display the following-->
                            <?php if(! empty ($header && $content)) { ?>
                                <div id="header-info">
                                    <!-- header title -->
                                    <h1 class="header_title"><?php echo $header; ?></h1>
                                    <!-- header content -->
                                    <p class="header_desc"><?php echo $content; ?></p>
                                    <!-- header form -->
                                    <div class="form">
                                        <input id="userInput" placeholder="Example: $30,000"/>
                                        <input id="threshold" value = "<?php echo $threshold; ?>" />
                                        <button id="inputCheck">Am I Eligible?</button>
                                    </div>
                                    <!-- header button for volunteer link -->
                                    <button class="header_button">Be a Volunteer!</button>
                                    </div>
                                </div>
                            <?php } else {
                                echo 'no header or content added';
                            } ?>
                    </div>

                    <!--mobile-->
                    <div class="grid-x mobile-header">
                    <div class="cell show-for-small-only display-image">
                        <!--If header is not empty display the following-->
                        <?php if(! empty ($header && $content)) { ?>
                            <div id="header-info">
                                <!--header-->
                                <h1 class="header_title"><?php echo $header; ?></h1>
                                <!--content-->
                                <p class="header_desc"><?php echo $content; ?></p>
                                <!--header form-->
                                <div class="form">
                                    <input id="userInput" placeholder="Example: $30,000"/>
                                    <input id="threshold" value = "<?php echo $threshold; ?>" />
                                    <button id="inputCheck">Am I Eligible?</button>
                                </div>
                                <!-- header button for a volunteer link -->
                                <button class="header_button">Be a Volunteer!</button>
                            </div>
                        <?php } else {
                            echo 'no header or content added';
                        } ?>
                    </div>
                    </div>
                </section>
                <?php
            }
        ?>
        </div>


		<!-- how to qualified -->
		<section class="qualification">
            <!-- display header dynamically -->
            <?php
            // check if header has content
            if(!empty($how_to_qualify['header'])) {
            ?>
                <h1><?php echo $how_to_qualify['header']; ?></h1>
            <?php
            }
            ?>
            <div class="qualification-buttons">
                <!-- check if $how_to_qualify has data -->
                <?php
                if(!empty($how_to_qualify)) {
                ?>
                <ul id="qualificationBubble">
                    <?php
                    // used to not include header
                    $qualificationCount = 0;
                        // create buttons using data from the custom field
                        foreach($how_to_qualify as $section) {
                            if($qualificationCount > 0 && !empty($section['button'])) {
                                $button = $section['button'];

                    ?>
                    <!-- generate li tags respectively -->
                    <li class="qualification-btn">
                        <?php echo $button; ?>
                    </li>

                    <?php
                        }
                        // to skip first content in $qualificationCount
                        $qualificationCount++;
					}
					?>
                </ul>
                <?php
                }
                ?>
            </div>
            <div class="qualification-contents">
                <?php
                    $idCounter = 0;
                    $qualificationCount = 0;
                    //skip first content in $how_to_qualify and make sure it has data
					foreach($how_to_qualify as $content) {
                        if ($qualificationCount > 0 && !empty($content['content'])) {
						$content = $content['content'];
						$id = "qualification-" . $idCounter;
				?>
                        <!-- generate contents accordingly -->
                        <div id="<?php echo $id; ?>" class="qualification-div">
                            <?php echo $content; ?>
                        </div>

                        <?php
                        // used to generate ids
                        $idCounter++;
                        }
                        // to skip first data in $how_to_qualify
                        $qualificationCount++;
					}
				?>
            </div>
        </section>

		<section  class="location">
            <!-- Adds location header -->
			<h1><?php if(!empty($location['header'])){echo $location['header'];} ?></h1>
			<div class="location-wrapper">
				<div class="location-lists">
                    <h2><?php if(!empty($location['header'])){echo $location['header'];} ?></h2>
                    <!-- declare variables that stores location info, and use custom post type-->
                    <?php
                        $args = array(
                            'post_type' => 'location',
                        );
                        $locations = new WP_Query( $args );
                        if( $locations->have_posts() ){
                            // variable that is used to create unique data-id
                            $locationCount = 0;
                            // check if locations have posts
                            while ($locations->have_posts() ) {
                                // query customized location posts
                                $locations->the_post();

                                $locationsCustomizeds = get_field('locations');
                                // check $locationsCustomizeds is not empty
                                if(!empty($locationsCustomizeds)) {
                                    // create variables that hold data and display the data
                                    foreach($locationsCustomizeds as $locationsCustomized) {
                                        $locationName = $locationsCustomized['name'];
                                        $locationAddress = $locationsCustomized['address'];
                                        $locationMap = $locationsCustomized['map'];
                                        $locationContent = $locationsCustomized['content'];
                                        // this is used for data-id to display contents respectively
                                        $id = "location-" . $locationCount;
                                        ?>

                                        <div class="location-list">
                                            <!-- display location name and address -->
                                            <h3 data-id="<?php echo $id; ?>"><?php echo $locationName; ?></h3>
                                            <p><?php echo $locationAddress; ?><p>
                                        </div>
                                        <?php
                                    }

                                    $locationCount++;
                                }
                            }
                            wp_reset_postdata();
                        }
                        ?>
				</div>
				<div class="location-detail">
					<?php
                    // check locations have posts
                    if( $locations->have_posts() ){
                        // to make unique ids to animate
                        $locationCount = 0;
                        while ($locations->have_posts() ) {
                            // query customized location posts
                            $locations->the_post();

                            // store data
                            $locationsCustomizeds = get_field('locations');
                            // if there is data create contents
                            if(!empty($locationsCustomizeds)) {
                                foreach($locationsCustomizeds as $locationsCustomized) {
                                    $locationName = $locationsCustomized['name'];
                                    $locationAddress = $locationsCustomized['address'];
                                    $locationMap = $locationsCustomized['map'];
                                    $locationContent = $locationsCustomized['content'];
                                    // id to animate
                                    $id = "location-" . $locationCount;
                                    ?>
                                    <!-- create html that display data -->
                                    <div id="<?php echo $id; ?>" class="tim">
                                        <h5><?php echo $locationName; ?></h5>
                                        <p><?php echo $locationAddress; ?></p>
                                        <p><?php echo $locationContent; ?></p>
                                    </div>
                                    <?php

                                }

                                $locationCount++;
                            }
                        }
                    }
                    ?>
				</div>
				<div class="location-map"></div>
			</div>
		</section>

        <!--volunteers section-->
        <?php
        if(!is_null($volunteers)){
            ?>

        <section class="volunteer">
            <?php
                $volunteer_header = $volunteers["header"];
                $volunteer_volunteertext1 = $volunteers["volunteertext1"];
                $volunteer_volunteerVideo = $volunteers["volunteerVideo"];
                $volunteer_volunteerVideoDesc = $volunteers["volunteervideodesc"];
                $volunteer_volunteertext2 = $volunteers["volunteertext2"];
            ?>

            <!--            grid container volunteer section-->
            <div class="grid-container">
                <h1 class="volunteerHeader">
                    <?php echo $volunteer_header; ?>
                </h1>
                <div class="volunteerContainer grid-x grid-margin-x">


                    <!--                   text container -->
                    <div class="volunteerTextSection cell small-10 small-order-2   large-4 large-order-1">
                        <h1>How to become a volunteer </h1>
                        <p class="volunteerText1">
                            <?php echo $volunteer_volunteertext1; ?>
                        </p>
                        <a>Click here >></a>
                    </div>


                    <!--                   video container-->
                    <div class="volunteerVideo cell small-10 small-order-1  large-4 large-order-2">

                        <div class="volunteerVideo1"><img src="<?php echo $volunteer_volunteerVideo;?>" alt="video"></div>

                        <p class="volunteerVideoDesc">
                            <?php echo $volunteer_volunteerVideoDesc;?>
                        </p>
                    </div>


                    <!--                   text container-->
                    <div class="volunteerTextSection cell small-10 small-order-3 large-4 large-order-3">
                        <h1>How to become a volunteer </h1>
                        <p class="volunteerText1">
                            <?php echo $volunteer_volunteertext1; ?>
                        </p>
                        <a>Click here >></a>
                    </div>
                </div>

           </div>
       </section>

        <?php
            }
        ?>

        <!--section for empowerment-->
        <?php
        if(!is_null($empowerment)){

            ?>
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

                    <div class="listContain cell small-4 medium-3 large-3">
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

        <?php
        }
        ?>


        <section class="testimonial">
           <?php
            // check if $testimonials is not empty
            if(!empty($testimonials)){
               $testimonial_header = $testimonials["header"];
            }?>
			<h1 class="sectionHeader">
                <?php
                    // check if $testimonial_header is not empty
                    if(!empty($testimonial_header)){
                        echo $testimonial_header;
                    }
                ?>
            </h1>

            <div id="alltestimonial">
                <?php
                    // check if get_field('testimonials') has content
                    if(!empty($testimonials)){
                        $testimonialItem = 0;
                        // using foreach to get each element in "testimonial" customized field group
                        foreach($testimonials as $testimonial){
                            // since we need to skip $testimonials["header"] and get the rest testimonials group in customized field
                            // using index($testimonialItem) to skip the first one in testimonial customized field.
                            if($testimonialItem > 0){
                            $testimonial_img = $testimonial['image'];
                            $testimonial_content = $testimonial['content'];
                            $testimonial_name = $testimonial['name'];
                            // var_dump($testimonial_img);
                        ?>

                    <div class="testimonialGroup">
                        <div class="testimonialImage" style="background-image:url(<?php
                            // check if $testimonial_img['url'] is not empty
                            if(!empty($testimonial_img['url'])){echo $testimonial_img['url'];} ?>);">
                        </div>
                        <div class="testimonialContent">
                            <?php
                                // check if $testimonial_content is not empty
                                if(!empty($testimonial_content)){echo $testimonial_content; }?>
                        </div>
                        <div class="testimonialName">
                            <?php
                                // check if $testimonial_name is not empty
                                if(!empty($testimonial_name)){echo $testimonial_name;} ?>
                        </div>
                    </div>

                    <?php
                            }
                            $testimonialItem++;

                        }
                    }
				?>
            </div>

        </section>




        <?php
		// if(function_exists('get_field')){

			if($form_id){

				?>
				<section class="contact-form">
					<div class="grid-container">
						<div class="grid-x grid-margin-x grid-margin-y">
							<!-- <div class="cell small-12 medium-6">
								<h2>Form ID</h2>
								<?php //echo do_shortcode('[ws_form id="' . $form_id . '"]' ) ?>
							</div> -->
							<div class="cell small-12 medium-12">
                                <p id="contact-us">Contact Us</p>
                                <?php echo do_shortcode('[ws_form id="' . $form_id . '"]' ) ?>
							</div>
						</div>
					</div>
				</section>
				<?php
            }
            
         //contact us form
        // <?php 
		// if(function_exists('get_field'))
            // add conditional tag
            if (! empty ($form_id)){
            //if($form_id){        
        ?> 

            <!--display contact form-->
            <section class="contact-form">
                <!--using foundation making it responsive-->
                <div class="grid-container">
                    <div class="grid-x grid-margin-x grid-margin-y">
                        <div class="cell small-12 medium-12">
                            <!-- contact header-->
                            <p id="contact-us">Contact Us</p>
                            <!--contact form using echo-->
                            <?php echo do_shortcode('[ws_form id="' . $form_id . '"]' ) ?>
                        </div>
                    </div>
                </div>
            </section>
        <!--adding conditional else-->
        <?php 
            } else {
				echo 'No Form Added';
			}



		?>


<!-- conditional to check footer content -->
    <?php
    if(!is_null($footer)){

        ?>
        <footer>
            <div class="footerContent">

              <!-- pulling information from custom fields -->
                <?php
					$footer_header = $footer['heading'];
					$footer_paragraph = $footer['paragraph'];
					$footer_link = $footer['link']["title"];
					$footer_partner_one = $footer['partner_logo_one'];
					$footer_partner_two = $footer['partner_logo_two'];
					$footer_partner_three = $footer['partner_logo_three'];
					$footer_partner_four = $footer['partner_logo_four'];
					// var_dump($footer_header);
                    // var_dump($footer_content);
                    // var_dump($footer_link);
					?>
          <!-- return custom field content to page -->
                <p class="footerHeader">
                    <?php echo $footer_header; ?>
                </p>
                <p class="footerParagraph">
                    <?php echo $footer_paragraph; ?>
                </p>
                <a class="footerLink">
                    <?php echo $footer_link; ?> </a>
                    <div class="social-media">
                        <?php
                        // If the modification name exists, use it for facebook icon and url
                        if(get_theme_mod('durhamtaxhub_facebook_url')) {?>
                            <a href="<?php echo get_theme_mod('durhamtaxhub_facebook_url')?>" class="icon facebook" target="_blank"><i class="fab fa-facebook-square"></i></a>
                        <?php
                        }
                        // If the modification name exists, use it for twitter icon and url
                        if(get_theme_mod('durhamtaxhub_twitter_url')) {?>
                            <a href="<?php echo get_theme_mod('durhamtaxhub_twitter_url')?>" class="icon twitter" target="_blank"><i class="fab fa-twitter-square"></i></a>
                        <?php
                        }
                        ?>
                    </div>
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

    }


    ?>
    </main><!-- #main-->
</div>

<?php
// get_sidebar();
 get_footer();
