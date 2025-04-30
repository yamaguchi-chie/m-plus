<?php

/**
 * func-base
 * WordPress標準機能
 *
 * @codex https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support
 */
function my_setup() {
	add_theme_support( 'post-thumbnails' ); /* アイキャッチ */
	add_theme_support( 'automatic-feed-links' ); /* RSSフィード */
	add_theme_support( 'title-tag' ); /* タイトルタグ自動生成 */
	add_theme_support(
		'html5',
		array( /* HTML5のタグで出力 */
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);
}
add_action( 'after_setup_theme', 'my_setup' );

function my_script_init() {
    // wp_enqueue_style('zenkakugothic', 'https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic:wght@300;400;500;700;900&display=swap');
    wp_enqueue_style('kiwi-maru', 'https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@400;500&display=swap');
    wp_enqueue_style("swiper", "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css", array(), filemtime(get_theme_file_path('dist/assets/css/style.css')), "all");
    wp_enqueue_script("swiper", "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js", array("jquery"), filemtime(get_theme_file_path('dist/assets/js/script.js')), true);
    wp_enqueue_style("my", get_template_directory_uri() . "/dist/assets/css/style.css", array(), filemtime(get_theme_file_path('dist/assets/css/style.css')), "all");
    wp_enqueue_script("my", get_template_directory_uri() . "/dist/assets/js/script.js", array("jquery"), filemtime(get_theme_file_path('dist/assets/js/script.js')), true);
  }
  add_action("wp_enqueue_scripts", "my_script_init");

  /* ---------- 「投稿」の表記変更 ---------- */
function Change_menulabel() {
  global $menu;
  global $submenu;
  $name = '記事';
  $menu[5][0] = $name;
  $submenu['edit.php'][5][0] = $name.'一覧';
  $submenu['edit.php'][10][0] = '新規'.$name.'投稿';
}
function Change_objectlabel() {
  global $wp_post_types;
  $name = '記事';
  $labels = &$wp_post_types['post']->labels;
  $labels->name = $name;
  $labels->singular_name = $name;
  $labels->add_new = _x('追加', $name);
  $labels->add_new_item = $name.'の新規追加';
  $labels->edit_item = $name.'の編集';
  $labels->new_item = '新規'.$name;
  $labels->view_item = $name.'を表示';
  $labels->search_items = $name.'を検索';
  $labels->not_found = $name.'が見つかりませんでした';
  $labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
}
add_action( 'init', 'Change_objectlabel' );
add_action( 'admin_menu', 'Change_menulabel' );
?>