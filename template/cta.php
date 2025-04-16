<ul class="cta-btn-list">
    <li class="cat-btn-list__item  fade-in">
        <a href="tel:0120-857-735" class="cta-btn cta-btn--tel">
            <div class="cta-btn__contents">
                <!-- 電話で相談する
                <p class="cta-btn__tel">0120-857-735</p>
                <p class="cta-btn__note">【受付】<span>平日9：00〜18：00</span></p> -->
                <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/cta-tel.webp" alt="" loading="lazy" decoding="async">
            </div>
        </a>
    </li>
    <li class="cat-btn-list__item  fade-in"><a href="<?php echo esc_url(home_url("contact")); ?>" class="cta-btn cta-btn--mail"><div class="cta-btn__contents">
        <!-- <span>メールでの<br>お問い合わせ</span> -->
         <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/cta-mail.webp" alt="" loading="lazy" decoding="async">
    </div></a></li>
</ul>