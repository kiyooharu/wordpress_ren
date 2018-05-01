<?php
/**
* Bootstrapのスクリプトとスタイルをエンキュー
*/
function my_bootstrap_scripts() {

wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '_child/lib/bootstrap-3.3.7-dist/css/bootstrap.min.css');

wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '_child/lib/bootstrap-3.3.7-dist/js/bootstrap.min.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'my_bootstrap_scripts' );

// カスタム投稿タイプを定義
add_action( 'news', 'register_cpt_news' );
 
function register_cpt_team() {
 
    $labels = array(
        'name' => _x( 'ニュース', 'news' ),
        'singular_name' => _x( 'ニュース', 'news' ),
        'add_new' => _x( '新規追加', 'news' ),
        'add_new_item' => _x( '新しいニュースを追加', 'news' ),
        'edit_item' => _x( 'メンバープロフィールを編集', 'news' ),
        'new_item' => _x( '新しいニュース', 'news' ),
        'view_item' => _x( 'ニュースを見る', 'news' ),
        'search_items' => _x( 'ニュース検索', 'news' ),
        'not_found' => _x( 'ニュースが見つかりません', 'news' ),
        'not_found_in_trash' => _x( 'ゴミ箱にニュースはありません', 'news' ),
        'parent_item_colon' => _x( 'ニュース:', 'news' ),
        'menu_name' => _x( 'ニュース', 'news' ),
    );
 
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'ニュス情報とか',
        'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );
 
    register_post_type( 'news', $args );
}
 
// アイコンを追加
function add_menu_icons_styles(){
     echo '<style>
          #adminmenu #menu-posts-team div.wp-menu-image:before {
               content: "\f307";
          }
     </style>';
}
add_action( 'admin_head', 'add_menu_icons_styles' );



/*フッターメニュー追加*/

register_nav_menu( 'footer-menu', 'フッターメニュー' );

register_sidebar(array(
     'name' => 'Footer' ,
     'id' => 'footer' ,
     'before_widget' => '<div class="widget">',
     'after_widget' => '</div>',
     'before_title' => '<h3>',
     'after_title' => '</h3>'
));

/*下層メニュー追加*/

register_nav_menu( 'underlayer-menu', '下層メニュー' );

register_sidebar(array(
     'name' => 'underlayer' ,
     'id' => 'underlayer' ,
     'before_widget' => '<div class="widget">',
     'after_widget' => '</div>',
     'before_title' => '<h3>',
     'after_title' => '</h3>'
));


/*下層メニュー追加*/

register_nav_menu( 'port_head_menu', 'ポートフォリオヘッダー' );

register_sidebar(array(
     'name' => 'test' ,
     'id' => 'underlayer' ,
     'before_widget' => '<div class="widget">',
     'after_widget' => '</div>',
     'before_title' => '<h3>',
     'after_title' => '</h3>'
));



/*戻るボタンここから*/

function scroll_top() {
    wp_enqueue_script('scrollscript', get_template_directory_uri().'_child/js/scroll-top.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'scroll_top');

function load_jquery(){
    wp_enqueue_script('jquery');
}
add_action('init', 'load_jquery');

add_action( 'wp_enqueue_scripts', 'enqueue_my_styles' );
function enqueue_my_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); // 親テーマのcss
    wp_enqueue_style( 'custom-style', get_stylesheet_directory_uri() . '/icon.css', array('parent-style')); // 子テーマのcss
}

/*フッターfacebook*/

/* フッターウィジェットの作成 */
add_action('init', 'my_register_sidebar');
function my_register_sidebar() {
    register_sidebars(1,
        array(
        'name'=>'フッターウィジェット1',
        'before_widget' => '<ul><li>',
        'after_widget' => '</li></ul>',
        ));
    register_sidebars(1,
        array(
        'name'=>'フッターウィジェット2',
        'before_widget' => '<ul><li>',
        'after_widget' => '</li></ul>',
        ));
    register_sidebars(1,
        array(
        'name'=>'フッターウィジェット3',
        'before_widget' => '<ul><li>',
        'after_widget' => '</li></ul>',
        ));
    register_sidebars(1,
        array(
        'name'=>'フッターウィジェット4',
        'before_widget' => '<ul><li>',
        'after_widget' => '</li></ul>',
        ));
}


?>