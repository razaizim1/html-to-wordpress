<?php get_header(); ?>
<div class="row tm-row">

    <?php
    while (have_posts()) : the_post(); ?>
        <div class="col-md-12">
            <?php the_title(); ?>
            <hr class="tm-hr-primary">
            <?php the_content(); ?>
        </div>
    <?php endwhile; ?>

</div>

<?php get_footer(); ?>