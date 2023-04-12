<?php
get_header();

//   $info = null;
//   if(is_home()){
//     $info = array(
//       'content' => 'Revisa las últimas noticias sobre tarjetas de crédito, finanzas y más. Apóyate en este blog para construir una mejor salud financiera',
//       'title' => 'Blog - El Creditólogo'    
//     );
//   }
//   get_template_part('template-parts/page','banner', $info);
//   if(!is_home()) get_template_part('template-parts/page','content');

?>

<div id="blog-page-container">
    <div class="page-title-container">

        <?php if(!empty($_GET['category_name'])): ?>
        <h1>Publicaciones sobre categoría "<?= $_GET['category_name']; ?>"</h1>

        <?php else: ?>
        <h1>Publicaciones de EL CREDITÓLOGO</h1>
        <p>Revisa las últimas noticias sobre tarjetas de crédito, finanzas y más. Apóyate en este blog para construir
            una mejor salud financiera</p>
        <?php endif; ?>

    </div>



    <?php if(have_posts()): ?>

    <div id="blog-post-list" class="w-100">

        <div class="page-filters-container">

            <form class="row m-0" action="" method="get">
                <div class="col-sm-6 text-center">
                    <h5>Búsqueda:</h5>
                </div>
                <select class="col-sm-4" name="category_name">
                    <option value="">TODAS LAS CATEGORÍAS</option>
                    <?php
                    $categories = get_categories(); 
                    if(sizeof($categories) > 0):
                    ?>
                    <?php foreach($categories as $cat): ?>
                    <option value="<?= $cat->slug; ?>"><?= $cat->name; ?></option>
                    <?php endforeach; ?>

                    <?php endif; ?>
                </select>
                <div class="col-sm-2 px-3">
                    <button class="btn btn-sm btn-info w-100" type="submit">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                </div>

            </form>
        </div>

        <?php while(have_posts()): the_post(); ?>

        <a class="gral-post-href" href="<?php the_permalink() ?>">
            <div class="gral-post-container">
                <div class="row m-0">
                    <div class="gral-post-img-container col-sm-2">
                        <?php 
                    $img = "";
                    if(get_the_post_thumbnail_url()){
                        $img = get_the_post_thumbnail_url();
                    } else {
                        $folder = "images";
                        $extension = "jpg";
                        $randomNumber = rand(1,5);
                        $defaultName = "default-thumb-$randomNumber.$extension";
                        $fullName = "/$folder/$defaultName";
                        $img = get_theme_file_uri($fullName);
                    }
                    ?>
                        <div class="gral-post-thumbnail-bg" style="background-image: url(<?= $img ?>);"></div>

                    </div>
                    <div class="gral-post-title col-sm-10">
                        <h4><?php the_title(); ?></h4>
                        <p>
                            <?php 
						$excerpt = get_the_excerpt();
					if($excerpt){
						the_excerpt();
					} else{
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

        <?php else: ?>

        <div class="gral-noposts-container">
            <h4 class="gral-message">No se han encontrado posts</h4>
        </div>

    </div>

    <?php endif; ?>
</div>

<?php get_footer(); ?>