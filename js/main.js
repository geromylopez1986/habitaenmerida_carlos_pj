$(document).ready(function () {
  $(".btn-contact a").on("click", function (e) {
    if (this.hash != "") {
      e.preventDefault();

      const hash = this.hash;
      const interval = 800;

      $("html, body").animate(
        {
          scrollTop: $(hash).offset().top,
        },
        interval
      );
    }
  });

  $(".header-contact span div, a").on("click", function (e) {
    if (this.hash != "") {
      e.preventDefault();

      const hash = this.hash;
      const interval = 800;

      $("html, body").animate(
        {
          scrollTop: $(hash).offset().top,
        },
        interval
      );
    }
  });
});
