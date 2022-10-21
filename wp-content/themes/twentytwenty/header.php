<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<title>Sprinteriors</title>
		<link rel="profile" href="https://gmpg.org/xfn/11">
		<link href="https://api.fontshare.com/v2/css?f[]=satoshi@700,500,400,300&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/page.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/slick.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/js/slick.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/js/waypoints.min.js"></script>
		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>


	<div class="first-scroll">
        <div class="header">
            <div class="container">
                <div class="f-mob">
                    <div class="logo">
                        <a href="<?php echo home_url(); ?>">
                            <img src="<?php bloginfo('template_url'); ?>/img/logo.svg" class="logo-n" />
                            <img src="<?php bloginfo('template_url'); ?>/img/logo-fixed.png" class="logo-f" />
                        </a>
                    </div>
                    <div class="menu-nav visible-xs"></div>
                </div>
				
                <div class="menu">
                    <ul>
                        <li><a href="#about" class="scrollTo">About</a></li>
                        <li><a href="#project" class="scrollTo">Projects</a></li>
                        <li><a href="#contact" class="scrollTo">Contact</a></li>
                        <li class="menu-l">
                            <a href="https://www.linkedin.com/in/sonamantri/">
                                <div class="menu-l-text">
                                    <img src="<?php bloginfo('template_url'); ?>/img/linkedin-icn-menu.svg" />
                                    Sona’s LinkedIn
                                </div>
                                <img src="<?php bloginfo('template_url'); ?>/img/red-arrow-icn.svg" class="menu-l-arrow" />
                            </a>
                        </li>
                        <li class="menu-l">
                            <a href="https://www.sprinteriors.com/">
                                <div class="menu-l-text">
                                    <img src="<?php bloginfo('template_url'); ?>/img/globe-icn-menu.svg" />
                                    Visit Sprinteriors
                                </div>
                                <img src="<?php bloginfo('template_url'); ?>/img/red-arrow-icn.svg" class="menu-l-arrow" />
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="scroll-text"><img src="<?php bloginfo('template_url'); ?>/img/scroll-text.svg" /></div>
        <div class="container">
			<?php
				$args = array(
					'post_type' => 'sona_profile',
					'posts_per_page' => 1
				);
				
				// Query the posts:
				$monaProfile = new WP_Query($args);
				$temp_url = "http://localhost/sprinteriors/wp-content/uploads/2022/10";
				
				// Loop through the obituaries:
				while ($monaProfile->have_posts()) : $monaProfile->the_post();
					echo '<div class="top-content">';
					echo '<h1 class="os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.3s">'.get_post_meta($post->ID, 'name', true).'</h1>';
					echo '<h4 class="os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.6s">'.get_post_meta($post->ID, 'designation', true).'</h4>';
					echo '</div>';
					echo '<div class="sona-pic os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.9s">';
					echo the_post_thumbnail('full');
					echo '<div class="sona-pic-note">';
					echo '<div class="sona-pic-note-area">';
					echo '<img src="'.$temp_url.'/bag-icn.svg" />';
					echo '</div>';
					echo '<div class="sona-pic-note-content">Biggest F&B design portfolio in India</div>';
					echo '</div>';
					echo '</div>';
					echo '<div class="text1 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.5s">'.get_post_meta($post->ID, 'message', true).'</div>';
					echo '<div class="lets-talk os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.5s">';
					echo '<a href="#contact" class="scrollTo">';
					echo '<span>Let’s<br>Talk</span>';
					echo '<img src="'.$temp_url.'/lets-talk-bg.svg" />';
					echo '</a>';
					echo '</div>';
					echo '<div class="f-linkedin os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.5s">';
					echo '<a href="'.get_post_meta($post->ID, 'linkedin_profile_url', true).'" target="_blank">';
					echo '<img src="'.$temp_url.'/linkedin-icn.svg" class="f-l" />';
					echo 'Follow me on LinkedIn';
					echo '<img src="'.$temp_url.'/red-arrow-icn.svg" class="f-l-arrow" />';
					echo '</a>';
					echo '</div>';
				endwhile;
				
				// Reset Post Data
				wp_reset_postdata();
			?>
        </div>
    </div>