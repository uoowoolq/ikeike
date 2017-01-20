<?php
function flat_setup() {
  add_theme_support( 'post-thumbnails' );
  register_nav_menu( 'primary', 'Primary Menu' );
}
add_action( 'after_setup_theme', 'flat_setup' );

function flat_scripts() {
  wp_enqueue_style( 'slick', '//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css' );
  wp_enqueue_style( 'slick-theme', '//cdn.jsdelivr.net/jquery.slick/1.6.0/slick-theme.css' );
  wp_enqueue_style( 'style', get_stylesheet_uri() );
  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'slick', '//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js' );
  wp_enqueue_script( 'main', get_template_directory_uri() . '/main.js' );

  if(is_page('about')) {
    wp_enqueue_script( 'tweenmax', '//cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js' );
    wp_enqueue_script( 'page-about', get_template_directory_uri() . '/page-about.js', [], false, true );
    wp_enqueue_style( 'page-about', get_template_directory_uri() . '/page-about.css' );
  }

}
add_action( 'wp_enqueue_scripts', 'flat_scripts' );

// カスタム投稿タイプを追加（テスト）
function codex_custom_init() {
  $args = array(
    'public' => true,
    'label'  => 'Books'
  );
  register_post_type( 'book', $args );
}
add_action( 'init', 'codex_custom_init' );


/* メタボックス追加 */
function custom_meta_box() {
  add_meta_box(
    'post-meta',
    '追加情報',
    'custom_meta_box_callback',
    'post'
  );
}
function custom_meta_box_callback() {
  // wp_nonce_field();
  $value = get_post_meta(get_the_ID());
  ?>
  <p><label>meta-field-1: <input type="text" id="meta-field-1" name="meta-field-1" value="<?php echo esc_attr($value['meta-field-1'][0]) ?>" /></label></p>
  <p><label>meta-field-2: <input type="text" id="meta-field-2" name="meta-field-2" value="<?php echo esc_attr($value['meta-field-2'][0]) ?>" /></label></p>
  <p><label>meta-field-3: <input type="text" id="meta-field-3" name="meta-field-3" value="<?php echo esc_attr($value['meta-field-3'][0]) ?>" /></label></p>
  <p><label>Photo-1: <a style="display: inline-block;" href="javascript:void(0);" id="select-photo-1"><img style="vertical-align: bottom;" id="thumb-photo-1" src="<?php echo esc_attr($value['photo-1'][0]) ?>" alt="" height="108px" width="192px" /></a></label><a href="javascript:void(0);" id="delete-1">削除</a></p>
  <p><label>Photo-2: <a style="display: inline-block;" href="javascript:void(0);" id="select-photo-2"><img style="vertical-align: bottom;" id="thumb-photo-2" src="<?php echo esc_attr($value['photo-2'][0]) ?>" alt="" height="108px" width="192px" /></a></label><a href="javascript:void(0);" id="delete-2">削除</a></p>
  <p><label>Photo-3: <a style="display: inline-block;" href="javascript:void(0);" id="select-photo-3"><img style="vertical-align: bottom;" id="thumb-photo-3" src="<?php echo esc_attr($value['photo-3'][0]) ?>" alt="" height="108px" width="192px" /></a></label><a href="javascript:void(0);" id="delete-3">削除</a></p>
  <input type="hidden" id="photo-1" name="photo-1" value="<?php echo esc_attr($value['photo-1'][0]) ?>" />
  <input type="hidden" id="photo-2" name="photo-2" value="<?php echo esc_attr($value['photo-2'][0]) ?>" />
  <input type="hidden" id="photo-3" name="photo-3" value="<?php echo esc_attr($value['photo-3'][0]) ?>" />
  <?php
}
add_action( 'add_meta_boxes', 'custom_meta_box' );

function save_custom_meta_box($post_id) {
  update_post_meta($post_id, 'meta-field-1', sanitize_text_field($_POST['meta-field-1']));
  update_post_meta($post_id, 'meta-field-2', sanitize_text_field($_POST['meta-field-2']));
  update_post_meta($post_id, 'meta-field-3', sanitize_text_field($_POST['meta-field-3']));
  update_post_meta($post_id, 'photo-1', esc_url($_POST['photo-1']));
  update_post_meta($post_id, 'photo-2', esc_url($_POST['photo-2']));
  update_post_meta($post_id, 'photo-3', esc_url($_POST['photo-3']));
}
add_action('save_post', 'save_custom_meta_box');

// 編集画面用のJavascriptを読み込み
function post_scripts() {
  wp_enqueue_script( 'custom-post', get_template_directory_uri() . '/post.js' );
}
add_action( 'load-post.php', 'post_scripts' );

/* 本人がアップロードしたメディアのみを参照するようにする */
function display_only_self_uploaded_medias( $query ) {
if ( $user = wp_get_current_user() ) {
$query['author'] = $user->ID;
}
return $query;
}
add_action( 'ajax_query_attachments_args', 'display_only_self_uploaded_medias' );
