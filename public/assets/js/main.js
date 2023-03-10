// scroll func 

$(".nav-link").on("click", function(e) {
    e.preventDefault()

    var linkHref = $(this).attr("href");
    $("html, body").animate({
            scrollTop: $(linkHref).offset().top - 94,
        },
        1500
    );
    return false;
})


$(".btn-play").on("click", function(e) {
    e.preventDefault()

    var linkHref = $(this).attr("href");
    $("html, body").animate({
            scrollTop: $(linkHref).offset().top - 500,
        },
        1500
    );
    return false;
})


// end scroll func 

// scroll items 

window.onscroll = function() {
    scrollFunction()
    scrollTopIcon()
};

function scrollFunction() {
    if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
        document.getElementById("navbar").style.boxShadow = "0 .125rem .25rem rgba(0,0,0,0.08)";
    } else {
        document.getElementById("navbar").style.boxShadow = "none";
    }
}

function scrollTopIcon() {
    if (document.body.scrollTop > 180 || document.documentElement.scrollTop > 180) {
        document.getElementById("top-icon").style.bottom = "40px";
    } else {
        document.getElementById("top-icon").style.bottom = "-40px";
    }
}

// end scroll items 

// purecounter js 

new PureCounter({
  duration: 1.4,
});

// end purecounter js 

// loader 

document.addEventListener('DOMContentLoaded', () => {
  "use strict";

  const preloader = document.querySelector('#loader');
  if (preloader) {
    window.addEventListener('load', () => {
      preloader.remove();
    });
  }
  });

//end loader 

// izimodal 

$("#modal").iziModal();

// $(document).on('click', '.trigger', function (event) {
//   event.preventDefault();
//   // $('#modal').iziModal('setZindex', 99999);
//   // $('#modal').iziModal('open', { zindex: 99999 });
//   $('#modal').iziModal('open');
// });

// end izi modal 

// Data Aos 

// AOS.init({
//   duration: 1000,
//   easing: 'ease-in-out',
//   once: true,
//   mirror: false,
// });

function aos_init() {
  AOS.init({
    duration: 900,
    easing: 'ease-in-out',
    once: true,
    mirror: false
  });
}
window.addEventListener('load', () => {
  aos_init();
});


// End Data Aos 

// swiper js 

var swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    centeredSlidesBounds: true,
    centeredSlides: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints: {
        575: {
          slidesPerView: 1,
          spaceBetween: 120,
        },
        768: {
          slidesPerView: 1.8,
          spaceBetween: 40,
          initialSlide: 1,
          centeredSlidesBounds: false,
        },
        991: {
          slidesPerView: 3,
          spaceBetween: 30,
          initialSlide: 3,
    			allowSlidePrev: false,
		    	allowSlideNext: false 
        },
      }, 
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });

//   end swiper js

// popper js 

const button = document.querySelector('#button');
const tooltip = document.querySelector('#tooltip');

const popperInstance = Popper.createPopper(button, tooltip, {
  modifiers: [
    {
      name: 'offset',
      options: {
        offset: [0, 8],
      },
    },
  ],
});

function show() {
  // Make the tooltip visible
  tooltip.setAttribute('data-show', '');

  // Enable the event listeners
  popperInstance.setOptions((options) => ({
    ...options,
    modifiers: [
      ...options.modifiers,
      { name: 'eventListeners', enabled: true },
    ],
  }));

  // Update its position
  popperInstance.update();
}

function hide() {
  // Hide the tooltip
  tooltip.removeAttribute('data-show');

  // Disable the event listeners
  popperInstance.setOptions((options) => ({
    ...options,
    modifiers: [
      ...options.modifiers,
      { name: 'eventListeners', enabled: false },
    ],
  }));
}

const showEvents = ['mouseenter', 'focus'];
const hideEvents = ['mouseleave', 'blur'];

showEvents.forEach((event) => {
  button.addEventListener(event, show);
});

hideEvents.forEach((event) => {
  button.addEventListener(event, hide);
});

// end popper 