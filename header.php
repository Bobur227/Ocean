<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FILM</title>

    <?php wp_head(); ?>

</head>
<body class="main-page">
<header class="header">
    <div class="container">
        <div class="header-content">
            <div class="header-img">
                <?php the_custom_logo(); ?>
            </div>
            <div class="header-registration"><?php if ( is_user_logged_in() ) {
                        ?><a href="<?php echo wp_logout_url( get_permalink() ); ?>" title="Logout">logout</a>
                    <?php }
                    else {
                        echo '<a href="https://ocean/?page_id=193">sign in</a>';
                    }
                ?>
            </div>
        </div>
       
    </div>
    <?php the_content(); ?>
</header>
