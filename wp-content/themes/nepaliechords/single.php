<?php
get_header();
if (has_post_thumbnail()) {
    echo '<div class="pageSection bgImage" style="
    background-image: url(';
    the_post_thumbnail_url();
    echo ');">';
} else {
    echo '<div class="pageSection bgImage" style="
    background-image: url(' . "/wp-content/themes/nepaliechords/assets/imgs/backgroundImage.jpg" . ');">';
}
?>
<div class="darkOverlay"></div>
<div class="singlePage titleBox display-table">
    <div class="table-cell">
        <h1 class="text-light display-1"><?php the_title(); ?></h1>
        <div class="text-center"><?php the_category(); ?></div>
    </div>
</div>
</div>
<?php
get_template_part('inc/page', 'single');
get_footer();
?>