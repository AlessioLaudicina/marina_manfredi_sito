  // menu toggle
  document.querySelector('.checkbox2').addEventListener('change', function() {
    document.body.classList.toggle('menu-open'); // Aggiunge/rimuove la classe 'menu-open' al body
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

// Hero Section img reveal

gsap.timeline()
    .fromTo('.p-fv__img', 1, { height: '0%' }, { height: '100%', ease: Power4.easeInOut })
    .fromTo('.p-fv__mainContens', 1.2, { width: '100%' }, { width: '90%', ease: Power4.easeInOut })
    .fromTo('.p-fv__back-left', 1.2, { y: '100%' }, { y: '0%', ease: Power2.easeInOut }, '-=1.2')
    .fromTo('.p-fv__back-right', 1.2, { y: '-100%' }, { y: '0%', ease: Power2.easeInOut }, '-=1.2')
    .fromTo('.p-fv__title', 0.5, { autoAlpha: 0, x: 0 }, { autoAlpha: 1, x: 30 }, '-=0.5')
    .fromTo('.p-fv__subtext', 0.5, { autoAlpha: 0, y: '30'}, { autoAlpha: 1, y: 0})
    .fromTo('.p-header', 0.5, { autoAlpha: 0, y: '-60' }, { autoAlpha: 1, y: 0 } , "<");

// Hero Section img reveal
gsap.registerPlugin(ScrollTrigger);

let revealContainers = document.querySelectorAll(".reveal");

revealContainers.forEach((container) => {
  let image = container.querySelector("contain-img");
  let tl = gsap.timeline({
    scrollTrigger: {
      trigger: container,
      toggleActions: "restart none none reset"
    }
  });

  tl.set(container, { autoAlpha: 1 });
  tl.from(container, 1.5, {
    xPercent: -100,
    ease: Power2.out
  });
  tl.from(image, 1.5, {
    xPercent: 100,
    scale: 1.3,
    delay: -1.5,
    ease: Power2.out
  });
});

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

  

// About Horizontal Scroll
// Importa i plugin necessari di GSAP
gsap.registerPlugin(ScrollTrigger);

// Controlla se la finestra è abbastanza larga per essere considerata "desktop"
if (window.innerWidth > 992) {
  
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

  gsap.to('.next-block', {
    scrollTrigger: {
      trigger: '.next-block',
      pinnedContainer: ".main-about",
      start: 'top 50%',
      toggleActions: 'play none reset none',
    }
  });
}


// Animazione Logo About Page


document.addEventListener("DOMContentLoaded", function() {
  setTimeout(function() {
    var availableElement = document.querySelector('.available');
    if (availableElement) { // Controlla se l'elemento esiste
      availableElement.classList.add('active');
    }
  }, 1000); // Ritardo di 1 secondo
});

//Technical Skills
var technicalquotes = [
  "Ingegnere dei Materiali",
  "10 anni in Aziende multinazionali",
  "10 anni nel settore Automotive",
  "Responsabile esecuzione Progetti (riduzione costi: 2-3Mio€/anno)",
  "Responsabile della Strategia Acquisti e Fornitori in Europa"
];
var technicalcounter = 0;
var technicalblockquote = document.getElementById("technical-skill");

if (technicalblockquote) {
  // Set initial quote
  technicalblockquote.innerText = technicalquotes[0];

  // Quote carousel
  function technicalquote() {
      var technicalquote_player = setInterval(function() {
          technicalblockquote.style.opacity = 0; // Fade out

          setTimeout(function() {
              technicalblockquote.innerText = technicalquotes[technicalcounter]; // Change the text
              technicalcounter++;

              if (technicalcounter === technicalquotes.length) {
                  technicalcounter = 0;
              }

              technicalblockquote.style.opacity = 1; // Fade in
          }, 500); // Timeout for fade out
      }, 2000);
  }

  // Execute carousel
  technicalquote();
}

//Soft Skills
var quotes = [
  "Reliability",
  "Open to challenges",
  "Curious & Learner",
  "Leading teams at global level",
  "Passionate"
];
var counter = 0;
var blockquote = document.getElementById("skill");

if (blockquote) {
  // Set initial quote
  blockquote.innerText = quotes[0];

  // Quote carousel
  function quote() {
      var quote_player = setInterval(function() {
          blockquote.style.opacity = 0; // Fade out

          setTimeout(function() {
              blockquote.innerText = quotes[counter]; // Change the text
              counter++;

              if (counter === quotes.length) {
                  counter = 0;
              }

              blockquote.style.opacity = 1; // Fade in
          }, 500); // Timeout for fade out
      }, 2000);
  }

  // Execute carousel
  quote();
}



// Services Page
