<?php
/*
Template Name: About Page Template
*/
get_header(); ?>
<div class="row tm-row tm-mb-45">
    <div class="col-12">
        <hr class="tm-hr-primary tm-mb-55">
        <img src="<?php the_field('about_image'); ?>" alt="Image" class="img-fluid">
    </div>
</div>
<div class="row tm-row tm-mb-40">
    <div class="col-12">
        <div class="mb-4">
            <h2 class="pt-2 tm-mb-40 tm-color-primary tm-post-title"><?php the_field('about_title'); ?></h2>
            <?php the_field('about_description'); ?>
        </div>
    </div>
</div>
<div class="row tm-row tm-mb-120">
    <?php if (have_rows('feature_items')) : ?>
        <?php while (have_rows('feature_items')) : the_row() ?>
            <div class="col-lg-4 tm-about-col">
                <div class="tm-bg-gray tm-about-pad">
                    <div class="text-center tm-mt-40 tm-mb-60">
                        <i class="<?php echo get_sub_field('feature_icon'); ?>"></i>
                    </div>
                    <h2 class="mb-3 tm-color-primary tm-post-title"><?php echo get_sub_field('feature_title'); ?></h2>
                    <p class="mb-0 tm-line-height-short">
                        <?php echo get_sub_field('feature_description'); ?>
                    </p>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>



</div>
<div class="row tm-row tm-mb-60">
    <div class="col-12">
        <hr class="tm-hr-primary  tm-mb-55">
    </div>
    <?php
    $about_teams = new WP_Query(array(
        'post_type' => 'teams',
        'post_per_page' => 2,
        'order' => 'ASC'
    ));
    while ($about_teams->have_posts()) : $about_teams->the_post(); ?>
        <div class="col-lg-6 tm-mb-60 tm-person-col">
            <div class="media tm-person">
                <?php $team_photo = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
                <img src="<?php echo $team_photo; ?>" alt="<?php the_title(); ?>" class="img-fluid mr-4">
                <div class="media-body">
                    <h2 class="tm-color-primary tm-post-title mb-2"><?php the_title(); ?></h2>
                    <h3 class="tm-h3 mb-3"><?php the_field('team_member_designation') ?></h3>
                    <p class="mb-0 tm-line-height-short">
                        <?php the_content(); ?>
                    </p>
                </div>
            </div>
        </div>
    <?php endwhile; ?>

</div>
<?php get_footer(); ?>