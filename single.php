<?php get_header(); ?>
<?php get_header(); ?>
<?php
$mainviews = [
    [
        'title' => '新着記事',
        'en' => 'TOPICS',
    ],
];
?>
<section class="sub-mv <?php if (is_home()) {
    echo 'sub-mv--news';
} ?>">
<?php get_template_part('template/sub-mv', null, ['mainviews' => $mainviews]); ?>
</section>

<section class="deatil-news">
  <div class="deatil-news__inner inner">
    <time datetime="<?php the_time('c'); ?>" class="deatil-news__time"><?php the_modified_date('Y.m.d'); ?></time>
    <h2 class="deatil-news__title"><?php the_title(); ?></h2>
    <div class="deatil-news__body">
      <?php the_content(); ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>