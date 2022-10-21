<?php
/**
 * Template Name: Custom Template
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<?/*php while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
<?php endwhile; */?>
<div class="color-bg1" id="about">
        <div class="container">
            <div class="work-line">
                <p class="os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.3s">I have designed</p>
                <p class="os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.5s"><span>1500+</span> Restaurants</p>
                <p class="os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.7s">for <span>300+</span> Brands</p>
                <p class="os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.9s">over the last</p>
                <p class="os-animation" data-os-animation="fadeInUp" data-os-animation-delay="1.1s"><span>25 years</span></p>
            </div>

            <div class="partner-logos os-animation" data-os-animation="fadeInUp" data-os-animation-delay="1.5s">
            <?php
				$args = array(
					'post_type' => 'brands',
					'posts_per_page' => 100
				);
				
				// Query the posts:
				$monaProfile = new WP_Query($args);
				
				// Loop through the obituaries:
				while ($monaProfile->have_posts()) : $monaProfile->the_post();
					echo '<div>';
					echo the_post_thumbnail('full');
					echo '</div>';
				endwhile;
				
				// Reset Post Data
				wp_reset_postdata();
			?>
            </div>

            <div class="testimonial testimonial-type-1">
            <?php
				$args = array(
					'post_type' => 'testimonial_1',
					'posts_per_page' => 1
				);
				
				// Query the posts:
				$testimonial = new WP_Query($args);
                
				
				// Loop through the obituaries:
				while ($testimonial->have_posts()) : $testimonial->the_post();
                $thumbUrl = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
                    echo '<div class="text-text os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.7s">'.get_post_meta($post->ID, 'message', true).'<span class="os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.9s">'.get_post_meta($post->ID, 'sub_message', true).'</span></div>';
                    echo '<div class="img-text">';
                    echo '<img src="'.$thumbUrl.'" class="testi-img-main os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.3s" />';
                    echo '<div class="text os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.5s">';
                    $image_url = get_field('clients_logo');
                    echo '<img src="' . esc_url($image_url) . '" alt="" />';
                    echo '<p>“'.get_post_meta($post->ID, 'clients_message', true).'”</p>';
                    echo '<h4><span>'.get_post_meta($post->ID, 'clients_name', true).',</span>'.get_post_meta($post->ID, 'clients_designation', true).'</h4>';
                    echo '</div>';
                    echo '</div>';
				endwhile;
				
				// Reset Post Data
				wp_reset_postdata();
			?>
            </div>
        </div>
    </div>

    <div class="color-bg2" id="project">
        <div class="container">
            <div class="restaurant">
                <h3 class="os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.2s">Transforming spaces into stories, one restaurant at a time</h3>
                <div class="restaurant-count" id="restaurant-count">
                    <h4>
                        <span><em class="count">1500</em>+</span>
                        Restaurants
                    </h4>
                    <h4>
                        <span><em class="count">300</em>+</span>
                        Brands
                    </h4>
                    <h4>
                        <span><em class="count">2</em>Mn+ sqft</span>
                        of designed area
                    </h4>
                    <h4>
                        <span><em class="count">5</em>+</span>
                        Countries
                    </h4>
                </div>
            </div>
            <div class="testimonial testimonial-type-2">
            <?php
				$args = array(
					'post_type' => 'testimonial_2',
					'posts_per_page' => 1
				);
				
				// Query the posts:
				$testimonial = new WP_Query($args);
                
				
				// Loop through the obituaries:
				while ($testimonial->have_posts()) : $testimonial->the_post();
                    $thumbUrl = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
                    $mob_image_url = get_field('testimonials_mobile_image');
                    $cl_image_url = get_field('clients_logo');

                    echo '<div class="img-text">';
                    echo '<img src="'.$thumbUrl.'" class="testi-img-main hidden-xs os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.3s" />';
                    echo '<img src="' . $mob_image_url . '" alt="" class="testi-img-main visible-xs os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.3s" />';
                    echo '<div class="text os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.7s">';
                    echo '<img src="' . $cl_image_url . '" alt="" />';
                    echo '<p>“'.get_post_meta($post->ID, 'clients_message', true).'”</p>';
                    echo '<h4><span>'.get_post_meta($post->ID, 'clients_name', true).',</span>'.get_post_meta($post->ID, 'clients_designation', true).'</h4>';
                    echo '</div>';
                    echo '</div>';
				endwhile;
				
				// Reset Post Data
				wp_reset_postdata();
			?>
            </div>
        </div>
        <div class="projects">
            <div class="head">
                <h3>Projects</h3><span>Currently Available For Projects Worldwide</span>
            </div>
            <div class="projects-list">
                <?php
                    $args = array(
                        'post_type' => 'projects',
                        'posts_per_page' => 10
                    );
                    
                    // Query the posts:
                    $testimonial = new WP_Query($args);
                    
                    $x = 1;
                    // Loop through the obituaries:
                    while ($testimonial->have_posts()) : $testimonial->the_post();
                        $thumbUrl = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );

                        echo '<div>';
                        echo '<img src="'.$thumbUrl.'" />';
                        echo '<p>0'.$x.'<span>06</span></p>';
                        echo '<h4>'.get_the_title().'<span>'.get_post_meta($post->ID, 'project_location', true).'</span></h4>';
                        echo '</div>';
                        $x++;
                    endwhile;
                    
                    // Reset Post Data
                    wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>
