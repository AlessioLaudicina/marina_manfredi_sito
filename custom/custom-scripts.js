  // menu toggle
  let hamburger = document.querySelector('.header__hamburger');
  hamburger.addEventListener("click", function() {
    document.body.classList.toggle('menu-open');
  });


    // Add class on Scroll 

window.addEventListener('scroll', function(e) {
  if(window.scrollY > 100){
    document.body.classList.add('scroll-down');
  } else {
    document.body.classList.remove('scroll-down');
  }
});


// slider
if(document.querySelectorAll('.splide').length > 0 ){
  var splide = new Splide( '.splide', {
    perPage: 3,
    rewind : true,
    pagination: false,
    breakpoints: {
      800: {
        perPage: 1,
      },
    }
  } );
  
  splide.mount();

}



  // Scroll To

  const links = document.querySelectorAll(".scroll-trigger");
  
  links.forEach((link) => {
    link.addEventListener("click", clickHandler);
  })
  
  function clickHandler(e) {
    e.preventDefault();
    const href = this.getAttribute("href");
    const offsetTop = document.querySelector(href).offsetTop - 80; // offset from top
  
    scroll({
      top: offsetTop,
      behavior: "smooth"
    });
  }


  // Scroll Animation

  ScrollTrigger.batch(".fade-up",{
    start: "top 80%",
    onEnter: (elements, triggers) => {
      gsap.to(elements, { opacity: 1, stagger: 0.3, y:0, duration: 1.5,  ease: Power2.easeOut });
    }
    // onLeave: (elements, triggers) => {
    //   gsap.to(elements, {opacity: 0, stagger: 0.15, y: 18 });
    //   console.log(elements.length, "elements left");
    // }

  });

  let tl = gsap.timeline();

  tl.to(".fade-in", { opacity: 1, y:0, duration: 1, stagger: 0.3, ease: Power2.easeOut }, "1")
  .from(".cover__bg", { scale: 0.6, duration: 4, opacity: 0, ease: Power2.easeOut} , "0");


  gsap.to(".text-reveal", { clipPath: "polygon(0 0, 100% 0, 98% 100%, 0 100%)", y:0, duration: 1, stagger: 0.7, ease: Power2.easeOut });

  gsap.to(".slide-right", {
    x: -200,
    scrollTrigger: {
      trigger: ".slide-right",
      start: "top 80%",
      end: "bottom top",
      //markers: true,
      scrub: true
    }
  });
  
  
  gsap.to(".slide-left", {
    x: 200,
    scrollTrigger: {
      trigger: ".slide-left",
      start: "top 80%",
      end: "bottom top",
      //markers: true,
      scrub: true
    }
  });


// About Horizontal Scroll
gsap.registerPlugin(ScrollTrigger);
let sections = gsap.utils.toArray(".slide");
    
gsap.to(sections, {
  xPercent: -100 * (sections.length - 1),
  ease: "none",
  scrollTrigger: {
    trigger: ".horizontal-sliders",
    pin: ".main-about",
    pinSpacing: true,
    scrub: 1,
    end: "+=3000",
  }
});

gsap.to('.next-block',{

  scrollTrigger:{
    trigger:'.next-block',
    pinnedContainer: ".main-about",
    start:'top 50%',
    toggleActions: 'play none reset none',
  }
})

// Animazione Logo About Page


document.addEventListener("DOMContentLoaded", function() {
  setTimeout(function() {
    document.querySelector('.available').classList.add('active');
  }, 1000); // Ritardo di 1 secondo
});

// Services Page
