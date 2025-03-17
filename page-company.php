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
                <h2 class="sub-company__title">お客様の夢とこだわりをカタチにする、<br class="u-desktop">まごころリフォーム・リノベーションの会社です。</h2>
                <p class="sub-company__txt">名古屋市や春日井市、小牧市を中心とした地域密着の<br class="u-desktop">リフォーム・リノベーション会社・エムプラスです。<br>お客様との出会いとご縁、職人さんとの絆を大切にした<br class="u-desktop">まごころを込めたリフォームを実現します。</p>
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

<section class="concept">
    <div class="concept__inner inner">
    <div class="concept__title">
            <h2 class="simple-Tl">経営理念</h2>
        </div>
        <div class="concept__body">
            <h3 class="concept__subTl">「義を見てせざるは勇無きなり」</h3>
            <ul class="concept__list">
                <li class="concept__item">お客様のためにあらゆる志事を行います。</li>
                <li class="concept__item">お客様の立場に立ち、正しい提案と正しい提供を行います。</li>
            </ul>
            <div class="concept__img"><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/company/img2.webp" alt="" width="" height="" loading="lazy" decoding="async"></div>
        </div>
    </div>
</section>

<section class="overview">
    <div class="overview__inner inner">
    <div class="overview__title">
            <h2 class="simple-Tl">会社概要</h2>
        </div>
        <dl class="overview__body label-list">
            <div class="label-list__item label">
                <dt class="label__left">
                    <p class="label__title">会社名</p>
                </dt>
                <dd class="label__right">
                    <p class="label__text">エムプラス株式会社</p>
                </dd>
            </div>
            <div class="label-list__item label">
                <dt class="label__left">
                    <p class="label__title">住　所</p>
                </dt>
                <dd class="label__right">
                    <p class="label__text">〒462‒0825 愛知県名古屋市北区大曽根3‒10‒7</p>
                </dd>
            </div>
            <div class="label-list__item label">
                <dt class="label__left">
                    <p class="label__title">電話・FAX</p>
                </dt>
                <dd class="label__right">
                    <p class="label__text">TEL:0120‒857‒735　 FAX:052‒508‒5032</p>
                </dd>
            </div>
            <div class="label-list__item label">
                <dt class="label__left">
                    <p class="label__title">代表者</p>
                </dt>
                <dd class="label__right">
                    <p class="label__text">代表取締役  後藤 淳平</p>
                </dd>
            </div>
            <div class="label-list__item label">
                <dt class="label__left">
                    <p class="label__title">事業内容</p>
                </dt>
                <dd class="label__right">
                    <p class="label__text">リフォーム事業、リノベーション事業、<br>新築改装工事、店舗改装工事、<br>マンションリノベーション</p>
                </dd>
            </div>
            <div class="label-list__item label">
                <dt class="label__left">
                    <p class="label__title">建設業許可番号</p>
                </dt>
                <dd class="label__right">
                    <p class="label__text">愛知県知事許可（般‒６）第１１１７０５号　</p>
                </dd>
            </div>
            <div class="label-list__item label">
                <dt class="label__left">
                    <p class="label__title">取引銀行　</p>
                </dt>
                <dd class="label__right">
                    <p class="label__text">三菱ＵＦＪ銀行</p>
                </dd>
            </div>
        </dl>
    </div>
</section>

<section class="access">
    <div class="access__inner inner">
        <div class="access__title">
            <h2 class="simple-Tl">アクセス</h2>
        </div>
        <div class="access__wrap">
            <div class="access__map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3260.64134541547!2d136.9362837!3d35.1904907!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60037103e67ad38f%3A0xa934f430293f6016!2z44CSNDYyLTA4MjUg5oSb55-l55yM5ZCN5Y-k5bGL5biC5YyX5Yy65aSn5pu95qC577yT5LiB55uu77yR77yQ4oiS77yX!5e0!3m2!1sja!2sjp!4v1742193569758!5m2!1sja!2sjp" width="960" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <p class="access__txt">〒462-0825 愛知県名古屋市北区大曽根3-10-7</p>
    </div>
</section>

<div class="sub-company-bg">
    <?php get_template_part('template/top-area'); ?>
    <?php get_template_part('template/cta'); ?>
</div>


<?php get_footer(); ?>