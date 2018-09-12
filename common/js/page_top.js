//slick.js - スライダープラグイン
$(function() {
  $('.jsSliderTop').slick({
    dots: true,
    infinite: true,
    autoplaySpeed: 3000,
    speed: 700,
    fade: true,
    cssEase: 'linear',
    autoplay: true,
    arrows: false
  });
});
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, multilanguagePage: true}, 'google_translate_element');
}
