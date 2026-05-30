<?php get_header(); ?>
<main class="rc-page-content" style="padding-top: 100px; padding-bottom: 60px;">
    <div class="rc-section-container">
        <?php while(have_posts()) : the_post(); the_content(); endwhile; ?>
    </div>
</main>
<?php get_footer(); ?>
