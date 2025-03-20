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


//トップへ戻るボタン
function PageTopAnime() {
  var mv = $('.mv').height();
  var scroll = $(window).scrollTop(); //スクロール値を取得
  if (scroll >= mv){//mvを超えたら
    $('.to-btn').removeClass('DownMove');   // DownMoveというクラス名を除去して
    $('.to-btn').addClass('UpMove');      // UpMoveというクラス名を追加して出現
  }else{//それ以外は
    if($('.to-btn').hasClass('UpMove')){//UpMoveというクラス名が既に付与されていたら
      $('.to-btn').removeClass('UpMove'); //  UpMoveというクラス名を除去し
      $('.to-btn').addClass('DownMove');  // DownMoveというクラス名を追加して非表示
    }
  }
  
  var wH = window.innerHeight; //画面の高さを取得
  var footerPos =  $('.footer').offset().top; //footerの位置を取得
  if(scroll+wH >= (footerPos+10)) {
    var pos = (scroll+wH) - footerPos+10 //スクロールの値＋画面の高さからfooterの位置＋10pxを引いた場所を取得し
    $('.to-btn').css('bottom',pos); //.to-btnに上記の値をCSSのbottomに直接指定してフッター手前で止まるようにする
  }else{//それ以外は
    if($('.to-btn').hasClass('UpMove')){//UpMoveというクラス名がついていたら
      $('.to-btn').css('bottom','20px');// 下から20pxの位置にページリンクを指定
    }
  }
}

// 画面をスクロールをしたら動かしたい場合の記述
$(window).scroll(function () {
PageTopAnime();/* スクロールした際の動きの関数を呼ぶ*/
});

// ページが読み込まれたらすぐに動かしたい場合の記述
$(window).on('load', function () {
PageTopAnime();/* スクロールした際の動きの関数を呼ぶ*/
});

// .to-btnをクリックした際の設定
$('.to-btn').click(function () {
  $('body,html').animate({
      scrollTop: 0//ページトップまでスクロール
  }, 500);//ページトップスクロールの速さ。数字が大きいほど遅くなる
  return false;//リンク自体の無効化
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