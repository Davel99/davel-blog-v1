<div id="post-banner" class="m-0 d-flex <?= isset($args['pattern']) ? "pattern_" . $args['pattern'] : "animated-pattern" ?> w-100 bg-primary p-5">
    <div class="post-title my-auto">
        <?php
        $thumbnail = get_the_post_thumbnail_url();
        if (!empty($thumbnail)) :
        ?>
            <div class="col-md-12 text-center">
                <img src="<?= $thumbnail; ?>" class="post-banner_thumbnail">

            </div>
            <div class="col-md-12 text-center">
                <h1> <?= get_the_title(); ?></h1>
            </div>



        <?php else : ?>

            <h1 class="">
                <?php if (isset($args['title'])) : echo $args['title']; ?>
                <?php else : echo get_the_title(); ?>
                <?php endif; ?>
            </h1>


        <?php endif; ?>


        <?php if (isset($args['content'])) : ?>
            <div class="page-description">
                <?= $args['content'] ?>
            </div>
        <?php endif; ?>

    </div>

</div>