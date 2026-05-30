<?php get_header(); ?>

<div id="elementor-content">
    <?php 
    // Esto cargará el contenido de Elementor si existe
    if (function_exists('elementor_theme_do_location')) {
        elementor_theme_do_location('single');
    }
    ?>
</div>

<?php get_footer(); ?>
