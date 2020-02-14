import $ from 'jquery';

$(document).ready(function() {
  $("#imageGallery").lightSlider({
    gallery: true,
    item: 1,
    loop: true,
    thumbItem: 5,
    slideMargin: 0,
    thumbMargin: 5,
    enableDrag: true,
    vThumbWidth: 100,
    verticalHeight: 100,
    currentPagerPosition: "left",
    // onSliderLoad: function(el) {
    //   el.lightGallery({
    //     selector: "#imageGallery .lslide"
    //   });
    // }
  });


  $(".lSGallery li").css("width", 100 + "px").css("height", 100 + "px")

});

