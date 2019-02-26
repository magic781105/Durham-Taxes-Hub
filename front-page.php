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
			if (function_exists('get_field')){
				$eligible = get_field('header');
				?>
				
				<div class="yo">
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
							<div class="yo1" style="background-image:url(<?php echo $image['url'];?>);">
								<h1 class="header_title"><?php echo $header ?></h1>
								<p class="header_desc"><?php echo $content ?></p>
								<div class="form">
									<input id="userInput" placeholder="$30000" value="30000"/>
									<button id="inputCheck">Am I Eligible?</button>
								</div>
								<button class="header_button">Be a Volunteer!</button>
							</div>
						</section>

						<?php
					}
					?>
				</div>
				<?php
			}

			// navigation menu
			if (function_exists('get_field')){
				$navigation_menu = get_field('menu_bar');
				?>
				
				<div class="menu_bar">
				<nav>
					<img src ="assets/img/nav.png" alt="nav"/>
					<ul>
						<?php
						// var_dump($nav_menu);
						foreach($navigation_menu as $nav_menu) {
							$icon = $nav_menu['nav_div1'];
							$text = $nav_menu['nav_div2'];
						?>
						<div class="nav-menu">
							<div class="nav-border">
								<li class="menu-list">
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

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
// get_footer();
