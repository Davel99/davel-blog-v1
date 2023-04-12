<?php get_header(); ?>

<?php 

$content = get_the_content();
$info = array('content' => $content);
get_template_part('template-parts/page','banner', $info); 
?>

<div class="fp-banner" style="background-image: url(<?= get_theme_file_uri('/images/credit-card-bg-1.jpg'); ?>);">
    <div class="slanted-container right bg-warning">
        <h3>¿Buscando la mejor tarjeta?</h3>
        <p>Los mejores clientes merecen la mejor atención</p>
        <a href="" class="btn btn-success">
            Saber más
        </a>
    </div>
    
</div>

<div class="fp-banner" style="background-image: url(<?= get_theme_file_uri('/images/teamwork-bg-2.jpg'); ?>);">
    <div class="slanted-container left bg-danger">
        <h3>Entérate de las últimas noticias</h3>
        <p>Más sobrevive quien mejor se prepara</p>
        <a href="" class="btn btn-success">
            Saber más
        </a>
    </div>
    
</div>



<?php get_footer(); ?>