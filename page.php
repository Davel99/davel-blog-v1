<?php
get_header();
while (have_posts()):
  the_post();
?>
<div id="page-main-container" class="pattern_line p-5">
    <div class="crtolg-content-card">
        <div class="w-100 m-0 row">
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

</div>

<?php
endwhile;
get_footer(); 
?>