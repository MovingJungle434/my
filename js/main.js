const loader = document.querySelector("#loader")
window.addEventListener('load', () => {
  loader.style.display = "none"
});


  gsap.registerPlugin('ScrollTrigger');
  gsap.from('.header_cat_div', {
    opacity: 0,
    duration: 1,
    x: 200,
  })
  gsap.from('.header_logo_left', {
    opacity: 0,
    duration: 1,
    y: -100,
    delay: 0.4
  })
  gsap.from('.header_top_about_me', {
    opacity: 0,
    duration: 1,
    y: 100,
    delay: 0.5
  })
  gsap.from('.header_top_right_img', {
    scrollTrigger: {
      trigger: '.header_top',
      start: 'top 80%',
      end: 'bottom 20%',
      scrub: true,
    },
    opacity: 0,
    duration: 1,
    x: 200,
    delay: 0.7
  });

  gsap.from('.left img', {
    scrollTrigger: {
      trigger: '.header_top',
      start: 'top 80%',
      end: 'bottom 20%',
      scrub: true,
    },
    opacity: 0,
    duration: 1,
    x: -200,
    delay: 0.9,
  });

  gsap.from('.right_p', {
    scrollTrigger: {
      trigger: '.header_top',
      start: 'top 80%',
      end: 'bottom 20%',
      scrub: true,
    },
    opacity: 0,
    duration: 1,
    x: 50,
    delay: 1.1,
  });
  gsap.from('.left_p', {
    opacity: 0,
    duration: 1,
    x: -200,
    delay: 1
  })
  gsap.from('.header_top_right_img2', {
    scrollTrigger: {
      trigger: '.header_top',
      start: 'top 80%',
      end: 'bottom 20%',
      scrub: true,
    },
    opacity: 0,
    duration: 1,
    y: 200,
    delay: 1.3,
  });

  gsap.from('.img_icon', {
    opacity: 0,
    duration: 0.6,
    x: -40,
  })

  gsap.from('.header_a_1', {
    opacity: 0,
    duration: 0.6,
    y: 20,
    delay: 0.2
  })
  gsap.from('.header_a_2', {
    opacity: 0,
    duration: 0.6,
    y: 20,
    delay: 0.4
  })
  gsap.from('.header_a_3', {
    opacity: 0,
    duration: 0.6,
    y: 20,
    delay: 0.6
  })
  gsap.from('#current_date_time_block', {
    opacity: 0,
    duration: 0.6,
    x: 40,
    delay: 0.8
  })
  gsap.from('.about__me_img_first', {
    opacity: 0,
    duration: 0.6,
    x: -200,
    y: 200
  })

  gsap.from('.about__me_name', {
    opacity: 0,
    duration: 0.6,
    y: -40,
    delay: 0.2
  })
  gsap.from('.about__me_name2', {
    opacity: 0,
    duration: 0.6,
    x: 40,
    delay: 0.3
  })
  gsap.from('.about__me_age', {
    opacity: 0,
    duration: 0.6,
    x: -40,
    delay: 0.4
  })
  gsap.from('#age', {
    opacity: 0,
    duration: 0.6,
    x: -40,
    delay: 0.5
  })
  gsap.from('.about__me_me', {
    opacity: 0,
    duration: 0.6,
    x: 40,
    delay: 0.6
  })
  gsap.from('.about__me_me2', {
    opacity: 0,
    duration: 0.6,
    y: 40,
    delay: 0.7
  })
  gsap.from('.about_me_me_img', {
    opacity: 0,
    duration: 0.6,
    x: 200,
    delay: 0.8
  })


  gsap.from('.spider', {
    opacity: 0,
    duraction: 1,
    y: -40,
    delay: 0.4
  })
  gsap.from('.cat_thinking', {
    opacity: 0,
    duraction: 1,
    x: 40,
    delay: 0.6
  })
  gsap.from('.cat2', {
    opacity: 0,
    duraction: 1,
    x: -40,
    delay: 0.8
  })
  gsap.from('.cat3', {
    opacity: 0,
    duraction: 1,
    x: -40,
    delay: 0.8
  })
  gsap.from('.foto', {
    opacity: 0,
    duraction: 1,
    y: -200,
    delay: 0.4
  })
  gsap.from('.fancy', {
    opacity: 0,
    duraction: 1,
    y: 200,
    delay: 0.6
  })

  VANTA.FOG({
    el: "#intro",
    mouseControls: true,
    touchControls: true,
    gyroControls: true,
    highlightColor: 0xde2c2c,
    midtoneColor: 0x9e20c5,
    lowlightColor: 0x2c00ff,
    blurFactor: 0.36
  })
  VANTA.FOG({
    el: "#intro2",
    mouseControls: true,
    touchControls: true,
    gyroControls: false,
    highlightColor: 0x73c03,
    midtoneColor: 0x3308ff,
    lowlightColor: 0x1f08a4,
    baseColor: 0x26f079,
    blurFactor: 0.43,
    speed: 0.70,
    zoom: 1.40
  })
  VANTA.CELLS({
    el: "#intro3",
    mouseControls: true,
    touchControls: true,
    gyroControls: false,
    minHeight: 200.00,
    minWidth: 200.00,
    scale: 1.00,
    color1: 0x6304ed,
    color2: 0xa396b,
    size: 1.40,
    speed: 1.70
  })

  
    
  function zero_first_format(value) {
    if (value < 10) {
      value = '0' + value
    }
    return value;
  }
  function date_time() {
    var current_datetime = new Date();
    var hours = zero_first_format(current_datetime.getHours())
    var minutes = zero_first_format(current_datetime.getMinutes())
    var seconds = zero_first_format(current_datetime.getSeconds())

    return hours + ":" + minutes + ":" + seconds
  }
  setInterval(function () {
    document.getElementById('current_date_time_block').innerHTML = date_time()
  }, 1000);
  document.getElementById('current_date_time_block').innerHTML = date_time()





  let slideIndex = 1;
  showSlides(slideIndex);

  function plusSlides(n) {
    showSlides(slideIndex += n);
  }
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }

  function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
  }


