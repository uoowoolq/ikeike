jQuery(document).ready(function(){
  jQuery('.slick').slick({
    slidesToShow: 3,
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
});
