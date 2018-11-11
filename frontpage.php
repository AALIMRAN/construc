<?php
 /**
  * Template Name: Front Page
  */ 

get_header();
get_template_part( 'template-parts/section/home', 'slider' );
get_template_part( 'template-parts/section/blog', 'grid' );
get_template_part( 'template-parts/section/post', 'filter' );
get_footer();
?>