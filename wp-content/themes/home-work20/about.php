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

                     <?php the_content(); ?>

                     </article>

                     <?php endwhile; ?>
            </div>
   		</main>


  <?php get_footer(); ?>