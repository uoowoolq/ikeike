jQuery(document).ready(function(){
  jQuery('.slick').slick({
    slidesToShow: 2,
    dots: true,
    infinite: true,
    autoplay: true,
    responsive: [
      {
        breakpoint: 1280,
        settings: {

          slidesToShow: 2
        }
      },
      {
        breakpoint: 720,
        settings: {

          slidesToShow: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });

  var scroll_to_top = jQuery('.scroll-to-top');
    scroll_to_top.hide();
    //スクロールが100に達したらボタン表示
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 100) {
        //ボタンの表示方法
            scroll_to_top.fadeIn();
        } else {
        //ボタンの非表示方法
            scroll_to_top.fadeOut();
        }
    });
    //スクロールしてトップ
    scroll_to_top.click(function () {
        jQuery('body,html').animate({
            scrollTop: 0
        }, 500);
        return false;
    });
});
