(function ($) {
  setTimeout(function () {
    $(".realization-gallery").isotope({
      itemSelector: ".wr",
      layoutMode: "masonry"
    });
  }, 1000);
})(jQuery);
