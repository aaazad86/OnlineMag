
// Regester sidebar 
function themename_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Right Sidebar', 'theme_name' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Right sidebar of single page or main page.' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
 
    register_sidebar( array(
        'name'          => __( 'Left Sidebar', 'theme_name' ),
        'id'            => 'sidebar-2',
        'description'   => __( 'Left sidebar of single page or main page.' ),
        'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li></ul>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
