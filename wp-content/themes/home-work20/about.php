<?php
/*
Template Name: About template
*/
?>
<?php get_header(); ?>

    <main class="main">
        <div class="container">
            <div class="content clearfix">
                    <?php
                    while ( have_posts() ) : the_post(); ?>

                     <article class="post">

                     <h2><?php echo __('What We Are All About'); ?></h2>

                     <div class="content"><?php the_content(); ?></div>

                     <h2><?php echo __('Meet Our Team!'); ?></h2>

                     <?php the_post_thumbnail(); ?>

                     </article>

                     <?php endwhile; ?>
            </div>
   		</main>


  <?php get_footer(); ?>