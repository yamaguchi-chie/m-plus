<?php get_header(); ?>
<?php
$mainviews = [
    [
        'title' => '選ばれる理由',
        'en' => 'Reason',
    ],
];
?>
<section class="sub-mv js-mv <?php if (is_page('reason')) {
    echo 'sub-mv--reason';
} ?>">
<?php get_template_part('template/sub-mv', null, ['mainviews' => $mainviews]); ?>
</section>

<section class="sub-reason-top">
    <div class="sub-reason-top__inner inner">
        <div class="sub-reason-top__contents fade-in">
            <h3 class="sub-reason-top__title">何でも相談できる街のリフォーム屋さん</h3>
            <p class="sub-reason-top__text">私たちは、「リフォームやリノベーションってどこに頼めばいいの？」と<br>お悩みの方のための、 身近で気軽に相談できる街のリフォーム屋さんです。<br>「こんな小さなことでもいいのかな？」「予算が決まってないけど大丈夫？」<br>「どんなリフォームがいいのか分からない…」など<br>おうちのお悩みを、気軽に話せる雰囲気を大切にしています。<br>そんな “ちょっとしたお困りごと” や “お家の未来の相談” に、<br>私たちがしっかり寄り添い、理想の住まいづくりを全力でサポートします。<br>「ちょっと話を聞いてみたいな」「まだ決めてないけど相談していい？」もちろん大歓迎です！<br>いつでも、どんなことでも、お気軽にご相談ください。</p>
            <div class="sub-reason-top__img"><div class="fade-in"><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/reason/img.webp" alt="" width="" height="" loading="lazy" decoding="async"></div></div>
        </div>
    </div>
</section>

<section class="sub-reason">
    <div class="sub-reason__inner inner">
        <div class="sub-reason__top fade-in">
            <h2 class="sub-reason__title fade-in">エムプラスが<br class="u-mobile">選ばれる３つの理由</h2>
        </div>
        <div class="sub-reason__body">
            <ul class="sub-reason__list">
                <li class="sub-reason__item">
                    <div class="sub-reason__photo fade-in"><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/reason/photo1.webp" alt="" width="" height="" loading="lazy" decoding="async"></div>
                    <div class="sub-reason__contents fade-in">
                        <div class="sub-reason__subTl">
                            <div class="sub-reason__point"><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/reason/point1.webp" alt="" width="" height="" loading="lazy" decoding="async"></div>
                            <h3 class="sub-reason__h3">信頼</h3>
                        </div>
                        <p class="sub-reason__catch">どんな小さなことでも気軽に相談OK！</p>
                        <p class="sub-reason__text">「こんなことで相談しても大丈夫かな？」と迷うようなことも、どうぞ気にせずお話しください！<br>ドアのガタつきや水漏れ修理、壁紙のちょっとした張り替えなど、 どんな小さなお困りごとでも大歓迎！<br>「こうしたいなぁ…」というぼんやりしたイメージでも大丈夫です。お客様と一緒に考えながら、 ピッタリの解決策をご提案します。</p>
                    </div>
                    <div class="sub-reason__deco fade-in"><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/reason/deco1.webp" alt="" width="" height="" loading="lazy" decoding="async"></div>
                </li>
                <li class="sub-reason__item sub-reason__item--reserve">
                    <div class="sub-reason__photo fade-in"><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/reason/photo2.webp" alt="" width="" height="" loading="lazy" decoding="async"></div>
                    <div class="sub-reason__contents fade-in">
                        <div class="sub-reason__subTl">
                            <div class="sub-reason__point"><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/reason/point2.webp" alt="" width="" height="" loading="lazy" decoding="async"></div>
                            <h3 class="sub-reason__h3">速さ</h3>
                        </div>
                        <p class="sub-reason__catch">スピード重視、丁寧に迅速対応します！</p>
                        <p class="sub-reason__text">「すぐに直したい！」「この日までに終わるかな？」そんなときもお任せください！<br>地域密着だからこそ、 スピーディーに対応できるのが強みです。<br>でも、スピードだけが売りではありません。<br>しっかり丁寧に作業して、ずっと安心できる仕上がり にします。「頼んでよかった！」と思っていただけるよう、心を込めて対応いたします。</p>
                    </div>
                    <div class="sub-reason__deco fade-in"><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/reason/deco2.webp" alt="" width="" height="" loading="lazy" decoding="async"></div>
                </li>
                <li class="sub-reason__item">
                    <div class="sub-reason__photo fade-in"><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/reason/photo3.webp" alt="" width="" height="" loading="lazy" decoding="async"></div>
                    <div class="sub-reason__contents fade-in">
                        <div class="sub-reason__subTl">
                            <div class="sub-reason__point"><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/reason/point3.webp" alt="" width="" height="" loading="lazy" decoding="async"></div>
                            <h3 class="sub-reason__h3">金額</h3>
                        </div>
                        <p class="sub-reason__catch">ムリなくできる、安心価格のリフォーム！</p>
                        <p class="sub-reason__text">「リフォームって高そう…」<br>そんな不安、ありませんか？<br>私たちは、 本当に必要な工事だけを、お手頃な価格でご提案。 ムリな営業は絶対にしません！<br>ご予算に合わせて、 できること・できないことを正直にお伝えしながら、一番いい方法を一緒に考えます。<br>「思っていたより気軽にできた！」と<br>喜んでいただけるよう、全力でサポートします。</p>
                    </div>
                    <div class="sub-reason__deco fade-in"><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/reason/deco3.webp" alt="" width="" height="" loading="lazy" decoding="async"></div>
                </li>
            </ul>
        </div>
    </div>
</section>

<div class="cta-wrap">
    <?php get_template_part('template/contact-catch'); ?>
    <?php get_template_part('template/cta'); ?>
</div>
<?php get_footer(); ?>