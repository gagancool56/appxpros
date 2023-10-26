(function ($) {
  "use strict";

  // Page Ready
  setActiveMenu();
  // Header Scrolling Set White Background
  scrollNavBar();

  // Welcome Area background image
  if ($(".welcome-area").length) {
    // $('.welcome-area .welcome-bg').css("background-image", "url(" + $('.welcome-area .welcome-bg').data('bg') + ")");
  }

  // Menu Dropdown Toggle
  if ($(".menu-trigger").length) {
    $(".menu-trigger").on("click", function () {
      $(this).toggleClass("active");
      $(".header-area .nav").slideToggle(200);
    });
  }

  // Scroll animation init
  window.sr = new scrollReveal();

  // Home number counterup
  if ($(".count-item").length) {
    $(".count-item strong").counterUp({
      delay: 20,
      time: 15000,
    });
  }

  // App single gallery
  // if ($(".gallery").length && $(".gallery-item").length) {
  //   $(".gallery-item").magnificPopup({
  //     type: "image",
  //     gallery: {
  //       enabled: true,
  //     },
  //     zoom: {
  //       enabled: true,
  //       duration: 300,
  //       easing: "ease-in-out",
  //     },
  //   });
  // }

  // Page standard gallery
  // if ($(".page-gallery").length && $(".page-gallery-wrapper").length) {
  //   $(".page-gallery").imgfix({
  //     scale: 1.1,
  //   });

  //   $(".page-gallery").magnificPopup({
  //     type: "image",
  //     gallery: {
  //       enabled: true,
  //     },
  //     zoom: {
  //       enabled: true,
  //       duration: 300,
  //       easing: "ease-in-out",
  //     },
  //   });
  // }

  $(".page-gallery").click(function (e) {
    e.preventDefault();
  });

  // Blog cover image
  if ($(".blog-post-thumb").length) {
    $(".blog-post-thumb .img").imgfix();
  }

  // Page loading animation
  $(window).on("load", function () {
    if ($(".cover").length) {
      $(".cover").parallax({
        imageSrc: $(".cover").data("image"),
        zIndex: "1",
      });
    }

    $(".loader-wrapper").animate(
      {
        opacity: "0",
      },
      600,
      function () {
        setTimeout(function () {
          // Parallax init
          if ($(".parallax").length) {
            $(".parallax").parallax({
              imageSrc: "",
              zIndex: "1",
            });
          }
          $(".loader-wrapper").css("visibility", "hidden").fadeOut();
        }, 300);
      }
    );
  });

  // Header Scrolling Set White Background
  $(window).on("scroll", function () {
    scrollNavBar();
  });

  // Navbar Scroll Set White Background Function
  function scrollNavBar() {
    var width = $(window).width();
    if (width > 991) {
      var scroll = $(window).scrollTop();
      if (scroll >= 30) {
        // $(".header-area").addClass("header-sticky");
        $(".header-area .dark-logo").css("display", "block");
        $(".header-area .light-logo").css("display", "none");
      } else {
        $(".header-area").removeClass("header-sticky");
        $(".header-area .dark-logo").css("display", "none");
        $(".header-area .light-logo").css("display", "block");
      }
    }
  }

  $(".nav li.mactive").click(function () {
    makeInactiveAllMenuLinks();
    setActiveMenu();
  });

  function setActiveMenu() {
    var urlStr = window.location.href;
    var urlArr = urlStr.split("/");
    $(".nav li")
      .find('a[href="' + urlArr[urlArr.length - 1] + '"]')
      .addClass("menu-active");
  }

  function makeInactiveAllMenuLinks() {
    $("ul.nav li").each(function (i, li) {
      console.log($(li).find("a"));
      $(li).find("a").removeClass("menu-active");
    });
  }
})(window.jQuery);

$(".home-services-item").on("mouseenter", function () {
  readMore();
});

function readMore(that) {
  var pbody = $(that).parents(".body");
  var dots = pbody.find(".dots");
  var moreText = pbody.find(".more");
  var btnText = pbody.find(".showMore");

  if (dots.css("display") == "none") {
    dots.css({ display: "inline" });
    btnText.html("Read more...");
    moreText.css({ display: "none" });
  } else {
    dots.css({ display: "none" });
    btnText.html("Read less...");
    moreText.css({ display: "inline" });
  }
}

$(".home-services-item").on("mouseenter", function () {
  $(this).find("img.dark-service-icon").hide();
  $(this)
    .find("img.white-service-icon")
    .css({ position: "inherit", display: "block", "z-index": 999 });
});

$(".home-services-item").on("mouseleave", function () {
  $(this).find("img.dark-service-icon").css({ display: "block" });
  $(this).find("img.white-service-icon").css({ display: "none" });
});
