<?php get_header(); ?>
<?php
$mainviews = [
    [
        'title' => 'サイトマップ',
        'en' => 'Site map',
    ],
];
?>
<section class="sub-mv js-mv <?php if (is_page('sitemap')) {
    echo 'sub-mv--privacy';
} ?>">
<?php get_template_part('template/sub-mv', null, ['mainviews' => $mainviews]); ?>
</section>

<section class="sitemap">
    <div class="sitemap__inner inner">
        <ul class="sitemap__list">
            <li class="sitemap__item">
                <h2 class="sitemap__subTl sitemap__subTl--space">T  O  P</h2>
                <ul class="sitemap__contents sitemap__contents--gap">
                    <li class="sitemap__link sitemap__link--circle"><a href="<?php echo esc_url(home_url("reason")); ?>">top</a></li>
                    <li class="sitemap__link sitemap__link--circle"><a href="<?php echo esc_url(home_url("reason")); ?>">新着情報一覧</a></li>
                </ul>
            </li>
            <li class="sitemap__item">
                <h2 class="sitemap__subTl">選ばれる理由</h2>
                <ul class="sitemap__contents">
                    <li class="sitemap__link"><a href="<?php echo esc_url(home_url("reason")); ?>">選ばれる理由</a></li>
                </ul>
            </li>
            <li class="sitemap__item">
                <h2 class="sitemap__subTl">リフォームメニュー</h2>
                <ul class="sitemap__contents">
                    <li class="sitemap__nav-item">
                        <ul>
                            <li class="sitemap__link"><a href="<?php echo esc_url(home_url("reform-menu/#kitchen")); ?>">キッチンリフォーム</a></li>
                            <li class="sitemap__link"><a href="<?php echo esc_url(home_url("reform-menu/#bath")); ?>">浴室リフォーム</a></li>
                            <li class="sitemap__link"><a href="<?php echo esc_url(home_url("reform-menu/#toilet")); ?>">トイレリフォーム</a></li>
                        </ul>
                    </li>
                    <li class="sitemap__nav-item">
                    <ul>
                        <li class="sitemap__link"><a href="<?php echo esc_url(home_url("reform-menu/#washroom")); ?>">洗面リフォーム</a></li>
                        <li class="sitemap__link"><a href="<?php echo esc_url(home_url("reform-menu/#interior")); ?>">内装リフォーム</a></li>
                        <li class="sitemap__link"><a href="<?php echo esc_url(home_url("reform-menu/#exterior")); ?>">外装リフォーム</a></li>
                    </ul>
                    </li>
                </ul>
            </li>
            <li class="sitemap__item">
                <h2 class="sitemap__subTl">リフォームの流れ</h2>
                <ul class="sitemap__contents">
                    <li class="sitemap__link"><a href="<?php echo esc_url(home_url("flow")); ?>">ご依頼までの流れ</a></li>
                </ul>
            </li>
            <li class="sitemap__item">
                <h2 class="sitemap__subTl">会社情報</h2>
                <ul class="sitemap__contents sitemap__contents--gap">
                    <li class="sitemap__link"><a href="<?php echo esc_url(home_url("company/#greeting")); ?>">代表挨拶</a></li>
                    <li class="sitemap__link"><a href="<?php echo esc_url(home_url("company/#concept")); ?>">経営理念</a></li>
                    <li class="sitemap__link"><a href="<?php echo esc_url(home_url("company/#overview")); ?>">会社概要</a></li>
                    <li class="sitemap__link"><a href="<?php echo esc_url(home_url("company/#access")); ?>">アクセス</a></li>
                </ul>
            </li>
        </ul>
        <ul class="sitemap__bottom">
            <li class="sitemap__link sitemap__link--circle"><a href="<?php echo esc_url(home_url("contact")); ?>">お問い合わせ</a></li>
            <li class="sitemap__link sitemap__link--circle"><a href="<?php echo esc_url(home_url("privacy-policy")); ?>">プライバシーポリシー</a></li>
            <li class="sitemap__link sitemap__link--circle"><a href="<?php echo esc_url(home_url("sitemap")); ?>">サイトマップ</a></li>
        </ul>
    </div>
</section>

<?php get_footer(); ?>