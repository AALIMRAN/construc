<?php
global $post;
if (!is_front_page() && have_posts()) {
?>
<section class="page-header-section" style="background-image: url(<?php header_image();?>);">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="paget-title">
                  <h2>
                    <?php
                        wp_title( '' );
                    ?>
                  </h2>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>