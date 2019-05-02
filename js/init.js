var sfa=(function(){
  return{
    googleTrans:function(){
      function googleTranslateElementInit() {
        new google.translate.TranslateElement({
          pageLanguage: 'en',
          gaTrack: false,
          gaId: '',
          layout: google.translate.TranslateElement.InlineLayout.SIMPLE
        }, 'google_translate_element');
      }
    },
    banner:function(){
    $(".bannerslide").owlCarousel({
         items :1,
         navigation : true,
         pagination : true,
         autoPlay : true,
         singleItem : true,
         goToFirst : true
      });
    },
    backTop: function(){
      $(window).scroll(function () {
      if ($(this).scrollTop() > 100) {
        $('.backTop').fadeIn();
      } else {
        $('.backTop').fadeOut();
      }
    });
    // scroll body to 0px on click
      $('.backTop a').click(function () {
        $('body,html').animate({
          scrollTop: 0
        }, 1100);
        return false;
      });
    /*  $(".sticky-wrapper").sticky({topSpacing:0});*/
    },

header_shrink:function(){
  $(window).scroll(function() {
  if ($(document).scrollTop() > 50) {
    $('header').addClass('shrink');
  } else {
    $('header').removeClass('shrink');
  }
});
  }
} //return end
})();


$("#owl-demo").owlCarousel({
  items :1, //10 items above 1000px browser width
  itemsDesktop : [1000,1], //5 items between 1000px and 901px
  itemsDesktopSmall : [900,1], // betweem 900px and 601px
  itemsTablet: [670,1], //2 items between 600 and 0
  itemsMobile : [380,1], // itemsMobile disabled - inherit from itemsTablet option
  navigation : false,
  pagination : true,
  autoPlay: 6000
});
$("#owl-demo1").owlCarousel({
  items :1, //10 items above 1000px browser width
  itemsDesktop : [1000,1], //5 items between 1000px and 901px
  itemsDesktopSmall : [900,1], // betweem 900px and 601px
  itemsTablet: [670,1], //2 items between 600 and 0
  itemsMobile : [380,1], // itemsMobile disabled - inherit from itemsTablet option
  navigation : false,
  pagination : true,
  autoPlay: 3000
});
$("#owl-demo2").owlCarousel({
  items :1, //10 items above 1000px browser width
  itemsDesktop : [1000,1], //5 items between 1000px and 901px
  itemsDesktopSmall : [900,1], // betweem 900px and 601px
  itemsTablet: [670,1], //2 items between 600 and 0
  itemsMobile : [480,1], // itemsMobile disabled - inherit from itemsTablet option
  navigation : false,
  pagination : true,
  responsive :true,
  autoPlay: 3000
});
$("#owl-demo3").owlCarousel({
  items :4, //10 items above 1000px browser width
  itemsDesktop : [1000,4], //5 items between 1000px and 901px
  itemsDesktopSmall : [900,3], // betweem 900px and 601px
  itemsTablet: [670,1], //2 items between 600 and 0
  itemsMobile : [380,1], // itemsMobile disabled - inherit from itemsTablet option
  navigation : true,
  pagination : false,
  autoPlay: false
});
$("#owl-demo4").owlCarousel({
  items :1, //10 items above 1000px browser width
  itemsDesktop : [1000,1], //5 items between 1000px and 901px
  itemsDesktopSmall : [900,1], // betweem 900px and 601px
  itemsTablet: [670,1], //2 items between 600 and 0
  itemsMobile : [480,1], // itemsMobile disabled - inherit from itemsTablet option
  navigation : false,
  pagination : true,
  responsive :true,
  autoPlay: 3000
});
$("#owl-demo-inner").owlCarousel({
  items :1, //10 items above 1000px browser width
  itemsDesktop : [1000,1], //5 items between 1000px and 901px
  itemsDesktopSmall : [900,1], // betweem 900px and 601px
  itemsTablet: [670,1], //2 items between 600 and 0
  itemsMobile : [380,1], // itemsMobile disabled - inherit from itemsTablet option
  navigation : false,
  pagination : true,
  autoPlay: false
});