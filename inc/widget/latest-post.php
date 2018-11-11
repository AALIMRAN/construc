<?php
/**
 * Adds construc_latest_post.
 */

class Construc_Latest_Post extends WP_Widget
{
    /**
     * Register widget with WordPress.
     */
    public function __construct()
    {
        parent::__construct(
            'construc_latest_post',
            esc_html__('Construc Latest Post', 'construc'),
            array('description' => esc_html__('Construc Latest Post Widget With Post Thumnail', 'construc'))
        );
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
    */

    public function widget($args, $instance)
    {
        echo $args['before_widget'];
        echo $args['before_title'] .apply_filters('widget_title', esc_html($instance['title'])). $args['after_title'];
        ?>
        <div class="recent-post-widget">
        <ul class="recent-posts">
            <?php
            $postcount = !empty($instance['postcount']) ? $instance['postcount'] : 5;
            $postdate = isset($instance['postdate']) ? $instance['postdate'] : false;
            $defautlpost = new WP_Query(array(
                'post_type' =>  array('post'),
                'posts_per_page'    =>  $postcount

            ));
            while ($defautlpost->have_posts()) :
                $defautlpost->the_post();?>
                    <div class="single-recent-post">
                        <a href="<?php the_permalink(); ?>">
                            <div class="recent-img">
                                <?php the_post_thumbnail('construc-recent-thumn');?>
                            </div>
                            <div class="recent-content">
                                <p><?php the_title(); ?></p>
                                <p><span class="fa fa-clock-o"></span> <?php construc_time(); ?></p>
                            </div>
                        </a>
                    </div>
            <?php endwhile; ?>
                </ul><!-- end latest-tweet -->
            </div><!-- end twitter-widget -->

            <?php

            echo $args['after_widget'];
    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    public function form($instance)
    {

        $title = !empty($instance['title']) ? $instance['title'] : esc_html__('Latest Post', 'construc');
        $postcount = !empty($instance['postcount']) ? $instance['postcount'] : 5;
        $postdate = isset($instance['postdate']) ? (bool) $instance['postdate'] : false;
        ?>
        <p>
        <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:', 'construc'); ?></label>
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>
        <p>
        <label for="<?php echo esc_attr($this->get_field_id('postcount')); ?>"><?php esc_html_e('Post Count:', 'construc'); ?></label>
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('postcount')); ?>" name="<?php echo esc_attr($this->get_field_name('postcount')); ?>" type="text" value="<?php echo esc_attr($postcount); ?>">
        </p>
        <p>
        <label for="<?php echo esc_attr($this->get_field_id('postdate')); ?>"><?php esc_html_e('Date Show:', 'construc'); ?></label>
        <input class="checkbox" id="<?php echo esc_attr($this->get_field_id('postdate')); ?>" name="<?php echo esc_attr($this->get_field_name('postdate')); ?>" type="checkbox"<?php checked($postdate);?>">
        </p>

        <?php
    }


     /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */

    // public function update($new_instance, $old_instance)
    // {
    // }
}


add_action('widgets_init', 'construc_latest_post');

function construc_latest_post()
{
    register_widget('construc_latest_post');
}