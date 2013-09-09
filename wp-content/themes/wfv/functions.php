<?php
function wfv_widgets_init() {
    register_sidebar( array(
        'name' => 'Архив',
        'id' => 'sidebar-1',
        'description' => 'Сайдбар',
        'before_widget' => '<aside id="%1$s" class="container widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ) );
}
add_action( 'widgets_init', 'wfv_widgets_init' );