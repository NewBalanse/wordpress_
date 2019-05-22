<?php


function setup_site()
{
    //setup style
    wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_enqueue_style('custom_style', get_template_directory_uri() . '/style/style.css');
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.css');
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '5.2.6', true);

}

add_action('wp_enqueue_scripts', 'setup_site');

function theme_setup()
{
    add_theme_support('menus');
    register_nav_menu('primary', 'Primary Header Navigation');
}

add_action('init', 'theme_setup');

if (function_exists('register_nav_menus')) {
    register_nav_menus(
        array(
            'main_menu' => 'Header Menu',
            'footer_menu' => 'Footer Menu'
        )
    );
}

function true_search_form($form)
{
    $form = '<div class="col d-flex justify-content-center mt-3">
    <h6 class="h2 text-white font-weight-bold text-uppercase">search</h6>
</div>

<div class="col d-flex flex-md-wrap mb-3">
    <div class="col mr-0 pr-0 pt-1">
        <input style="border-radius: 0px" type="text" class="form-control" placeholder="Search">
    </div>
    <div class="col-2 ml-0 pl-0 pt-1">
        <button style="background-color: #e3d6c3;border-radius: 0px; border: 1px solid #e3d6c3"
                type="button" class="btn btn-primary">Search
        </button>
    </div>
</div>';
    return $form;
}

add_filter('get_search_form', 'true_search_form');

/*
 * Этап 1. Добавление
 */
function true_meta_boxes()
{
    add_meta_box('truediv', 'Настройки', 'true_print_box', 'post', 'normal', 'high');
}

add_action('admin_menu', 'true_meta_boxes');
/*
 * также можно использовать и другие хуки:
 * add_action( 'add_meta_boxes', 'tr_meta_boxes' );
 * если версия WordPress ниже 3.0, то
 * add_action( 'admin_init', 'tr_meta_boxes', 1 );
 */

/*
 * Этап 2. Заполнение
 */
function true_print_box($post)
{
    wp_nonce_field(basename(__FILE__), 'seo_metabox_nonce');
    /*
     * добавляем текстовое поле
     */
    $html .= '<label>Заголовок <input type="text" name="seotitle" value="' . get_post_meta($post->ID, 'seo_title', true) . '" /></label> ';
    /*
     * добавляем чекбокс
     */
    $html .= '<label><input type="checkbox" name="noindex"';
    $html .= (get_post_meta($post->ID, 'seo_noindex', true) == 'on') ? ' checked="checked"' : '';
    $html .= ' /> Скрыть запись от поисковиков?</label>';

    echo $html;
}

/*
 * Этап 3. Сохранение
 */
function true_save_box_data($post_id)
{
    // проверяем, пришёл ли запрос со страницы с метабоксом
    if (!isset($_POST['seo_metabox_nonce'])
        || !wp_verify_nonce($_POST['seo_metabox_nonce'], basename(__FILE__)))
        return $post_id;
    // проверяем, является ли запрос автосохранением
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return $post_id;
    // проверяем, права пользователя, может ли он редактировать записи
    if (!current_user_can('edit_post', $post_id))
        return $post_id;
    // теперь также проверим тип записи
    $post = get_post($post_id);
    if ($post->post_type == 'post') { // укажите собственный
        update_post_meta($post_id, 'seo_title', esc_attr($_POST['seotitle']));
        update_post_meta($post_id, 'seo_noindex', $_POST['noindex']);
    }
    return $post_id;
}

add_action('save_post', 'true_save_box_data');

function true_register_wp_sidebars()
{
    register_sidebar(
        array(
            'id' => 'true_foot',
            'name' => "Footer",
            'description' => 'drag element widget',
            'before_widget' => '<div id="%1$s" class="foot widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>'
        )
    );
}

add_action('widgets_init', 'true_register_wp_sidebars');


/**
 * Register a Custom post type for.
 */
function custom_bootstrap_slider()
{
    $labels = array(
        'name' => _x('Slider', 'post type general name'),
        'singular_name' => 'Slide',
        'menu_name' => 'Slider',
        'name_admin_bar' => 'Slide',
        'add_new' => 'Add New',
        'add_new_item' => 'Name',
        'new_item' => 'New Slide',
        'edit_item' => 'Edit Slide',
        'view_item' => 'View Slide',
        'all_items' => 'All Slide',
        'featured_image' => 'Featured Image',
        'search_items' => 'Search Slide',
        'parent_item_colon' => 'Parent Slide:',
        'not_found' => 'No Slide found.',
        'not_found_in_trash' => 'No Slide found in Trash.',
    );

    $args = array(
        'labels' => $labels,
        'menu_icon' => 'dashicons-star-half',
        'description' => 'Description.',
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => true,
        'menu_position' => null,
        'supports' => array('title', 'editor', 'thumbnail')
    );

    register_post_type('slider', $args);
}

add_action('init', 'custom_bootstrap_slider');