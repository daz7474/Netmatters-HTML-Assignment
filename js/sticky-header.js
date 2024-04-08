const startSticky = 250;

let prevScroll = 0;
let stickyHeaderActive = true;

let scrollUpTimeout;

// Adds checkScrolling to scroll event
$(".main-content").on('scroll', checkScrolling);

// Should the header be sticky when scrolling
function checkScrolling() {
  let scroll = $(".main-content").scrollTop();

  //Checks if scroll direction was up or down
  if (scroll > prevScroll) {
    //Show header
    if (scroll > startSticky) {
      if (stickyHeaderActive) {
        stickyHeaderActive = false;
        slideHeader(false, 0.5);

        scrollUpTimeout = setTimeout(() => {
          $(".sticky-header").removeClass("sticky");
        }, 500);
      }
    }
    else {
      $(".sticky-header").removeClass("sticky");
    }
  }
  else {
    //Hide header
    if (scroll > startSticky) {
      if (!stickyHeaderActive) {
        stickyHeaderActive = true;
        clearTimeout(scrollUpTimeout);

        $(".sticky-header").addClass("sticky");
        slideHeader(true, 0.5);
      }
    }
    else {
      $(".sticky-header").removeClass("sticky");
    }
  }

  prevScroll = scroll;
}

// Slides up or down
function slideHeader(down, time) {
  from = "0";
  to = "-100%";
  if (down) {
    from = $(".sticky-header").css("top");
    to = "0";
  }

  $(".sticky-header").css("transition", "all 0s");
  $(".sticky-header").css("top", from);

  setTimeout(() => {
    $(".sticky-header").css("transition", `all ${time}s`);
    $(".sticky-header").css("top", to);
  }, 200);
}