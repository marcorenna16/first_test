
/**************
** FLEXISEL **
*************/

$(window).load(function() {
  $(".clients-logo-wrapper").flexisel({
    visibleItems: 5,
    itemsToScroll: 1,
    animationSpeed: 1200,
    infinite: true,
    navigationTargetSelector: null,
    autoPlay: {
      enable: true,
      interval: 2000,
      pauseOnHover: false
    },
    responsiveBreakpoints: {
      portrait: {
        changePoint:480,
        visibleItems: 1,
        itemsToScroll: 1
      },
        landscape: {
        changePoint:640,
        visibleItems: 2,
        itemsToScroll: 2
      },
        tablet: {
        changePoint:768,
        visibleItems: 3,
        itemsToScroll: 3
      }
    }
  });
});
