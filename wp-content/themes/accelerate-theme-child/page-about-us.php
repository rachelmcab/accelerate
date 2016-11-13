<?php
/**
 * The template for displaying a single About Us page
 *
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

<section class="about-page">
	<div class="site-content">
		<div class="hero">

		<?php while ( have_posts() ) : the_post(); 

			$services_hed = get_field('services_hed');
			$services_dek = get_field('services_dek');

			$image = get_field('image');
			$float = get_field('image_alignment');

		?>
			<?php the_content(); ?>

		<?php endwhile; // end of the loop. ?>

		</div>
	</div><!-- .site-content -->
</section><!-- .about-page -->

<!-- Our Services Intro section -->

<section class="our-services">
	<div class="site-content">
		<div class="our-services-intro">	
			<h4><?php echo $services_hed; ?></h4>
			<p><?php echo $services_dek; ?></p>
		</div>
	</div>


<!-- Services section -->

<section class="services">
	<div class="site-content">

		<div class="service_posts clearfix">

			<?php query_posts('post_type=services&order=ASC') ?>

			<?php while ( have_posts() ) : the_post(); 
					$image = get_field('image');
					$float = get_field('image_alignment'); 
					$size = "full";
					?>

				<div class="one_post clearfix">
					<figure class="services_image_<?php echo $float ?>">
						<?php echo wp_get_attachment_image( $image, $size ); ?>
					</figure>

					<div class="services_text_<?php echo $float ?>">
						<h3><?php the_title(); ?></h3>
						<p><?php the_content(); ?></p>
					</div>
				</div>

			
			<?php endwhile; // end of the loop. ?>

			</div>
		</div>	
</section>

<!-- Contact Us button section -->
<section class="about-contact">
	<div class="site-content">

		<div class="about-contact-button clearfix">
			<h2>Interested in working with us?</h2>
			<a class="button about-contact-link" href="<?php echo home_url(); ?>/contact-us">Contact Us</a>
		</div>
	</div>

</section>

<?php get_footer(); ?>