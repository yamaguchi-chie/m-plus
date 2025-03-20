jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる

//ドロワーメニュー
$(".js-header-hamburger").click(function () {
    $(".sp-nav").toggleClass("js-open");
    $(".js-header-hamburger>span").toggleClass("js-open");
    $(".js-header-hamburger").toggleClass("js-open");

      //クリックしたときMV以上だったら、透過しない
    if ($('.js-mainview').height() < $(window).scrollTop()) {
      $(".js-header-hamburger>span").addClass("js-opacity");
    } else { //クリックしたときMV以下だったら、透過する
      $(".js-header-hamburger>span").toggleClass("js-opacity");
    }
});

});

// jQuery(function($){
//   $('.js-adress-number').attr('pattern', '^[0-9]{7}$');
// });

jQuery(function($){
  $('.js-adress-number').each(function() {
    const $input = $(this);
    
    // エラーメッセージ用の要素を追加
    const $errorMsg = $('<span class="error-message" style="color: #dc3232; font-weight: normal; display: none;">ハイフンなしでご入力ください</span>');
    $input.after($errorMsg);
    
    // 入力時にハイフンをチェック
    $input.on('input', function() {
      const value = $(this).val();
      if (value.includes('-')) {
        $errorMsg.show();
      } else {
        $errorMsg.hide();
      }
    });

    // フォーム送信時のバリデーション
    $input.closest('form').on('submit', function(e) {
      if ($input.val().includes('-')) {
        e.preventDefault(); // 送信を阻止
        $errorMsg.show();
      }
    });
  });
});

jQuery(function($){
  $('.js-tel').each(function() {
    const $input = $(this);
    
    // エラーメッセージ用の要素を追加
    const $errorMsg = $('<span class="error-message" style="color: #dc3232; font-weight: normal; display: none;">ハイフンなしでご入力ください</span>');
    $input.after($errorMsg);
    
    // 入力時にハイフンをチェック
    $input.on('input', function() {
      const value = $(this).val();
      if (value.includes('-')) {
        $errorMsg.show();
      } else {
        $errorMsg.hide();
      }
    });

    // フォーム送信時のバリデーション
    $input.closest('form').on('submit', function(e) {
      if ($input.val().includes('-')) {
        e.preventDefault(); // 送信を阻止
        $errorMsg.show();
      }
    });
  });
});


var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    loop: true,
    speed: 5000,
    autoplay: {

    },
    pagination: {
        el: ".swiper-pagination",
    },
  });

  const options = {
    root: null, // ビューポート（画面）を基準
    rootMargin: "0px 0px -13% 0px", // 画面の下10%の位置を基準
    threshold: 0 // 要素が1pxでも交差したら発火
  };
  
  // コールバック関数
  const callback = (entries, observer) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add("appear"); // フェードインのクラスを追加
            observer.unobserve(entry.target); // 1度発火したら監視を終了
        }
    });
  };
  
  // Intersection Observer を作成
  const observer = new IntersectionObserver(callback, options);
  
  // すべての.fade-in要素を監視
  document.querySelectorAll(".fade-in").forEach(el => observer.observe(el));