<?php 
	get_header();

    $categories = get_the_category();
?>

    <section class="single">
        <div class="section">
            <div class="container">
                <div class="row m-0">
                    <div class="col-12" style="padding: 0 4px;">
                        <div class="text text-justify">
                            <div class="row row-adjust mb-3">
                                <div class="col-md-9">
                                    <h1><?php echo get_the_title(); ?></h1>
                                </div>
                            </div>
            
                            <?php echo apply_filters('the_content', $post->post_content); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
	get_footer();
?>