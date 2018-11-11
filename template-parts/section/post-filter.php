<section class="recent-work section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="project-nav text-center">
                    <ul>
                        <li class="active" data-filter="*">All Project</li>
                        <?php $categories = get_terms( 'category');
                        foreach ($categories as $category) {
                        ?>
                        <li data-filter=".<?php echo $category->slug;?>"><?php echo $category->name; ?></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row projectactive">
            <?php
            $args = array(
                'post_type' =>  array('post'),
                'posts_per_page'    =>  -1,
            );
            $post_query = new WP_Query($args);
            while ($post_query->have_posts()) :
                $post_query->the_post();
            ?>
            <div class="col-md-6 col-lg-4 <?php
            $categories = get_the_terms(get_the_id(), 'category');
            if ($categories != false) {
                foreach ($categories as $category) {
                    $sluglink = $category->slug;
                    echo $sluglink . ' ';
                }
            }?>">
                <div class="single-project project-three project-second" style="background-image: url(<?php the_post_thumbnail_url();?>);">
                    <div class="project-desc">
                        <div class="project-desc-content">
                            <a href="<?php the_permalink();?>"><h4><?php the_title(); ?></h4></a>
                            <p><?php echo construc_get_excerpt(80); ?></p>
                            <a class="read-more" href="<?php echo the_permalink();?>"><?php esc_html_e('Read More', 'construc'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="load-more-button">
                    <a href="#" class="btn btn-default button-primary">See All Works</a>
                </div>
            </div>
        </div>
    </div>
</section>