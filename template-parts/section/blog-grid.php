<div class="blog-area blog-grid-page section-padding">
    <div class="container">
        <div class="row masaonarygrid">
            <?php
            $args = array(
                'post_type' =>  array('post'),
                'posts_per_page'    =>  -1,
            );
            $post_query = new WP_Query($args);
            while ($post_query->have_posts()) :
                $post_query->the_post();
            ?>
            <div class="col-md-6 single-grid-post col-lg-4">
                <div class="single-blog gridborder">
                    <div class="blog-title">
                        <div class="blog-desc">
                            <a href="<?php the_permalink()?>"><h3><?php the_title(); ?></h3></a>
                            <p><?php echo wp_kses_post(construc_get_excerpt(100)); ?></p>
                        </div>
                    </div>
                <a href="<?php the_permalink(); ?>" class="read-more"><?php esc_html_e('Read More', 'construc'); ?></a>
                </div>
            </div>
            <?php
            endwhile;
            wp_reset_postdata(); ?>
        </div>
    </div>
</div>