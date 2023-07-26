$(function () {
  scrollbarWidth = window.innerWidth - document.body.clientWidth;

  /* ------------------------------------------- */
  /* アンカーリンクのスクロールのアニメーション設定 */
  /* ------------------------------------------- */
  $('a[href^="#"]').click(function () {
    let getHeight = $("header").outerHeight(true);
    let speed = 500;
    let href = $(this).attr("href");
    let target = $(href == "#" || href == "" ? "html" : href);
    let position = target.offset().top;
    $("body,html").animate({ scrollTop: position - getHeight }, speed, "swing");
    return false;
  });

  /* ------------------------------------------- */
  /* URLにハッシュがついていた場合にスクロール位置を調整 */
  /* ------------------------------------------- */
  let hash = location.hash;
  if (hash) {
    let getHeight = $("header").outerHeight(true);
    let speed = 0;
    let target = $(hash);
    let position = target.offset().top;
    $("body,html")
      .delay(100)
      .animate({ scrollTop: position - getHeight }, speed, "swing");
  }

  /* ------------------------------------------- */
  /* ハンバーガーメニュー */
  /* ------------------------------------------- */
  $(document).on('click', '.hamburger-icon', function(){
    if($('html').hasClass("menu-on")){ //menu-onのとき閉じる
      $("body").removeClass("fixed").css({
        "top": '',
        "padding-right": '0'
      });
      $('html').removeClass("menu-on");
      window.scrollTo(0, scrollpos);
    } else { //menu-onじゃないとき、開く
      scrollpos = $(window).scrollTop();
      $('html').addClass("menu-on")
      $("body").addClass("fixed").css({
        "top": -scrollpos,
        "padding-right":scrollbarWidth
      });
    }
  });

});

/* -------------------------------------------------------------------------------------- */

$(window).on("load", function () {
  scrollbarWidth = window.innerWidth - document.body.clientWidth;

  scrollTop = $(window).scrollTop();
  documentHeight = $(document).innerHeight();
  windowHeight = $(window).height();
  headerHeight = $('header').outerHeight();
  footerHeight = $('footer').outerHeight();

  loadFlag();
  scrollFlag();
  fadePageup();
  checkEnd();
  setCSSCustomProperty();

});

/* -------------------------------------------------------------------------------------- */

$(window).on("scroll", function () {
  scrollbarWidth = window.innerWidth - document.body.clientWidth;

  scrollTop = $(window).scrollTop();

  fadePageup();
  checkEnd();
  scrollFlag();

});

/* -------------------------------------------------------------------------------------- */

$(window).on('resize', function(){
  scrollbarWidth = window.innerWidth - document.body.clientWidth;

  scrollTop = $(window).scrollTop();
  documentHeight = $(document).innerHeight();
  windowHeight = $(window).height();
  headerHeight = $('header').outerHeight();
  footerHeight = $('footer').outerHeight();

  setCSSCustomProperty();
  scrollFlag();

});

/* -------------------------------------------------------------------------------------- */

/* ------------------------------------------- */
/* loadflag */
/* ------------------------------------------- */
function loadFlag() {
  $(".loadFlag").addClass("on");
}

/* ------------------------------------------- */
/* scrollflag */
/* ------------------------------------------- */
function scrollFlag() {
  $(".scrollFlag").each(function(){
    var pos = $(this).offset().top;
    if (scrollTop > pos - windowHeight + windowHeight / 10){
      $(this).addClass("on");
    }else if (scrollTop < pos - windowHeight + windowHeight / 10){
      // $(this).removeClass("on");
    }
  });
}

/* ------------------------------------------- */
/* pageupボタン、scrollの表示/非表示 */
/* ------------------------------------------- */
function fadePageup() {
  if (scrollTop > headerHeight) {
    $("footer .pageup").fadeIn();
    // $(".scroll").fadeOut();
  } else if (scrollTop < headerHeight) {
    $("footer .pageup").fadeOut();
    // $(".scroll").fadeIn();
  }
}

/* ------------------------------------------- */
/* ページの最後までスクロールさせた場合にクラス付与 */
/* ------------------------------------------- */
function checkEnd() {
  let bottom = documentHeight - windowHeight - footerHeight;
  if (bottom <= scrollTop) {
    $("html").addClass("end");
  } else {
    $("html").removeClass("end");
  }
}

/* ------------------------------------------- */
/* CSSカスタムプロパティの設定 */
/* ------------------------------------------- */
function setCSSCustomProperty() {
  if(!$('body').hasClass('fixed')) {
    document.documentElement.style.setProperty('--scrollbar', scrollbarWidth+'px');
    document.documentElement.style.setProperty('--100vw', 'calc(100vw - '+scrollbarWidth+'px)');
  }
}

/* ------------------------------------------- */
/* ポップアップ用 */
/* ------------------------------------------- */
function popup(url) {
  let w = 1200;
  let h = 800;
  let left = screen.width / 2 - w / 2;
  let top = screen.height / 2 - h / 2;
  popupWindow = window.open(url, "", "toolbar=no, location=no, directories=no, status=no, menubar=no, resizable=yes, scrollbars=yes, copyhistory=no, width=" + w + ", height=" + h + ", top=" + top + ", left=" + left);
}