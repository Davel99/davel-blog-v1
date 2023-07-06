<?php get_header() ?>

<div id="archive-page-container">
    <div class="page-title-container">
        <h1>Novelas publicadas</h1>
        <p>
            Ideas sobre muchas historias han rondado mi cabeza desde los catorce años y hoy por fin soy capaz de verlas materializarse.
            Espero que te guste leerlas tanto como a mí escribirlas.
        </p>

    </div>


    <?php if (have_posts()) : ?>
        <div class="row m-0">
            <?php while (have_posts()) : the_post(); ?>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 px-5 mb-5">
                    <div class="card archive-card">
                        <?php
                        $img = "";
                        if (get_the_post_thumbnail()) {
                            $img = get_the_post_thumbnail_url();
                        } else {
                            $folder = "images";
                            $extension = "jpg";
                            $randomNumber = rand(1, 5);
                            $defaultName = "default-thumb-$randomNumber.$extension";
                            $fullName = "/$folder/$defaultName";
                            $img = get_theme_file_uri($fullName);
                        }
                        ?>

                        <a href="<?php the_permalink() ?>">
                            <img src="<?= $img ?>" class="card-img-top" alt="">
                        </a>

                        <div class="card-body row">
                            <h3 class="card-title col-12 border-bottom border-secondary pb-3">
                                <?php the_title(); ?>
                            </h3>
                            <p class="card-text col-12">
                                <?php
                                if (get_the_excerpt()) : ?>
                                    <?= get_the_excerpt(); ?>
                                <?php else : ?>
                                    <?= wp_trim_words(get_the_content(), 20); ?>
                                <?php endif; ?>
                            </p>
                            <a href="<?php the_permalink() ?>" class="btn btn-info w-100 mt-auto">REVISAR</a>
                        </div>
                    </div>

                </div>

            <?php endwhile; ?>

            <?php get_template_part('template-parts/archive', 'lastPost'); ?>



        </div>

    <?php else : ?>

        <?php get_template_part('template-parts/gral', 'noContent'); ?>

    <?php endif; ?>
</div>

<?php get_footer() ?>