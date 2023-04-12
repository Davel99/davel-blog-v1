<?php get_header(); ?>

<?php 

$content = get_the_content();
$info = array('content' => $content, 'pattern' => 'brick');
get_template_part('template-parts/page','banner', $info); 
?>


<?php get_footer(); ?>