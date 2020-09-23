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
<div class="titleBox display-table">
    <div class="table-cell">
        <?php echo (get_the_archive_title()); ?>

    </div>
</div>
</div>
<?php

get_template_part('inc/page', 'archive');
get_footer();
?>