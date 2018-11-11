<?php
/**
 * Adds Construc_Services_Widget.
 */

class Construc_Services_Widget extends WP_Widget
{
    /**
     * Register widget with WordPress.
     */
    public function __construct()
    {
        parent::__construct(
            'services-widget-category',
            esc_html__('construc Services Post', 'construc'),
            array('description' => esc_html__('construc latest Services widget', 'construc'))
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
        echo wp_kses_post($args['before_widget']);
        if (!empty($instance['title'])) {
            echo wp_kses_post($args['before_title'] .apply_filters('widget_title', esc_html($instance['title'])). $args['after_title']);
        }
        global $post;
        $post_id=$post->ID;
        ?>
        <ul>
            <?php 
        $postcount = !empty($instance['postcount']) ? $instance['postcount'] : 5;
            $queryargs = array(
                'posts_per_page'    =>  $postcount,
                'post_type' =>  'services'
            );
            $query = new WP_Query($queryargs);
            while ( $query->have_posts()) :
                $query->the_post();
            $class='';
           if($post_id==get_the_id())
           {
               $class = 'active';
           }
             ?>
            <li class="<?php echo esc_attr($class);?>"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
           <?php endwhile; ?>
        </ul>
            <?php
        echo wp_kses_post($args['after_widget']);
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

        $title = !empty($instance['title']) ? $instance['title'] : '';
        $postcount = !empty($instance['postcount']) ? $instance['postcount'] : 5;
        ?>
        <p>
        <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:', 'construc'); ?></label>
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>
        <p>
        <label for="<?php echo esc_attr($this->get_field_id('postcount')); ?>"><?php esc_html_e('Post Count:', 'construc'); ?></label>
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('postcount')); ?>" name="<?php echo esc_attr($this->get_field_name('postcount')); ?>" type="text" value="<?php echo esc_attr($postcount); ?>">
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
}


add_action('widgets_init', 'construc_services_widget');

function construc_services_widget()
{
    register_widget('Construc_Services_Widget');
}