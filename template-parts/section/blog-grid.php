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
                $boxshadow = (has_post_thumbnail() ? '' : ' gridborder');
            ?>
            <div class="col-md-6 single-grid-post col-lg-4">
                <div class="single-blog<?php echo esc_attr($boxshadow);?>">
                    <?php if (has_post_thumbnail()): ?>
                    <div class="blog-thumb">
                        <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail(); ?></a>
                         
                    </div>
                    <?php endif; ?>
                    <div class="blog-title">
                        <div class="blog-desc">
                            <a href="<?php the_permalink()?>"><h3><?php the_title(); ?></h3></a>
                            <p><?php echo construc_get_excerpt(100); ?></p>
                        </div>
                    </div>
                <a href="<?php the_permalink(); ?>" class="read-more"><?php esc_html_e('Read More', 'construc'); ?></a>
                </div>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </div>
</div>