<?php 
	// get_header();
?>
<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Coming Soon</title>
        <link rel="icon" type="image/x-icon" href="images/favicon.png">
        <?php wp_head(); ?>
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="stylesheet" href="https://use.typekit.net/lgk7qgt.css">

        <style>
            /*-- Google Fonts --*/
            @import url("https://fonts.googleapis.com/css?family=ZCOOL+QingKe+HuangYou");

            body {
                background-image: url("<?php echo get_stylesheet_directory_uri(); ?>/images/bg-2.png");
                background-size: cover;
                background-attachment: fixed;
                font-family: 'BenchNine', Verdana, Geneva, Tahoma, sans-serif;
            }
            .overlay {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: #000;
                opacity: 0.5;
                z-index: 1;
            }

            h1 {
                font-family: 'velour-regular', Verdana, Geneva, Tahoma, sans-serif;
                font-size: 72px;
                color: #f6cd7e;
                position: relative;
            }

            #main {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translateX(-50%) translateY(-50%);
                color: #fff;
                z-index: 2;
                color: #f6cd7e;
            }

            p {
                font-size: 21px;
            }

            #footer {
                position: absolute;  
                bottom: 12px; 
                z-index: 2;
            }

            #footer p {
                font-size: 16px;
            }

            .loader {
                width: 12px;
                height: 12px;
                border-radius: 50%;
                color: #f6cd7e;
                animation: fill 1s ease-in infinite alternate;
                position: absolute;
                right: -10px;
                bottom: 20px;
            }

            .loader::before , .loader::after {
                content: '';
                position: absolute;
                height: 100%;
                width: 100%;
                border-radius: 50%;
                left: 16px;
                top: 0;
                animation: fill 0.9s ease-in infinite alternate;
            }

            .loader::after {
                left: auto;
                right: 16px;
                animation-duration: 1.1s;
            }

            @keyframes fill {
                0% {  box-shadow: 0 0 0 2px inset }
                100%{ box-shadow: 0 0 0 10px inset }
            }
        </style>
    </head>

    <body>
        <div class="overlay"></div>
        <div class="container">
            <div id="main" class="d-flex justify-content-center align-items-center p-2">
                <div class="container text-center">
                    <h1 class="w-100 mb-3" style="display: flex; justify-content: center;"><span style="padding-right: 40px;">Coming soon</span> <span class="loader"></span></h1>

                    <div style="display: flex; justify-content: center; align-items: center;">
                        <!-- Spinner -->
                        
                        <!-- END Spinner -->
                    </div>

                    <p class="mt-3">Our website is currently doing something different.</p>
                </div>
            </div>

            <div id="footer" class="container text-center text-white">
                <p>&copy;© 2023 - Marike van der Velden - All rights reserved</p>
            </div>
        </div>

		<?php wp_footer(); ?>
        <!-- Bootstrap JS -->
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.bundle.min.js"></script>
        <!-- App JS -->
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/app.js"></script>
    </body>
</html>

    <!-- <section class="main">
        <div class="section">
            <div class="section-banner">
            <?php 
                    $banner_title = get_field('banner_title');
                    $banner_subtitle = get_field('banner_subtitle');
                    $banner_image = get_field('banner_image');
                ?>
                <div class="banner-image" style="background-image: url('<?php echo $banner_image ?>');">
                    <div class="container">
                        <div class="banner-text">
                            <h1><?php echo $banner_title ?></h1>
                            <p class="bench"><?php echo $banner_subtitle ?></p>
                        </div>
                    </div>
                </div>

                <div class="field">
                    <div class="mouse"></div>
                </div>
            </div>

            <?php 
                $about_title = get_field('about_title');
                $about_subtitle = get_field('about_subtitle');
            ?>
            <?php if( !empty($about_title) || !empty($about_subtitle) ): ?>
                <div class="section-about">
                    <div class="container h-100">
                        <div class="row m-0 h-100">
                            <div class="col-md-12 left">
                                <div class="text-box h-100">
                                    <?php if( !empty($about_title) ): ?>
                                        <h1><?php echo $about_title ?></h1>
                                    <?php endif; ?>

                                    <?php if( !empty($about_subtitle) ): ?>
                                        <p><?php echo $about_subtitle ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if( have_rows('tiktok') ): ?>
                <div class="section-tiktok">
                    <div class="container">
                        <div class="row m-0">
                            <?php
                                while( have_rows('tiktok') ) : the_row();

                                $tiktok_title = get_sub_field('tiktok_title');
                                $tiktok_subtitle = get_sub_field('tiktok_subtitle');
                                $tiktok_embed_code = get_sub_field('tiktok_embed_code');
                            ?>
                                <div class="col-md-3 mb-4">
                                    <div class="tiktok-video">
                                        <div class="content-text">
                                            <p class="title-video"><?php echo $tiktok_title ?></p>
                                        </div>
                                        <div>
                                            <?php echo $tiktok_embed_code ?>
                                        </div>
                                        <div class="content-text">
                                            <p><?php echo $tiktok_subtitle ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php 
                $contact_title = get_field('contact_title');
                $contact_button_text = get_field('contact_button_text');
                $contact_button_link = get_field('contact_button_link');
            ?>
            <?php if( !empty($contact_title) || !empty($contact_button_text) ): ?>
                <div class="section-contact">
                    <div class="container h-100">
                        <div class="row m-0 h-100">
                            <div class="col-md-12 left">
                                <div class="text-box h-100">
                                    <?php if( !empty($contact_title) ): ?>
                                        <h1><?php echo $contact_title ?></h1>
                                    <?php endif; ?>

                                    <?php if( !empty($contact_button_text) ): ?>
                                        <div class="button">
                                            <a href="<?php echo $contact_button_link ?>" target="_blank" class="button-dark">
                                                <?php echo $contact_button_text ?>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section> -->
<?php
	// get_footer();
?>