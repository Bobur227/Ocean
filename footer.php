
<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-app">
                <div class="footer-app_text">
                    <img src="<?php bloginfo('template_url'); ?>/assets/image/hochuvkino.png" alt="">
                    <div class="title">
                        <h1><?php the_field('title-f')?></h1>
                        <p><?php the_field('triger-f')?></p>
                    </div>
                </div>
                <div class="footer-app_btn">
                    <a href="<?php the_field('app_store')?>"><img src="<?php bloginfo('template_url'); ?>/assets/image/button/app-store.svg" alt=""></a>
                    <a href="<?php the_field('play_market')?>"><img src="<?php bloginfo('template_url'); ?>/assets/image/button/google-play.svg" alt=""></a>
                </div>
            </div>

            <div class="horizontal">
                <hr>
            </div>

            <div class="footer-contact">
                <h3><?php the_field('reviews')?></h3>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>

</body>
</html>