<?php get_header(); ?>
<?php
$mainviews = [
    [
        'title' => 'お問い合わせ完了',
        'en' => 'Thanks',
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
        <h2 class="thanks__title">お問い合わせ<br class="u-mobile">ありがとうございました。</h2>
        <p class="thanks__txt">ご返答までにお時間をいただく場合があります。<br class="u-desktop">ご了承いただけますと幸いです。 </p>
        <div class="thanks__btn"><a href="<?php echo esc_url(home_url()); ?>" class="btn">HOMEへ戻る</a></div>
    </div>
</div>


<?php get_footer(); ?>