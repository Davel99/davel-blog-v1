<?php
get_header();
$postType = get_post_type();
?>

<div id="blog-page-container">
    <div class="page-title-container">

        <h1>Archivo de publicaciones</h1>
        <?php
        $category = get_category(get_query_var('cat'));
        $tag = single_tag_title('', false);

        if (!empty($category->name)) : ?>
            <p>Actualmente estás buscando publicaciones con la categoría "<?= $category->name; ?>"</p>

        <?php elseif (!empty($tag)) : ?>
            <p>Actualmente estás buscando publicaciones con la etiqueta "<?= $tag; ?>"</p>
        <?php endif; ?>

    </div>



    <?php if (have_posts()) : ?>

        <div id="blog-post-list" class="w-100">

            <?php while (have_posts()) : the_post(); ?>

                <a class="gral-post-href" href="<?php the_permalink() ?>">
                    <div class="gral-post-container">
                        <div class="row m-0">
                            <div class="gral-post-img-container d-flex col-sm-2">
                                <?php if($postType == "destinos"): ?>
                                    <i class="fa-solid fa-plane-circle-check m-auto"></i>                             
                                <?php elseif($postType == "viajes"): ?>
                                    <i class="fa-regular fa-calendar m-auto"></i>
                                <?php endif; ?>
                            </div>
                            <div class="gral-post-title col-sm-10">
                                <h4><?php the_title(); ?></h4>
                                <p>
                                    <?php
                                    $excerpt = get_the_excerpt();
                                    if ($excerpt) {
                                        the_excerpt();
                                    } else {
                                        echo wp_trim_words(get_the_content(), 20);
                                    }
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>

            <?php endwhile; ?>
            <?= paginate_links() ?>

        <?php else : ?>

            <div class="gral-noposts-container">
                <h4 class="gral-message">No se han encontrado posts</h4>
            </div>

        </div>

    <?php endif; ?>
</div>

<?php get_footer(); ?>