<?php
get_header();
while (have_posts()) :
    the_post();
?>
    <div id="page-main-container" style="background-image: url(<?= get_template_directory_uri(); ?>/assets/images/venturtam-fondo.png);">
        <div class="venturtam-content-card">
            <div id="page-title" class="bg-primary pattern_brick col-md-12">
                <h1>
                    <?php the_title() ?>
                </h1>
            </div>
            <div id="page-content" class="col-md-12">
                <?php the_content() ?>
            </div>

        </div>

    </div>

<?php
endwhile;
get_footer();
?>