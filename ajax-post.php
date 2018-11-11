<?php
 /**
  * Template Name: Ajax Post
  */ 
get_header();
$ajaxpost = new WP_Query(array(
	'post_type'	=>	'post',
	'posts_per_page'	=>	10,
));
if ($ajaxpost->have_posts()) :
	?>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="archive-date">
					<?php 
					$args = array(
			        'type'            => 'yearly',
			        'limit'           => '',
			        'format'          => 'html',
			        'before'          => '',
			        'after'           => '',
			        'show_post_count' => false,
			        'echo'            => 1,
			        'order'           => 'DESC',
			            'post_type'     => 'post'
			    ); 
			    ?>
			    <?php wp_get_archives( $args ); ?>
				</div>
				<div class="category">
					<?php 
					$taxonomy = 'category';
						$terms = get_terms($taxonomy); // Get all terms of a taxonomy
						if ( $terms && !is_wp_error( $terms ) ){
							echo '<ul>';
					        foreach( $terms as $term ) {
					            echo '<li class="asr_texonomy" data_id="'.$term->term_id.'">'.$term->name.'</li>';
					        }
					        echo '</ul>';
					    }
					 ?>
				</div>
			</div>
			<div class="col-md-12">
				<div class="ajaxpost">
					<?php
					while ($ajaxpost->have_posts()) :
						$ajaxpost->the_post();
						echo '<div class="single-post">';
						the_title( '<h1>', '</h1>');
						the_content();
						echo '</div>';
					endwhile;
					wp_reset_postdata();
					?>
				</div>
			</div>
		</div>
	</div>
<?php
endif;
get_footer();
