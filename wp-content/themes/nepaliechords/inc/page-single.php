<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="contentSection">
    <div class="container">
        <div class="row">
            <div class="col-md-8 box-shadow-full m-3">

                <?php
                        the_content();
                        comments_template();
                        ?>
            </div>
            <div class="col-md-3 box-shadow-full my-3">
                SIDEBAR
            </div>
        </div>
    </div>
    <?php endwhile;
else : endif; ?>