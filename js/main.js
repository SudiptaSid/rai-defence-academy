// Loader
$(window).on("load", function () {
  setTimeout(function () {
    $(".loaderWrapper").fadeOut("slow");
  }, 1000);
});

//scroll sections
$(".scroll").on("click", function (event) {
  event.preventDefault();
  $("html,body").animate(
    {
      scrollTop: $(this.hash).offset().top,
    },
    1200
  );
});

// Back To Top
$(window).on("scroll", function () {
  if ($(this).scrollTop() > 500) $(".backTop").fadeIn("slow");
  else $(".backTop").fadeOut("slow");
});

$(document).on("click", ".backTop", function () {
  $("html, body").animate({ scrollTop: 0 }, 800);
  return false;
});

// Header
$(window).on("scroll", function () {
  console.log($(this).scrollTop());
  if ($(this).scrollTop() >= 30) {
    // set to new image
    $(".navbarArea .navbar-brand img").attr("src", "images/logo.png");
  } else {
    //back to default
    $(".navbarArea .navbar-brand img").attr("src", "images/logoW.png");
  }
});
window.onload = function () {
  const getHeaderId = document.getElementById("navbar");
  if (getHeaderId) {
    window.addEventListener("scroll", (event) => {
      const height = 50;
      const { scrollTop } = event.target.scrollingElement;
      document
        .querySelector("#navbar")
        .classList.toggle("sticky", scrollTop >= height);
    });
  }
  const getId = document.getElementById("backtotop");
  if (getId) {
    const topbutton = document.getElementById("backtotop");
    topbutton.onclick = function (e) {
      window.scrollTo({ top: 0, behavior: "smooth" });
    };
    window.onscroll = function () {
      if (
        document.body.scrollTop > 200 ||
        document.documentElement.scrollTop > 200
      ) {
        topbutton.style.opacity = "1";
      } else {
        topbutton.style.opacity = "0";
      }
    };
  }
};

// Hero Home Slider
$(".heroHomeSlider").owlCarousel({
  items: 1,
  dots: true,
  loop: true,
  autoplayTimeout: 2500,
  smartSpeed: 500,
  autoplay: true,
});

// Testimonial Slider
$(".testimonialSlider").owlCarousel({
  items: 1,
  dots: true,
  loop: true,
  autoplayTimeout: 8000,
  autoplay: true,
});
