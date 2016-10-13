<div class="col-xs-12 <?= util_post_class('content-single') ?>">

    <?php get_template_part('partials/entry-meta'); ?>

    <h3 class="entry-title">
        <a href="<?= get_permalink() ?>">
            <?php the_title(); ?>
        </a>
    </h3>

    <div class="entry-date">
        <?php echo get_the_date('M d, Y'); ?>
    </div>


    <div class="entry-content">
        <?php the_content(); ?>
    </div>

</div>

