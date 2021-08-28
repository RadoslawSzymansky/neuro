    <div class="overflow">
    
    </div>

    <?php wp_footer(); ?>

    <!-- ---=====  SCRIPTS =====------ -->

    <!-- // global -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/menu.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>\node_modules\tiny-slider\dist\min\tiny-slider.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>\node_modules\simplelightbox\dist\simple-lightbox.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            new SimpleLightbox('.gallery-0 a', { });
            new SimpleLightbox('.gallery-1 a', { });
            new SimpleLightbox('.gallery-2 a', { });
            new SimpleLightbox('.gallery-3 a', { });
            new SimpleLightbox('.gallery-4 a', { });
            new SimpleLightbox('.gallery-5 a', { });
            new SimpleLightbox('.gallery-6 a', { });
            new SimpleLightbox('.gallery-7 a', { });
            new SimpleLightbox('.gallery-8 a', { });
        });
    </script>
</body>
</html>
