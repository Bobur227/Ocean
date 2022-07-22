<?php
/*
Template Name: Home
*/
?>
<?php get_header(); ?>



<div class="main">
    <section class="our-story-cards">
        <div class="our-story-card-background">
            <div class="concord-img-wrapper">
                <img class="concord-img-gradient" src="<?php bloginfo('template_url'); ?>/assets/image/bg.jpg" alt="">
                <div class="concord-img-gradient"></div>
            </div>
            <div class="our-story-card-text">
                <h1><?php the_field('title')?></h1>
                <h2><?php the_field('triger')?></h2>
                <div class="email-form-lockup">
                    <div class="input_id">
                        <input type="email" class="nfTextField" placeholder="Email address">
                    </div>
                    <div class="our-story-cta-container">
                        <button class="btn"> Get started
                            <img src="<?php bloginfo('template_url'); ?>/assets/image/icon/next.svg" alt="">
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <div class="horizontal">
        <hr>
    </div>

    <section class="epic-showcase-shelf">
        <div class="container">
            <div class="showcase-shelf">
                <a href="#" class="showcase-item">
                    <img src="<?php bloginfo('template_url'); ?>/assets/image/card/Бэтмен.jpg" alt="">
                </a>
                <a href="#" class="showcase-item">
                    <img src="<?php bloginfo('template_url'); ?>/assets/image/card/В королевском стиле.jpg" alt="">
                </a>
                <a href="#" class="showcase-item">
                    <img src="<?php bloginfo('template_url'); ?>/assets/image/card/Гарри Потер.jpg" alt="">
                </a>
                <a href="#" class="showcase-item">
                    <img src="<?php bloginfo('template_url'); ?>/assets/image/card/Любовь как искупление.jpg" alt="">
                </a>
                <a href="#" class="showcase-item">
                    <img src="<?php bloginfo('template_url'); ?>/assets/image/card/Любовь на поводке.jpg" alt="">
                </a>
                <a href="#!" class="showcase-item">
                    <img src="<?php bloginfo('template_url'); ?>/assets/image/card/Монстры на каникулах.jpg" alt="">
                </a>
                <a href="#" class="showcase-item">
                    <img src="<?php bloginfo('template_url'); ?>/assets/image/card/Орел и Решка.jpg" alt="">
                </a>
                <a href="#" class="showcase-item">
                    <img src="<?php bloginfo('template_url'); ?>/assets/image/card/Шкатулка дьявола.jpg" alt="">
                </a>
            </div>
        </div>
    </section>

    <div class="horizontal">
        <hr>
    </div>

    <section class="grid">
            <div class="container">
                <div class="grid-wrapper">
                    <div class="grid-wrapper-1">
                        <div class="grid-item">
                            <div class="grid-img">
                                <img class="second" src="<?php bloginfo('template_url'); ?>/assets/image/grid/Бэтмен.jpg" alt="">
                                <img class="first" src="<?php bloginfo('template_url'); ?>/assets/image/grid-bg/Бэтмен.jpg" alt="">
                                <div class="grid-content">
                                    <a href="#!"><h5></h5></a>
                                    <a href="#!"><img class="grid-content_svg" src="<?php bloginfo('template_url'); ?>/assets/image/Play.svg" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="grid-img">
                                <img class="second" src="<?php bloginfo('template_url'); ?>/assets/image/grid/В королевском стиле.jpg" alt="">
                                <img class="first" src="<?php bloginfo('template_url'); ?>/assets/image/grid-bg/В королевском стиле.jpg" alt="">
                                <div class="grid-content">
                                    <a href="#!"><h5></h5></a>
                                    <a href="#!"><img class="grid-content_svg" src="<?php bloginfo('template_url'); ?>/assets/image/Play.svg" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="grid-img">
                                <img class="second" src="<?php bloginfo('template_url'); ?>/assets/image/grid/Гарри Потер.jpg" alt="">
                                <img class="first" src="<?php bloginfo('template_url'); ?>/assets/image/grid-bg/Гарри Потер.jpg" alt="">
                                <div class="grid-content">
                                    <a href="#!"><h5></h5></a>
                                    <a href="#!"><img class="grid-content_svg" src="<?php bloginfo('template_url'); ?>/assets/image/Play.svg" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="grid-img">
                                <img class="second" src="<?php bloginfo('template_url'); ?>/assets/image/grid/Любовь как искупление.jpg" alt="">
                                <img class="first" src="<?php bloginfo('template_url'); ?>/assets/image/grid-bg/Любовь как искупление.jpg" alt="">
                                <div class="grid-content">
                                    <a href="#!"><h5></h5></a>
                                    <a href="#!"><img class="grid-content_svg" src="<?php bloginfo('template_url'); ?>/assets/image/Play.svg" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="grid-img">
                                <img class="second" src="<?php bloginfo('template_url'); ?>/assets/image/grid/Любовь на поводке.jpg" alt="">
                                <img class="first" src="<?php bloginfo('template_url'); ?>/assets/image/grid-bg/Любовь на поводке.jpg" alt="">
                                <div class="grid-content">
                                    <a href="#!"><h5></h5></a>
                                    <a href="#!"><img class="grid-content_svg" src="<?php bloginfo('template_url'); ?>/assets/image/Play.svg" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="grid-img">
                                <img class="second" src="<?php bloginfo('template_url'); ?>/assets/image/grid/Монстры на каникулах.jpg" alt="">
                                <img class="first" src="<?php bloginfo('template_url'); ?>/assets/image/grid-bg/Монстры на каникулах.jpg" alt="">
                                <div class="grid-content">
                                    <a href="#!"><h5></h5></a>
                                    <a href="#!"><img class="grid-content_svg" src="<?php bloginfo('template_url'); ?>/assets/image/Play.svg" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="grid-img">
                                <img class="second" src="<?php bloginfo('template_url'); ?>/assets/image/grid/Шкатулка дьявола.jpg" alt="">
                                <img class="first" src="<?php bloginfo('template_url'); ?>/assets/image/grid-bg/Шкатулка дьявола.jpg" alt="">
                                <div class="grid-content">
                                    <a href="#!"><h5></h5></a>
                                    <a href="#!"><img class="grid-content_svg" src="<?php bloginfo('template_url'); ?>/assets/image/Play.svg" alt=""></a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="grid-wrapper-2">
                        <div class="grid-item">
                            <div class="grid-img">
                                <img class="second" src="<?php bloginfo('template_url'); ?>/assets/image/grid/Fistful of Vengeance.jpg" alt="">
                                <img class="first" src="<?php bloginfo('template_url'); ?>/assets/image/grid-bg/Fistful of Vengeance.jpg" alt="">
                                <div class="grid-content">
                                    <a href="#!"><h5></h5></a>
                                    <a href="#!"><img class="grid-content_svg" src="<?php bloginfo('template_url'); ?>/assets/image/Play.svg" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="grid-img">
                                <img class="second" src="<?php bloginfo('template_url'); ?>/assets/image/grid/Gehraiyaan.jpg" alt="">
                                <img class="first" src="<?php bloginfo('template_url'); ?>/assets/image/grid-bg/Gehraiyaan.jpg" alt="">
                                <div class="grid-content">
                                    <a href="!#"><h5></h5></a>
                                    <a href="#!"><img class="grid-content_svg" src="<?php bloginfo('template_url'); ?>/assets/image/Play.svg" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="grid-img">
                                <img class="second" src="<?php bloginfo('template_url'); ?>/assets/image/grid/servant.jpg" alt="">
                                <img class="first" src="<?php bloginfo('template_url'); ?>/assets/image/grid-bg/servant.jpg" alt="">
                                <div class="grid-content">
                                    <a href="#!"><h5></h5></a>
                                    <a href="#!"><img class="grid-content_svg" src="<?php bloginfo('template_url'); ?>/assets/image/Play.svg" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="grid-img">
                                <img class="second" src="<?php bloginfo('template_url'); ?>/assets/image/grid/TEXAS CHAINSAW MASSACRE.jpg" alt="">
                                <img class="first" src="<?php bloginfo('template_url'); ?>/assets/image/grid/TEXAS CHAINSAW MASSACRE.jpg" alt="">
                                <div class="grid-content">
                                    <a href="!#"><h5></h5></a>
                                    <a href="#!"><img class="grid-content_svg" src="<?php bloginfo('template_url'); ?>/assets/image/Play.svg" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="grid-img">
                                <img class="second" src="<?php bloginfo('template_url'); ?>/assets/image/grid/Through My Window.jpg" alt="">
                                <img class="first" src="<?php bloginfo('template_url'); ?>/assets/image/grid/Through My Window.jpg" alt="">
                                <div class="grid-content">
                                    <a href="!#"><h5></h5></a>
                                    <a href="#!"><img class="grid-content_svg" src="<?php bloginfo('template_url'); ?>/assets/image/Play.svg" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="grid-img">
                                <img class="second" src="<?php bloginfo('template_url'); ?>/assets/image/grid/Аферист из Tinder.jpg" alt="">
                                <img class="first" src="<?php bloginfo('template_url'); ?>/assets/image/grid-bg/Аферист из Tinder.jpg" alt="">
                                <div class="grid-content">
                                    <a href="!#"><h5></h5></a>
                                    <a href="#!"><img class="grid-content_svg" src="<?php bloginfo('template_url'); ?>/assets/image/Play.svg" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="grid-img">
                                <img class="second" src="<?php bloginfo('template_url'); ?>/assets/image/grid/Tall Girl 2.jpg" alt="">
                                <img class="first" src="<?php bloginfo('template_url'); ?>/assets/image/grid-bg/Tall Girl 2.jpg" alt="">
                                <div class="grid-content">
                                    <a href="!#"><h5></h5></a>
                                    <a href="#!"><img class="grid-content_svg" src="<?php bloginfo('template_url'); ?>/assets/image/Play.svg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <div class="horizontal">
        <hr>
    </div>

 
    <section class="slick-list">
        <div class="container ">
            <div class=" slider">


            <?php
            global $post;

            $myposts = get_posts([ 
                'numberposts' => -1,
                //'offset'      => 1,
                'category_name' => 'Слайдер' 
            ]);

            if( $myposts ){
                foreach( $myposts as $post ){
                    setup_postdata( $post );
                    ?>
                    <div class="slider_item">
                        <div class="slider_item-img">
                            <!-- <img data-lazy="<?php bloginfo('template_url'); ?>/assets/image/slick/servant.jpg" alt=""> -->
                            <?php 
                            the_post_thumbnail(
                                array(380,250)
                            );
                            ?>
                        </div>
                    <div class="first-card-content">
                        <a href="#"><h3>Horror </h3></a>
                        <a href="#"><h4><?php the_title(); ?></h4></a>
                        <a href="#"><p><?php the_content(); ?></p></a>
                    </div>
                </div>
                    <?php 
                }
            } 

            wp_reset_postdata();
            ?>
            </div>
        </div>
    </section>
    
<?php
get_footer();