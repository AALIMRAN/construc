<section class="main-slider-area">
    <div class="active-main-slider owl-carousel">
        <?php
        $image = get_theme_file_uri( 'asset/img/home1.jpg' );
        $title = 'We Make Your <br> Dream Into Reality';
        $description = 'The European languages are members of the same family. Their separate existence is a myth.<br> For science,  music, sport, etc, Europe uses the same vocabulary.';
        $buttontext = 'Get Started';
        $buttonlink = '#';
        ?>
        <div class="main-slider-item" style="background-image: url(<?php echo esc_url(get_theme_mod('slider_image_one', $image));?>);">
            <div class="slider-one-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-left">
                            <div class="main-slider-welcome-text">
                                <div class="slider-cell">
                                    <h2 class="main-title" data-animation-in="fadeInRight" data-animation-out="animate-out fadeOutRight"><?php echo wp_kses_post(get_theme_mod('slider_title_one', $title)); ?></h2>
                                    <h2 class="sub-title" data-animation-in="fadeInRight" data-animation-out="animate-out fadeOutRight"><?php echo wp_kses_post(get_theme_mod('slider_description_one', $description)); ?></h2>
                                    <div class="welcome-button" data-animation-in="fadeInLeft" data-animation-out="animate-out fadeOutLeft">
                                        <a href="<?php echo esc_url(get_theme_mod('slider_button_one_link', $buttonlink));?>" class="btn btn-default button-primary"><?php echo esc_html( get_theme_mod('slider_button_one_text', $buttontext) ) ?></a>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-slider-item" style="background-image: url(<?php echo esc_url(get_theme_mod('slider_image_two', $image));?>);">
            <div class="slider-one-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-left">
                            <div class="main-slider-welcome-text">
                                <div class="slider-cell">
                                    <h2 class="main-title" data-animation-in="fadeInRight" data-animation-out="animate-out fadeOutRight"><?php echo wp_kses_post(get_theme_mod('slider_title_two', $title)); ?></h2>
                                    <h2 class="sub-title" data-animation-in="fadeInRight" data-animation-out="animate-out fadeOutRight"><?php echo wp_kses_post(get_theme_mod('slider_description_two', $description)); ?></h2>
                                    <div class="welcome-button" data-animation-in="fadeInLeft" data-animation-out="animate-out fadeOutLeft">
                                        <a href="<?php echo esc_url(get_theme_mod('slider_button_two_link', $buttonlink));?>" class="btn btn-default button-primary"><?php echo esc_html( get_theme_mod('slider_button_two_text', $buttontext) ) ?></a>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-slider-item" style="background-image: url(<?php echo esc_url(get_theme_mod('slider_image_three', $image));?>);">
            <div class="slider-one-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-left">
                            <div class="main-slider-welcome-text">
                                <div class="slider-cell">
                                    <h2 class="main-title" data-animation-in="fadeInRight" data-animation-out="animate-out fadeOutRight"><?php echo wp_kses_post(get_theme_mod('slider_title_three', $title)); ?></h2>
                                    <h2 class="sub-title" data-animation-in="fadeInRight" data-animation-out="animate-out fadeOutRight"><?php echo wp_kses_post(get_theme_mod('slider_description_three', $description)); ?></h2>
                                    <div class="welcome-button" data-animation-in="fadeInLeft" data-animation-out="animate-out fadeOutLeft">
                                        <a href="<?php echo esc_url(get_theme_mod('slider_button_three_link', $buttonlink));?>" class="btn btn-default button-primary"><?php echo esc_html( get_theme_mod('slider_button_three_text', $buttontext) ) ?></a>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>