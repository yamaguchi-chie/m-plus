<?php get_header(); ?>
<?php
$mainviews = [
    [
        'title' => 'リフォームの流れ',
        'en' => 'Flow',
    ],
];
?>
<section class="sub-mv js-mv <?php if (is_page('flow')) {
    echo 'sub-mv--flow';
} ?>">
<?php get_template_part('template/sub-mv', null, ['mainviews' => $mainviews]); ?>
</section>

<section class="sub-flow-top">
    <div class="sub-flow-top__inner inner">
        <div class="sub-flow-top__contents fade-in">
            <h3 class="sub-flow-top__title">お客様に寄り添う家づくりで、理想をカタチにする安心リフォームの流れ。</h3>
            <p class="sub-flow-top__text">まずは、どんな小さなことでも構いません。夢を膨らませるのが第一歩です！<br>「もっと明るいリビングで家族と過ごしたい」「キッチンを広くして、友達と料理を楽しみたい」<br>「子どもたちがのびのび遊べる空間が欲しい」など、お客様の理想の暮らしをお聞かせください。<br>私たちは、その想いにしっかり寄り添いながら、一緒に未来の家を描いていきます。<br>ご相談をお聞きした上で、現地調査を行いながら最適なプランをご提案いたします。<br>自社施工なので、お引渡しからアフターフォローまで安心してお任せいただけます。</p>
        </div>
        <div class="sub-flow-top__img fade-in"><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/top/flow-img.webp" alt="" width="" height="" loading="lazy" decoding="async"></div>
    </div>
</section>

<section class="flow">
    <div class="flow__inner inner">
        <ul class="flow__list">
            <li class="flow__item fade-in">
                <article class="flow__wrap">
                    <div class="flow__top">
                        <h3 class="flow__title"><span>【理想の暮らしの第一歩】</span>まずはお話を<br class="u-mobile">聞かせてください</h3>
                    </div>
                    <div class="flow__body">
                        <div class="flow__img"><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/flow/1.webp" alt="" width="" height="" loading="lazy" decoding="async"></div>
                        <p class="flow__txt">リフォームやリノベーションって、どこから始めたらいいのか迷いますよね。でも大丈夫。最初の一歩は、あなたの「こんな暮らしがしたい！」という気持ちを聞かせてもらうことから始まります。<br>「明るく開放的なキッチンで家族と一緒に料理がしたい」「子どもが走り回れる広いリビングが欲しい」「趣味の時間を楽しめる空間が欲しい」など、具体的でも、漠然としたイメージでもOK。私たちはその思いに寄り添い、じっくりとお話を伺います。</p>
                    </div>
                </article>
            </li>
            <li class="flow__item fade-in">
                <article class="flow__wrap">
                    <div class="flow__top">
                        <h3 class="flow__title"><span>【無理なく理想を叶えるために】</span>一緒に考える予算と<br class="u-mobile">スケジュール</h3>
                    </div>
                    <div class="flow__body">
                        <div class="flow__img"><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/flow/2.webp" alt="" width="" height="" loading="lazy" decoding="async"></div>
                        <p class="flow__txt">「どのくらいの費用がかかるの？」「思っている通りにできるかな？」と不安に思うこともあるでしょう。<br>でも、その不安も一緒に解決していきます。<br>まずはざっくりとしたご予算をお聞きしながら、予算内でできるベストなプランを一緒に考えます。<br>必要に応じて、「ここはこだわる」「ここはシンプルに」と、メリハリのある提案をすることで、無理のない計画を立てていきます。</p>
                    </div>
                </article>
            </li>
            <li class="flow__item fade-in">
                <article class="flow__wrap">
                    <div class="flow__top">
                        <h3 class="flow__title"><span>【今の家と向き合う時間】</span>現地調査と暮らしの<br class="u-mobile">ヒアリング </h3>
                    </div>
                    <div class="flow__body">
                        <div class="flow__img"><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/flow/3.webp" alt="" width="" height="" loading="lazy" decoding="async"></div>
                        <p class="flow__txt">実際にお住まいを拝見して、家の状態や環境をしっかり確認します。<br>ただ建物を見るだけではなく、今の暮らしの中で感じていることや困っていることをお聞きし、家の特徴や課題を一緒に洗い出します。<br>「ここがもっとこうだったら便利なのに」「このスペース、うまく活用できないかな？」といった、普段の小さな気づきが理想の家づくりのヒントになるんです。</p>
                    </div>
                </article>
            </li>
            <li class="flow__item fade-in">
                <article class="flow__wrap">
                    <div class="flow__top">
                        <h3 class="flow__title"><span>【プラン作成とご提案】</span>お客様の理想をカタチに</h3>
                    </div>
                    <div class="flow__body">
                        <div class="flow__img"><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/flow/4.webp" alt="" width="" height="" loading="lazy" decoding="async"></div>
                        <p class="flow__txt">ヒアリングと現地調査をもとに、お客様の理想に寄り添ったプランを作成します。<br>図面などを使って、完成後のイメージがしやすいようにご提案します。素材や色味もサンプルを見ながら選べるので、「こんな感じにしたかった！」とワクワクする瞬間がたくさん待っています。<br>「やっぱりここは変更したい」「もっとこうできる？」というリクエストも大歓迎。納得がいくまで一緒に考えていきます。</p>
                    </div>
                </article>
            </li>
            <li class="flow__item fade-in">
                <article class="flow__wrap">
                    <div class="flow__top">
                        <h3 class="flow__title"><span>【不安ゼロで進めるために】</span>契約と工事準備</h3>
                    </div>
                    <div class="flow__body">
                        <div class="flow__img"><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/flow/5.webp" alt="" width="" height="" loading="lazy" decoding="async"></div>
                        <p class="flow__txt">プランが決まったら、細かい部分までしっかりご説明してからご契約となります。<br>工事の内容、スケジュール、費用、保証についても、ひとつひとつ丁寧にお話しします。<br>「ここまで細かく説明してもらえるとは思わなかった！」という声をよくいただきます。どんな小さな疑問でも、納得いくまでお答えするのが私たちのスタイルです。</p>
                    </div>
                </article>
            </li>
            <li class="flow__item fade-in">
                <article class="flow__wrap">
                    <div class="flow__top">
                        <h3 class="flow__title"><span>【進捗も一緒に確認していきます】</span>いよいよ工事スタート </h3>
                    </div>
                    <div class="flow__body">
                        <div class="flow__img"><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/flow/6.webp" alt="" width="" height="" loading="lazy" decoding="async"></div>
                        <p class="flow__txt">工事が始まった後も、お客様と一緒に現場の進み具合を確認していきます。<br>「今、こんなふうに進んでます！」と定期的にご報告し、必要があれば現場を一緒に見ながら調整もできます。<br>途中で気づいたことや「ここ、もう少しこうしたい！」という変更も柔軟に対応します。<br>気になるところがあればすぐにお伝えください。</p>
                    </div>
                </article>
            </li>
            <li class="flow__item fade-in">
                <article class="flow__wrap">
                    <div class="flow__top">
                        <h3 class="flow__title"><span>【ここからが本当のスタート】</span>完成！<br class="u-mobile">新しい暮らしの始まり</h3>
                    </div>
                    <div class="flow__body">
                        <div class="flow__img"><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/flow/7.webp" alt="" width="" height="" loading="lazy" decoding="async"></div>
                        <p class="flow__txt">理想の家がカタチになった瞬間は、私たちにとっても特別な瞬間。<br>一緒に歩んできた時間があるからこそ、完成したときの喜びもひとしおです。新しいお家で過ごす時間が、毎日をもっと特別なものにしてくれるはずです。<br>引き渡しの前に最終チェックを行い、気になる点はすぐに対応します。引き渡し後も、定期的なアフターサポートを行うので、暮らし始めてからの小さな疑問や不具合もすぐにご相談いただけます。</p>
                    </div>
                </article>
            </li>
        </ul>
    </div>
</section>

<div class="cta-wrap">
    <?php get_template_part('template/contact-catch'); ?>
    <?php get_template_part('template/cta'); ?>
</div>
<?php get_footer(); ?>