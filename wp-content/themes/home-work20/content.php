<article class="post">

    <h2><?php the_title(); ?></h2>

    <p class="post-info"><?php echo __('Posted on'); ?> <?php the_time('F d, Y');?></p>

    <?php the_post_thumbnail(); ?>

    <?php the_content('Reading More');

    comments_template()?>

</article>