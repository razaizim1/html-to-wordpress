<?php
/*
Template Name: Gallery Page Template
*/
get_header();  ?>
<div class="row tm-row tm-mb-45">
    <div class="col-12">
        <hr class="tm-hr-primary tm-mb-55">
        <div class="filter">
            <ul>
                <li data-filter="all">All</li>

                <?php
                $filters = get_terms([
                    'taxonomy' => 'gallery_filter',
                    'hide_empty' => false
                ]);
                ?>
                <?php foreach ($filters as $filter) : ?>
                    <li data-filter=".<?php echo $filter->slug; ?>"><?php echo $filter->name; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

<div class="row tm-row tm-mb-120 gallery_items" id="">

    <?php
    $gallery = new WP_Query(array(
        'post_type' => 'gallery',
        'post_per_page' => '-1'
    ));
    while ($gallery->have_posts()) : $gallery->the_post();

        $gallery_filters = get_the_terms($post->ID, 'gallery_filter');
    ?>

        <div class="row tm-row tm-mb-120 single-gallery mix <?php
                                                            foreach ($gallery_filters as $gfilter) {
                                                                echo $gfilter->slug . ' ';
                                                            }; ?> ">
            <img src="<?php the_field('image_gallery'); ?>" alt="?>">
        </div>

    <?php endwhile; ?>



</div>

<?php get_footer();  ?>