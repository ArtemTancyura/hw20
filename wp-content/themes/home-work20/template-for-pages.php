<?php
/*
Template Name: Pages template
*/
?>
<?php get_header(); ?>

<main>
    <div class="container">
             <?php
            while ( have_posts() ) : the_post(); ?>

                <article class="post">

                    <h3><?php echo __('OOOPS, but this page haven\'t a content :(

                                     We are working on it...'); ?></h3>

                    <?php the_post_thumbnail(); ?>

                </article>

            <?php endwhile; ?>
</main>


<?php get_footer(); ?>
