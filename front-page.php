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

    <main id="volunteersMain" class="site-main">

        <?php
			// does get field exist
			if (function_exists('get_field')){
				
				$volunteers = get_field('volunteers');
		?>


        <section class="volunteers grid-container">
            <?php 
						$volunteer_header = $volunteers["header"];
						$volunteer_volunteertext1 = $volunteers["volunteertext1"];
						$volunteer_volunteerVideo = $volunteers["volunteerVideo"];	
						$volunteer_volunteerVideoDesc = $volunteers["volunteervideodesc"];		
						$volunteer_volunteertext2 = $volunteers["volunteertext2"];						
						?>

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


            <?php
			}
		?>

          
        </section><!-- #primary -->
    </main><!-- #main -->

	<main id="empowermentMain" class="site-main">

		<?php
			// does get field exist
			if (function_exists('get_field')){
				
				$empowerment = get_field('financialempowerment');
		?>


		<section class="empowerment grid-container">
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

			<h1 class="empowermentHeader">
				<?php echo $empowerment_header; ?>
			</h1>
			<div class="empowermentContainer grid-x grid-margin-x">
				
				
				<div class="listContain cell small-12 medium-8 large-3">
					<ol>
						<li class ="listItem">
							<?php echo $empowerment_listitem1; ?>
						</li>

						<li class ="listItem">
							<?php echo $empowerment_listitem2; ?>
						</li>

						<li class ="listItem">
							<?php echo $empowerment_listitem3; ?>
						</li>

						<li class ="listItem">
							<?php echo $empowerment_listitem4; ?>
						</li>

						<li class ="listItem">
							<?php echo $empowerment_listitem5; ?>
						</li>
					</ul>
				</div>
				<div class="listContainBg cell small-12 medium-8 large-7">
					<div class="listResult ">
						<h2>Overview</h2>
						<p><?php echo $empowerment_text1; ?></p>
						<p><?php echo $empowerment_text2; ?></p>
					</div>
				</div>

			
				
			</div>


			<?php
			}
		?>

			
	</section><!-- #primary -->
</main><!-- #main -->

</div>

<?php
// get_sidebar();
get_footer();
