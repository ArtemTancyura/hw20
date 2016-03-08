<footer class="site-footer clearfix">
<div class="container">
    <nav class="site-nav">
        <?php
        $args = array(
            'theme_location' => 'footer'
        );
        ?>

        <?php wp_nav_menu($args); ?>
    </nav>

   <div class="social"> <?php echo do_shortcode("[uptolike]"); ?></div>

    <p class="fback-text">
    &copy; Copyright <?php echo date('Y'); ?> <a href="DesignerFirst.com">DesignerFirst.com </a>
    </p>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
