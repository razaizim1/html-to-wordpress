<?php get_header(); ?>
<div class="row tm-row">
    <div class="col-12 post-thumbnail">
        <hr class="tm-hr-primary tm-mb-55">
        <!-- Video player 1422x800 -->
        <?php the_post_thumbnail(); ?>
    </div>
</div>
<div class="row tm-row">
    <div class="col-lg-8 tm-post-col">
        <div class="tm-post-full">
            <?php while (have_posts()) : the_post(); ?>
                <div class="mb-4">
                    <h2 class="pt-2 tm-color-primary tm-post-title"><?php the_title(); ?></h2>
                    <p class="tm-mb-40"><?php the_time('F d ,Y'); ?> posted by <?php the_author(); ?></p>
                    <p>
                        <?php the_content(); ?>
                    </p>
                    <span class="d-block text-right tm-color-primary">

                        <?php
                        $categories = get_the_category(get_the_ID());;
                        foreach ($categories as $category) {
                        ?>
                            <a href=""><?php echo $category->name . ' '; ?></a>

                        <?php
                        };
                        ?>


                    </span>
                </div>
            <?php endwhile; ?>
            <!-- Comments -->
            <div>
                <h2 class="tm-color-primary tm-post-title">Comments</h2>
                <hr class="tm-hr-primary tm-mb-45">

                <?php
                if (comments_open() || get_comments_number()) {
                    comments_template();
                }; ?>

            </div>
        </div>
    </div>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>