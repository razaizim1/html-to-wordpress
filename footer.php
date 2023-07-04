<footer class="row tm-row">
    <hr class="col-12">
    <div class="col-md-6 col-12 tm-color-gray">
        <?php the_field('footer_left', 'option'); ?>
    </div>
    <div class="col-md-6 col-12 tm-color-gray tm-copyright">
        <?php the_field('footer_right', 'option'); ?>
    </div>
</footer>
</main>
</div>
<script src="<?php echo get_template_directory_uri() ?>/js/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/templatemo-script.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/mixitup.min.js"></script>
<!-- <script src="<?php echo get_template_directory_uri() ?>/mixitup.min.js"></script> -->
<script>

    var containerEl = '.gallery_items';
    var mixer = mixitup(containerEl);
    
</script>
<?php wp_footer(); ?>
</body>

</html>