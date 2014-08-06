$(function () {
  if ($(window).width() > 767) {
    skrollr.init({forceHeight: false,smoothScrolling: true, smoothScrollingDuration: 1500});
  }
});