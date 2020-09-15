<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="contentSection">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 box-shadow-full my-3 mx-2">

                <?php
                        the_content();
                        comments_template();
                        ?>
            </div>
            <div class="col-md-4 box-shadow-full my-3 mx-2">
                SIDEBAR
            </div>
        </div>
    </div>
    <?php endwhile;
else : endif; ?>