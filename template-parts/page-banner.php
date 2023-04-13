<div id="post-banner"
    class="m-0 d-flex pattern_brick w-100 bg-primary p-5">
    <div class="post-title my-auto">
        <?php 
        $thumbnail = get_the_post_thumbnail_url();
        if(!empty($thumbnail)):
        ?>

        <div class="m-0 row">
            <div class="col-lg-6 col-md-12 d-flex justify-content-center">
                <img src="<?= $thumbnail; ?>" class="post-banner_thumbnail">

            </div>
            <div class="col-lg-6 col-md-12 d-flex">
                <h1 class="my-auto"> <?= get_the_title(); ?></h1>
            </div>
        </div>



        <?php else: ?>

        <h1 class="">
            <?php if(isset($args['title'])): echo $args['title']; ?>
            <?php else: echo get_the_title(); ?>
            <?php endif; ?>
        </h1>


        <?php endif; ?>


        <?php if(isset($args['content'])): ?>
        <div class="page-description">
            <?= $args['content'] ?>
        </div>
        <?php endif; ?>

    </div>

</div>