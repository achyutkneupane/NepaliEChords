<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="contentSection">
    <div class="container box-shadow-full my-3">
        <div class="row">
            <div class="col-md-12">

                <?php
                        the_content();
                        ?>
            </div>
        </div>
    </div>
</div>
<?php endwhile;
else : endif; ?>