<?php   get_header();?>
    <div class="container">

    <div class="site-content clearfix">

            <?php if (have_posts()):
                while (have_posts()): the_post(); ?>

                    <?php get_template_part( 'content' ); ?>

                <?php endwhile;
            else:
                echo '<p>No content found</p>';
            endif;?>

    </div>
<?php the_posts_pagination($args);?>

<?php get_footer(); ?>