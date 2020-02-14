import "./components/menu/menu";
// import "./components/product_gallery";
// import "./components/owl_carousel";
import "./components/filters/mfilters";
import "./components/smooth_scroll";
import "./components/map";
import $ from "jquery";

let items, menu;

$(document).ready(function() {
  items = $(".menu_wrapper-item-main_menu-item");
  menu = $(".menu_wrapper-item-main_menu-item-text_secondary");

  $(items[5]).hover(function() {
    $(menu).css("display", "block");
  });

  $(".menu_wrapper-item-main_menu").mouseleave(function() {
    $(menu).css("display", "none");
  });

  $(menu).hover(function() {
    $(menu).css("display", "block");
  });
  $(menu).mouseleave(function() {
    $(menu).css("display", "none");
  });

  var gallery = new Swiper(".details-swiper", {
    pagination: {
      el: ".swiper-pagination",
      type: "bullets"
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    }
  });

  if (window.screen.width < 450) {
    var swiper = new Swiper(".main-slider", {
      direction: "vertical",
      slidesPerView: 1,
      spaceBetween: 30,
      mousewheel: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true
      }
    });
  } else {
    var swiper = new Swiper(".main-slider", {
      pagination: {
        el: ".swiper-pagination",
        type: "bullets"
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
      }
    });
  }
});