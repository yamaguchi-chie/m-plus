<?php get_header(); ?>
<?php
$mainviews = [
    [
        'title' => 'お探しのページは見つかりませんでした',
        'en' => 'Not Found',
    ],
];
?>
<section class="sub-mv js-mv <?php if (is_page('contact')) {
    echo 'sub-mv--contact';
} ?>">
<?php get_template_part('template/sub-mv', null, ['mainviews' => $mainviews]); ?>
</section>

<div class="thanks">
    <div class="thanks__inner inner">
        <h2 class="thanks__title">お探しのページは<br class="u-mobile">見つかりませんでした</h2>
        <div class="thanks__btn"><a href="<?php echo esc_url(home_url()); ?>" class="btn">トップへ戻る</a></div>
    </div>
</div>
<?php get_footer(); ?>
