<aside class="col-lg-4 tm-aside-col">
    <div class="tm-post-sidebar">

        <?php dynamic_sidebar('blog_sidebar'); ?>
        <hr class="mb-3 tm-hr-primary">
        <h2 class="mb-4 tm-post-title tm-color-primary"></h2>
        <ul class="tm-mb-75 pl-5 tm-category-list">
            <li><a href="#" class="tm-color-primary">Visual Designs</a></li>
            <li><a href="#" class="tm-color-primary">Travel Events</a></li>
            <li><a href="#" class="tm-color-primary">Web Development</a></li>
            <li><a href="#" class="tm-color-primary">Video and Audio</a></li>
            <li><a href="#" class="tm-color-primary">Etiam auctor ac arcu</a></li>
            <li><a href="#" class="tm-color-primary">Sed im justo diam</a></li>
        </ul>
        <hr class="mb-3 tm-hr-primary">
        <h2 class="tm-mb-40 tm-post-title tm-color-primary">Related Posts</h2>

        <?php
        $recent_posts = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => 2,
        ));

        while ($recent_posts->have_posts()) : $recent_posts->the_post();; ?>
            <a href="#" class="d-block tm-mb-40">
                <?php
                $post_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                ?>
                <figure>
                    <img src="<?php echo $post_image_url ?>;" alt="<?php the_title(); ?>;" class="mb-3 img-fluid">
                    <figcaption class="tm-color-primary"><?php echo wp_trim_words(get_the_content(), 10, ''); ?></figcaption>
                </figure>
            </a>
        <?php endwhile; ?>

    </div>
</aside>