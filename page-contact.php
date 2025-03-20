<?php get_header(); ?>
<?php
$mainviews = [
    [
        'title' => 'お問い合わせ',
        'en' => 'Contact',
    ],
];
?>
<section class="sub-mv <?php if (is_page('contact')) {
    echo 'sub-mv--contact';
} ?>">
<?php get_template_part('template/sub-mv', null, ['mainviews' => $mainviews]); ?>
</section>

<div class="sub-contact">
    <div class="sub-contact__inner inner">
        <p class="sub-contact__catch">各項目入力後、画面下部の【確認画面】 ボタンをクリックしていただきますと、入力内容を確認できます。<br>内容を確認後、【送信】ボタンを押してください。<br>お問い合わせフォームからのお問い合わせは、ご返答までにお時間をいただく場合があります。<br>お急ぎの場合は、お電話にてお問い合わせください。 ※営業を目的としたお問い合わせはご遠慮ください。</p>
        <div class="sub-contact__body">
            <form class="sub-contact__form" id="form">
                <dl class="form-rows">
                    <div class="form-rows__item form-row">
                        <dt class="form-row__text txt">
                            <label for="your-job" class="form-row__any">お勤め先</label>
                            <p class="form-row__note">会社名 ・ 団体名 ・ 部署名</p>
                        </dt>
                        <dd class="form-row__input txt">
                            <input type="text" id="your-job" placeholder="株式会社○○○○○　営業部">
                        </dd>
                    </div>
                    <div class="form-rows__item form-row">
                        <dt class="form-row__text txt">
                            <label for="your-name" class="form-row__required">お名前</label>
                        </dt>
                        <dd class="form-row__input txt">
                            <input type="text" id="your-name" placeholder="山田　太郎" required>
                        </dd>
                    </div>
                    <div class="form-rows__item form-row">
                        <dt class="form-row__text txt">
                            <label for="your-hurigana" class="form-row__required">フリガナ</label>
                        </dt>
                        <dd class="form-row__input txt">
                            <input type="text" id="your-hurigana" placeholder="ヤマダ　タロウ" required>
                        </dd>
                    </div>
                    <div class="form-rows__item form-row">
                        <dt class="form-row__text txt">
                            <label for="your-adress-number" class="form-row__required">郵便番号</label>
                        </dt>
                        <dd class="form-row__input txt">
                            <input type="tel" id="your-adress-number" placeholder="0000000 ※ハイフンなしでご入力ください。" required>
                        </dd>
                    </div>
                    <div class="form-rows__item form-row">
                        <dt class="form-row__text txt">
                            <label for="your-adress" class="form-row__required">住所</label>
                        </dt>
                        <dd class="form-row__input txt">
                            <input type="tel" id="your-adress" placeholder="○○○県○○○市○○○区○○○町○○○　○○○号室" required>
                        </dd>
                    </div>
                    <div class="form-rows__item form-row">
                        <dt class="form-row__text txt">
                            <label for="your-mail" class="form-row__required">メールアドレス</label>
                        </dt>
                        <dd class="form-row__input txt">
                            <input type="email" id="your-mail" placeholder="sample00000＠xxx.co.jp" required>
                        </dd>
                    </div>
                    <div class="form-rows__item form-row">
                        <dt class="form-row__text txt">
                            <label for="your-tel" class="form-row__required">電話番号</label>
                        </dt>
                        <dd class="form-row__input txt">
                            <input type="email" id="your-tel" placeholder="半角数字で、市外局番からハイフンなしでご入力ください。" required>
                        </dd>
                    </div>
                    <div class="form-rows__item form-row">
                        <dt class="form-row__text txt">
                            <label for="your-contact" class="form-row__any">お問い合わせ内容</label>
                        </dt>
                        <dd class="form-row__input txt">
                            <textarea name="your-contact" id="your-contact" maxlength="200" placeholder="（最大文字数は1000文字です。）"></textarea>
                        </dd>
                    </div>
                </dl>
                <div class="sub-contact__note">
                    <p>ご質問やご要望などがございましたら、お気軽にお問い合わせください。<br>下記のプライバシーポリシー（個人情報保護方針）をご確認の上、送信してください。</p>
                </div>
                <div class="sub-contact__privacy">送信にあたっては、こちらのプライバシーポリシーをご覧ください。</div>
                <div class="sub-contact__check">
                    <label for="your-privacy">
                        <input type="checkbox" id="your-privacy" name="your-privacy" value="プライバシーポリシーの同意" required>
                        <p class="sub-contact__link">※ 個人情報の取り扱いについて、同意します。</p>
                    </label>
                </div>
                <div class="sub-contact__submit btns">
                    <div class="btns__item">
                        <input class="btn" type="submit" value="送信" id="js-submit" disabled>
                        <span></span>
                    </div>
                    <div class="btns__item">
                        <input class="btn  btn--reset" type="reset" value="リセット">
                    </div>
                </div>
            </form>
        </div>
        <div class="sub-contact__bottom">
            <div class="sub-contact__box">
                <h3 class="sub-contact__subTl">【 電話・FAXでのお問い合わせはこちらまで 】</h3><span class="sub-contact__span">※受付：平日9：00〜18：00</span>
                <div class="sub-contact__flex">
                    <div class="sub-contact__tel"><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/foot-tel.webp" alt="" loading="lazy" decoding="async"><span>:0120-857-735</span></div>
                    <p class="sub-contact__fax">FAX<span>:052-508-5032</span></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>