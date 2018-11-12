 <!-- start our blog section -->
<section class="blog-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-title">
                    <h2><?php echo esc_html(get_theme_mod( 'blog_main_title', 'Our Blog' )); ?></h2>
                    <p><?php echo esc_html(get_theme_mod( 'blog_subtitle', 'Below all of our latest post available' )); ?></p>
                </div>
            </div>
        </div>
        <div class="row blog-slider-active">
            <?php
            $sliderpost = new WP_Query(array(
                'post_type' =>  'post',
                'posts_per_page'    =>  10,
            ));
            while ($sliderpost->have_posts()) :
                $sliderpost->the_post();
            ?>
                <div class="single-blog">
                    <div class="blog-thumb">
                        <a href="<?php the_permalink();?>"><?php the_post_thumbnail( 'construc-thumbnail' ); ?></a>
                         <div class="date">
                            <h4>30 <span>jan</span></h4>
                        </div>
                    </div>
                    <div class="blog-title">
                        <div class="blog-desc">
                            <a href="<?php the_permalink();?>"><h3><?php the_title(); ?></h3></a>
                            <p><?php echo wp_kses_post(construc_get_excerpt(100)); ?></p>
                        </div>
                    </div>
                    <a href="<?php the_permalink();?>" class="read-more"><?php esc_html_e('Read more', 'construc');?></a>
                </div>
        <?php
        endwhile;
        wp_reset_postdata();
         ?>
        </div>
    </div>
</section>