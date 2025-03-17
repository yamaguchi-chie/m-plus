<?php get_header(); ?>
<?php
$mainviews = [
    [
        'title' => '会 社 情 報',
        'en' => 'About Us',
    ],
];
?>
<section class="sub-mv <?php if (is_page('company')) {
    echo 'sub-mv--company';
} ?>">
<?php get_template_part('template/sub-mv', null, ['mainviews' => $mainviews]); ?>
</section>

<div class="sub-company">
    <div class="sub-company__inner inner">
        <div class="sub-company__body">
            <div class="sub-company__contents">
                <h2 class="sub-company__title">お客様の夢とこだわりをカタチにする、<br>まごころリフォーム・リノベーションの会社です。</h2>
                <p class="sub-company__txt">名古屋市や春日井市、小牧市を中心とした地域密着の<br>リフォーム・リノベーション会社・エムプラスです。<br>お客様との出会いとご縁、職人さんとの絆を大切にした<br>まごころを込めたリフォームを実現します。</p>
            </div>
            <div class="sub-company__img"><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/top/area/area-img.webp" alt="" width="" height="" loading="lazy" decoding="async"></div>
        </div>
    </div>
</div>


<?php get_footer(); ?>