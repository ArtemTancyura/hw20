<?php
function learningWordPress_resources(){
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'learningWordPress_resources');

//theme sutup
function learnngWordPress_setup(){
    //Navigation Menus
    register_nav_menus(array(
        'primary' => __( 'Primary Menu'),
        'footer' => __( 'Footer Menu'),
    ));
    ///add feature image suport
    add_theme_support('post-thumbnails');
    add_image_size('small-thambnail', '100%','100%' , true);
    add_image_size('banner-image', 920, 210, array('left','top'));
    //add post format support
    add_theme_support('post-formats', array('aside', 'gallery', 'link'));
}
add_action('after_setup_theme','learnngWordPress_setup' );

/*function ale_page_links() {
    global $wp_query, $wp_rewrite;
    $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;

    $pagination = array(
        'base' => @add_query_arg('page','%#%'),
        'format' => '',
        'total' => $wp_query->max_num_pages,
        'current' => $current,
        'show_all' => true,
        'type' => 'plain',
        'next_text' => '&raquo;',
        'prev_text' => '&laquo;'
    );

    if( $wp_rewrite->using_permalinks() )
        $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );

    if( !empty($wp_query->query_vars['s']) )
        $pagination['add_args'] = array( 's' => get_query_var( 's' ) );

    echo paginate_links($pagination);
}*/


?>