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
<section class="sub-mv js-mv <?php if (is_home()) {
    echo 'sub-mv--news';
} ?>">
<?php get_template_part('template/sub-mv', null, ['mainviews' => $mainviews]); ?>
</section>

<section class="detail-news">
  <div class="detail-news__inner inner">
    <time datetime="<?php the_time('c'); ?>" class="detail-news__time"><?php the_modified_date('Y.m.d'); ?></time>
    <h2 class="detail-news__title"><?php the_title(); ?></h2>
    <div class="detail-news__body">
      <?php the_content(); ?>
    </div>
    <div class="detail-news__pagination">
        <?php previous_post_link('%link', '前の記事へ'); ?>
        <?php next_post_link('%link', '次の記事へ'); ?>
    </div>
    <div class="detail-news__btn fade-in">
        <a href="<?php echo esc_url(home_url("works")); ?>" class="btn btn--works">HOMEへ戻る</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>