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

<section class="greeting">
    <div class="greeting__inner inner">
        <div class="greeting__title">
            <h2 class="simple-Tl">代表挨拶</h2>
        </div>
        <div class="greeting__body">
            <div class="greeting__left">
                <div class="greeting__img"><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/company/img.webp" alt="" width="" height="" loading="lazy" decoding="async"></div>
                <h3 class="greeting__name"><span>代 表</span>後藤 淳平</h3>
            </div>
            <div class="greeting__contents">
                <p class="greeting__txt">私たちは、お客様の理想の暮らしをカタチにするリフォーム・リノベーションを手がけています。家はただ住む場所ではなく、家族の時間や思い出を育む大切な場所。だからこそ、お客様の想いに寄り添い、丁寧で確かな施工を心がけています。<br>お客様一人ひとりの想いやこだわりにしっかり耳を傾けることを大切にしています。<br>「ここをもう少し使いやすくしたい」「もっと快適な空間にしたい」など、どんな小さなことでもお気軽にご相談ください。<br>エムプラスでは、小さなリフォームから大規模なリノベーションまで幅広く対応しております。デザイン性や機能性、コスト感を両立させたご提案をお約束します。<br><br>これからも、地域の皆さまに信頼されるパートナーとして、高品質なサービスとアフターサポートを提供してまいります。<br>理想の住まいづくり、私たちと一緒に始めましょう。（未）</p>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>