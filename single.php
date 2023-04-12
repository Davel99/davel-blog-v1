<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
<?php
    $info = array('pattern' => 'leaf');
    get_template_part('template-parts/page', 'banner', $info);
?>

<?php get_template_part('template-parts/page', 'content'); ?>

<?php endwhile; ?>

<?php get_footer(); ?>