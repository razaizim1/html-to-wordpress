<?php
/*
Template Name: Contact Page Template
*/
get_header(); ?>

<div class="row tm-row tm-mb-45">
    <div class="col-12">
        <hr class="tm-hr-primary tm-mb-55">
        <div class="gmap_canvas"> <!-- Google Map -->
            <?php the_field('map_iframe_code'); ?>
        </div>
    </div>
</div>
<div class="row tm-row tm-mb-120">
    <div class="col-12">
        <h2 class="tm-color-primary tm-post-title tm-mb-60"><?php the_title(); ?></h2>
    </div>
    <div class="col-lg-7 tm-contact-left">

        <div class="mb-5 ml-auto mr-0 tm-contact-form">
            <?php
            $contact_shortcode = get_field('form_short_code');
            // echo $contact_shortcode;
            if ($contact_shortcode == '') :
            ?>

                <div class="form-group row mb-4">
                    <label for="name" class="col-sm-3 col-form-label text-right tm-color-primary">Name</label>
                    <div class="col-sm-9">
                        <input class="form-control mr-0 ml-auto" name="name" id="name" type="text" required>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label for="email" class="col-sm-3 col-form-label text-right tm-color-primary">Email</label>
                    <div class="col-sm-9">
                        <input class="form-control mr-0 ml-auto" name="email" id="email" type="email" required>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label for="subject" class="col-sm-3 col-form-label text-right tm-color-primary">Subject</label>
                    <div class="col-sm-9">
                        <input class="form-control mr-0 ml-auto" name="subject" id="subject" type="text" required>
                    </div>
                </div>
                <div class="form-group row mb-5">
                    <label for="message" class="col-sm-3 col-form-label text-right tm-color-primary">Message</label>
                    <div class="col-sm-9">
                        <textarea class="form-control mr-0 ml-auto" name="message" id="message" rows="8" required></textarea>
                    </div>
                </div>
                <div class="form-group row text-right">
                    <div class="col-12">
                        <button class="tm-btn tm-btn-primary tm-btn-small">Submit</button>
                    </div>
                </div>

            <?php else :  ?>
                <?php echo do_shortcode($contact_shortcode); ?>
            <?php endif; ?>

        </div>

    </div>
    <div class="col-lg-5 tm-contact-right">
        <address class="mb-4 tm-color-gray"><?php the_field('address'); ?></address>
        <span class="d-block">
            Tel:
            <a href="tel:<?php the_field('phone_number'); ?>" class="tm-color-gray"><?php the_field('phone_number'); ?></a>
        </span>
        <span class="mb-4 d-block">
            Email:
            <a href="mailto:<?php the_field('email'); ?>" class="tm-color-gray"><?php the_field('email'); ?></a>
        </span>
        <p class="mb-5 tm-line-height-short">
            <?php the_field('contact_description'); ?>
        </p>
        <ul class="tm-social-links">
            <li class="mb-2">
                <a href="https://facebook.com" class="d-flex align-items-center justify-content-center">
                    <i class="fab fa-facebook"></i>
                </a>
            </li>
            <li class="mb-2">
                <a href="https://twitter.com" class="d-flex align-items-center justify-content-center">
                    <i class="fab fa-twitter"></i>
                </a>
            </li>
            <li class="mb-2">
                <a href="https://youtube.com" class="d-flex align-items-center justify-content-center">
                    <i class="fab fa-youtube"></i>
                </a>
            </li>
            <li class="mb-2">
                <a href="https://instagram.com" class="d-flex align-items-center justify-content-center mr-0">
                    <i class="fab fa-instagram"></i>
                </a>
            </li>
        </ul>
    </div>
</div>
<?php get_footer(); ?>