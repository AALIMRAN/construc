<?php
add_action('wp_ajax_get_archive_post', 'my_get_archive_post');
add_action('wp_ajax_nopriv_get_archive_post', 'my_get_archive_post');

function my_get_archive_post(){
	// if( !isset( $_POST['ajaxtest_ajax_nonce'] ) || !wp_verify_nonce( $_POST['ajaxtest_ajax_nonce'], 'ajaxtest_ajax_nonce' ) )
 //    die('Permission denied');
	$term_ID = sanitize_text_field( intval($_POST['term_ID']) );
	//post query
	$ajaxpost = new WP_Query( array(
		'post_type' => 'post',
		'year'	=>	$term_ID,
		'post_per_pages' => -1,
	) );
	while ($ajaxpost->have_posts()) :
		$ajaxpost->the_post();
		echo '<div class="single-post">';
		the_title( '<h1>', '</h1>');
		the_content();
		echo '</div>';
	endwhile;
	wp_reset_postdata();
	die();
}
