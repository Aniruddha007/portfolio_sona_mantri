<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
			<div class="footer" id="contact">
        <div class="footer-form">
            <div class="ff-text os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.9s">
                <h3>What does <span>Sprinteriors</span> offer</h3>
                <p>My interior design company, Sprinteriors, provides end-to-end solution for restaurant launch</p>
                <ul>
                    <li>Design & Decor</li>
                    <li>Fitout</li>
                    <li>Project Management</li>
                    <li>Sourcing of commercial kitchen equipment & furniture</li>
                    <li>Branding</li>
                </ul>
            </div>
            <div class="ff-form os-animation" data-os-animation="fadeInUp" data-os-animation-delay="1.4s">
                <?php
                    echo do_shortcode('[contact-form-7 id="133" title="Contact Form Footer"]');
                ?>
            </div>
        </div>
        <div class="os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.5s">
            <div class="footer-email" data-value="sona@sprinteriors.com" onclick="copyToClipboard()">
                Sona@sprinteriors<span>.com</span>
            </div>
            <div class="footer-copy">
                <div class="fc-right">
                    <div class="f-linkedin f-globe">
                        <a href="https://www.sprinteriors.com/" target="_blank">
                            <img src="<?php bloginfo('template_url'); ?>/img/globe-icn.svg" class="f-l" />
                            Visit Sprinteriors
                            <img src="<?php bloginfo('template_url'); ?>/img/red-arrow-icn.svg" class="f-l-arrow" />
                        </a>
                    </div>
    
                    <div class="f-linkedin">
                        <a href="https://www.linkedin.com/in/sonamantri/" target="_blank">
                            <img src="<?php bloginfo('template_url'); ?>/img/linkedin-icn.svg" class="f-l" />
                            Follow me on LinkedIn
                            <img src="<?php bloginfo('template_url'); ?>/img/red-arrow-icn.svg" class="f-l-arrow" />
                        </a>
                    </div>
                </div>
                <div class="fc-left">
                    © 2022 Sprinteriors. All Rights Reserved.
                </div>
            </div>
        </div>
    </div>

		<?php wp_footer(); ?>
		<script>

        $(window).scroll(function () {
            var firstScroll = $('.first-scroll').height();
            if ($(window).scrollTop() > 150) {
                $('.scroll-text').fadeOut();
            }
            if($(window).innerWidth() > 767) {
                if ($(window).scrollTop() > 80) {
                    $('.first-scroll').addClass('header-fixed');
                } else {
                    $('.first-scroll').removeClass('header-fixed');
                }
            }
        });
        $(window).scroll(startCounter);
        function startCounter() {
            let scrollY = (window.pageYOffset || document.documentElement.scrollTop) + window.innerHeight;
            let divPos = document.querySelector('#restaurant-count').offsetTop;

            if (scrollY > divPos) {
                $(window).off("scroll", startCounter);

                $('.count').each(function () {
                    var $this = $(this);
                    jQuery({
                        Counter: 0
                    }).animate({
                        Counter: $this.text().replace(/,/g, '')
                    }, {
                        duration: 1000,
                        easing: 'swing',
                        step: function () {
                            $this.text(commaSeparateNumber(Math.floor(this.Counter)));
                        },
                        complete: function () {
                            $this.text(commaSeparateNumber(this.Counter));
                            //alert('finished');
                        }
                    });
                });

                function commaSeparateNumber(num) {
                    return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, "");
                }
            }
        }
        $(document).ready(function () {
            $('.input-group input').focus(function(){
                $(this).parent().parent().find('label').addClass('focus');
            });
            $('.input-group input').bind('blur', function(){
                if($(this).val() == '') {
                    $(this).parent().parent().find('label').removeClass('focus');
                }
            });
            $('.partner-logos').slick({
                rows: 2,
                dots: true,
                arrows: false,
                infinite: true,
                slidesToShow: 6,
                slidesToScroll: 6,
                autoplay: true,
                autoplaySpeed: 3000,
                speed: 1500,
                pauseOnFocus: false,
                pauseOnHover: false,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 6,
                            slidesToScroll: 6
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3
                        }
                    }
                ]
            });
            $('.projects-list').slick({
                // fade: true,
                centerMode: true,
                centerPadding: '250px',
                dots: false,
                infinite: true,
                speed: 1500,
                slidesToShow: 1,
                slidesToScroll: 1,
                responsive: [
                    {
                        breakpoint: 992,
                        settings: {
                            centerPadding: '150px',
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            centerPadding: '0px',
                        }
                    }
                ]
            });

            $(".scrollTo").on('click', function(e) {
                e.preventDefault();
                var target = $(this).attr('href');
                $('html, body').animate({
                scrollTop: ($(target).offset().top)
                }, 2000);
            });

            $('.menu-nav').click(function() {
                $(this).toggleClass('opened');
                $('.menu').slideToggle();
            });

            if($(window).innerWidth() < 768) {
                $('.sona-pic-note').click(function(){
                    $(this).toggleClass('hover');
                });
            }


            $(document).mouseup(function(e) 
            {
                var container = $(".sona-pic-note");
                if (!container.is(e.target) && container.has(e.target).length === 0) 
                {
                    container.removeClass('hover');
                }
            });
        });

        function copyToClipboard(event) {
            var temp = $("<input>");
            $("body").append(temp);
            temp.val($('.footer-email').data('value')).select();
            document.execCommand("copy");
            temp.remove();
            $('.footer-email').addClass('copied');
            setTimeout(function(){
                $('.footer-email').removeClass('copied');
            }, 2000);
        }

        $(function(){
            function onScrollInit( items, trigger ) {
                items.each( function() {
                var osElement = $(this),
                    osAnimationClass = osElement.attr('data-os-animation'),
                    osAnimationDelay = osElement.attr('data-os-animation-delay');
                  
                    osElement.css({
                        '-webkit-animation-delay':  osAnimationDelay,
                        '-moz-animation-delay':     osAnimationDelay,
                        'animation-delay':          osAnimationDelay
                    });

                    var osTrigger = ( trigger ) ? trigger : osElement;
                    
                    osTrigger.waypoint(function() {
                        osElement.addClass('animated').addClass(osAnimationClass);
                        },{
                            triggerOnce: true,
                            offset: '90%'
                    });
                });
            }

            onScrollInit( $('.os-animation') );
            onScrollInit( $('.staggered-animation'), $('.staggered-animation-container') );
	  });
    </script>
	</body>
</html>
