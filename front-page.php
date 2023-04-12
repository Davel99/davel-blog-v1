<?php get_header() ?>


<div id="front-banner" class="row p-3" style="background-image: url(<?= get_template_directory_uri(); ?>/assets/images/venturtam-fondo.png);">
    <div class="col-lg-6 m-auto">
        <img class="main-logo logo-pulse d-flex m-auto" src="<?= get_template_directory_uri(); ?>/assets/images/venturtam-logo.png" alt="" srcset="">

    </div>
    <div class="col-lg-6 m-auto">
        <a href="" class="banner-btn btn bg-danger">
            <i class="fa-solid fa-users-between-lines"></i>
            NOSOTROS
        </a>
        <a href="" class="banner-btn btn bg-danger">
            <i class="fa-regular fa-calendar"></i>
            CALENDARIO DE VIAJES
        </a>
        <a href="" class="banner-btn btn bg-danger">
            <i class="fa-solid fa-plane-circle-check"></i>
            DESTINOS
        </a>
        <a href="" class="banner-btn btn bg-danger">
            <i class="fa-brands fa-wordpress"></i>
            BLOG
        </a>
    </div>
</div>

<?php get_footer() ?>