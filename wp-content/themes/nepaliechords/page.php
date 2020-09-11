<?php
get_header();
?>
<div class="container mt-3 ">
    <h1 class="text-center">
        <?php the_title(); ?>
    </h1>
    <hr>
    <?php get_template_part('inc/page', 'content'); ?>
</div>

<?php
get_footer();
?>