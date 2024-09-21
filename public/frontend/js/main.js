
$(document).ready(function(){

    // banner carousel
    $('.carousel-wrapper .owl-carousel').owlCarousel({
      items:4,
      loop:true,
      margin:10,
    //   autoplay:true,
      autoplayTimeout:1000,
      autoplayHoverPause:true
  });



    // stream carousel
      $(".stream-carousel-container .owl-carousel").owlCarousel({
        loop:true,
        autoplay:true,
        autoplayTimeout:2000,
        autoplayHoverPause:false,
        items:4,
        dots:false,
       responsive:{
        0:{
          items:1
        },
        575:{
          items:2
        },
        1200:{
          items:4
        }
       }
    });


    // iconic compositions carousel
    $('.sm-iconic-composition-wrapper .owl-carousel').owlCarousel({
      stagePadding: 50,
      loop:true,
      margin:0,
      responsive:{
          0:{
              items:1
          },
          600:{
              items:3
          },
          1000:{
              items:5
          }
      }
  })


    // achievement and honors carousel
    $('.achievement-and-honors-wrapper .owl-carousel').owlCarousel({
      stagePadding: 50,
      loop:true,
      margin:20,
    //   autoplay: true,
      autoplayTimeout:3000,
      nav:false,
      responsive:{
          0:{
              items:1,
              stagePadding: 30,
          },
          600:{
              items:2,
          },
          1000:{
              items:3,
          },
          1365:{
            items:4
          },
      }
  })


  })

  // gallary magnifying popup
  // $('.sm-gallary-grid-wrapper').magnificPopup({
  //   items: [
  //     {
  //       src: 'assets/images/sm-gallary-01.jpg',
  //     },
  //     {
  //       src: 'assets/images/sm-gallary-02.jpg',
  //     },
  //     {
  //       src: 'assets/images/sm-gallary-03.jpg',
  //     },
  //     {
  //       src: 'assets/images/sm-gallary-04.jpg',
  //     },
  //     {
  //       src: 'assets/images/sm-gallary-05.jpg',
  //     },
  //     {
  //       src: 'assets/images/sm-achievement-01.jpg',
  //     },
  //     {
  //       src: 'assets/images/sm--legacy-02.jpg',
  //     },

  //   ],
  //   gallery: {
  //     enabled: true
  //   },
  //   type: 'image' // this is a default type
  // });


  // // video magnigy popup
  // $('.video-wrapper').magnificPopup({
  //   items: [
  //     {
  //       src: 'assets/videos/sm-example.mp4',
  //       type: 'iframe',
  //     },
  //     {
  //       src: 'assets/videos/sm-example.mp4',
  //       type: 'iframe',
  //     },
  //     {
  //       src: 'assets/videos/sm-example.mp4',
  //       type: 'iframe',
  //     },

  //   ],
  //   gallery: {
  //     enabled: false
  //   },
  //   type: 'iframe', // this is a default type
  // });


  // // home video magnigy popup
  // $('.video-wrapper-home').magnificPopup({
  //   items: [
  //     {
  //       src: 'assets/videos/sm-example.mp4',
  //       type: 'iframe',
  //     },
  //   ],
  //   gallery: {
  //     enabled: false
  //   },
  //   type: 'iframe', // this is a default type
  // });


  // carousel with video wrapper
  // $('.carousel-with-video-wrapper').magnificPopup({
  //   items: [
  //     {
  //       src: 'assets/videos/sm-example.mp4',
  //       type: 'iframe',
  //     },
  //   ],
  //   gallery: {
  //     enabled: false
  //   },
  //   type: 'iframe', // this is a default type
  // });


  // carousel with video
  $('.carousel-with-video-wrapper .owl-carousel').owlCarousel({
    items:4,
      loop:true,
      margin:10,
    //   autoplay:true,
      autoplayTimeout:2000,
      autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
  })


  // // recent interviews videos magnify
  // $('.sm-biography-recent-interviews-wrapper').magnificPopup({
  //   items: [
  //     {
  //       src: 'assets/videos/sm-example.mp4',
  //       type: 'iframe',
  //     },
  //     {
  //       src: 'assets/videos/sm-example.mp4',
  //       type: 'iframe',
  //     },
  //     {
  //       src: 'assets/videos/sm-example.mp4',
  //       type: 'iframe',
  //     },
  //     {
  //       src: 'assets/videos/sm-example.mp4',
  //       type: 'iframe',
  //     },
  //     {
  //       src: 'assets/videos/sm-example.mp4',
  //       type: 'iframe',
  //     },
  //     {
  //       src: 'assets/videos/sm-example.mp4',
  //       type: 'iframe',
  //     },

  //   ],
  //   gallery: {
  //     enabled: true
  //   },
  //   type: 'iframe', // this is a default type
  // });




  // for opening nav menu
  function showMenu () {

    const menuContainer = document.querySelector('.--mobile--menu')
    menuContainer.style.display= 'flex'
    menuContainer.style.transform = 'translateY(0px)'
    menuContainer.style.top = '0px'
    menuContainer.style.transition = 'ease in out'
    menuContainer.transitionDuration = '0.5s'
  }

  function hideMenu() {
    const menuContainer = document.querySelector('.--mobile--menu')
    menuContainer.style.top= '-1200px'
    menuContainer.style.transition = 'ease in out'
    menuContainer.transitionDuration = '0.5s'
  }



  // Bishal starts
   // initializing nice select
    $(".shopping-address-input-wrapper select").niceSelect()

  // for opening the cart sidebar
  const sideBar = document.getElementById('order-summary-sidebar')
  const toggleCartButton = document.getElementById('view-cart')
  const toggleCartCloseButton = document.getElementById('bi-close-button')
  const body = document.body;
  if(sideBar){
    toggleCartCloseButton.addEventListener('click', () => {
      body.classList.remove('scroll-of')
      sideBar.classList.toggle('close')
     })
     toggleCartButton.addEventListener('click', () => {
      body.classList.toggle('scroll-of')
      sideBar.classList.toggle('close')
     })
  }

  // Recent post expands

  const viewFullPostButton = document.querySelectorAll('.view-full');
  if(viewFullPostButton){
    viewFullPostButton.forEach(button => {

      button.addEventListener('click', function(event) {
        const viewButton = event.target.parentElement.children[2].style.display = 'none';
        const postCoverImage = event.target.parentElement.children[3].classList.add('expanded');
        const postDescription = event.target.parentElement.children[5].classList.add('expanded');
        const postAddComment = event.target.parentElement.children[7].classList.add('expanded');
        const postComments = event.target.parentElement.children[8].classList.add('expanded');
      });
    });
  }


  // Cart page quantity increment and decrement


  // for mobile devices
  const incrementButtonMobile = document.querySelectorAll('.bi-mobile-cart-val-inc');
  const decrementButtonMobile = document.querySelectorAll('.bi-mobile-cart-val-dec');

  incrementButtonMobile.forEach(button => {
      button.addEventListener('click', function(event) {
          const input = event.target.closest('.bi-cart-product-quantity').querySelector('input[type="number"]');
          if (input) {
              input.disabled = false;
              let currentValue = parseInt(input.value) || 1;
              input.value = currentValue + 1;
              input.disabled = true;
          }
      });
  });

  decrementButtonMobile.forEach(button => {
      button.addEventListener('click', function(event) {
          const input = event.target.closest('.bi-cart-product-quantity').querySelector('input[type="number"]');
          if (input) {
              input.disabled = false;
              let currentValue = parseInt(input.value) || 1;
              input.value = Math.max(currentValue - 1, 1);
              input.disabled = true;
          }
      });
  });

  // for laptop and desktop

  const incrementButtons = document.querySelectorAll('.bi-cart-inc');
  const decrementButtons = document.querySelectorAll('.bi-cart-dec');

  incrementButtons.forEach(button => {
      button.addEventListener('click', function(event) {
          const input = event.target.closest('td').querySelector('input[type="number"]');
          if (input) {
              let currentValue = parseInt(input.value) || 1;
              input.value = currentValue + 1; // Increment the value
          }
      });
  });

  decrementButtons.forEach(button => {
      button.addEventListener('click', function(event) {
          const input = event.target.closest('td').querySelector('input[type="number"]');
          if (input) {
              let currentValue = parseInt(input.value) || 1;
              if (currentValue > 1) {
                  input.value = currentValue - 1; // Decrement the value
              }
          }
      });
  });
  // Bishal ends

  // Tarek js code()

   // owl-carousel for blog page
   $('.new--blog--area .owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    autoplay: true,
    nav:false,
    autoplay:true,
      autoplayTimeout:2000,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2.5
        },
        1000:{
            items:4.5
        }
    }
  })

  // Password strength meter
  const passwordInput = document.getElementById('password');
  const strengthMeter = document.getElementById('password-strength');
  const confirmPasswordInput = document.getElementById('confirmPassword');

  passwordInput?.addEventListener('input', () => {
      const strength = getPasswordStrength(passwordInput.value);
      updateStrengthMeter(strength);
  });

  function getPasswordStrength(password) {
      let strength = 0;
      if (password.length > 7) strength++;
      if (password.match(/[a-z]+/)) strength++;
      if (password.match(/[A-Z]+/)) strength++;
      if (password.match(/[0-9]+/)) strength++;
      if (password.match(/[$@#&!]+/)) strength++;
      if (password.length > 12) strength++; // Additional condition for very long passwords
      if (password.match(/[^a-zA-Z0-9]+/)) strength++; // Additional condition for more varied special characters
      return strength;
  }

  function updateStrengthMeter(strength) {
      const bars = strengthMeter.children;
      for (let i = 0; i < bars.length; i++) {
          bars[i].className = ''; // Reset class
          if (i < strength) {
              bars[i].classList.add(i < 2 ? 'weak' : i < 4 ? 'medium' : 'strong');
          }
      }
  }
  // Form validation
  function validateForm() {
      var password = passwordInput.value;
      var confirmPassword = confirmPasswordInput.value;

      if (password !== confirmPassword) {
          alert("Passwords do not match. Please try again.");
          return false;
      }
      return true;
  }




  // shop to products details redirect
  document.addEventListener('DOMContentLoaded', function() {
    const featuredGridContainers = document.querySelectorAll('.featured-grid-container');
    featuredGridContainers.forEach(container => {
        container.addEventListener('click', function() {
            // window.location.href = 'product-details.html';  // Change this URL to your actual product details page
        });
    });
  });


  let purchaseForm = document.querySelector('#purchase-form');
      // let purchaseBtn = document.querySelector('#purchase-btn');
      // purchaseBtn?.addEventListener('click',function(){
      //   purchaseForm.submit()
      // })


      document.addEventListener("DOMContentLoaded", function() {
        // Select the input field and the SVG icons
        const inputField = document.getElementById("quantity");
        const incButton = document.querySelector(".product-details-inc");
        const decButton = document.querySelector(".product-details-dec");

        // Add click event listeners for increment and decrement
        incButton?.addEventListener("click", function() {
            inputField.stepUp(); // Increment the input value by its step attribute
        });

        decButton?.addEventListener("click", function() {
            if (inputField.value > inputField.min) {
                inputField.stepDown(); // Decrement the input value by its step attribute
            }
        });
    });


  // product details page aside buttons
  document.getElementById("purchase-btn")?.addEventListener("click", function() {
    document.querySelector(".ti-product-details-page-aside")?.classList.toggle("close")
  })

  document.getElementById("ti-sidebar-close")?.addEventListener("click", function() {
    document.querySelector(".ti-product-details-page-aside")?.classList.toggle("close")
  })

  const ti_product_page_inc_btn = document.querySelectorAll('.ti-product-increase-btn');
  const ti_product_page_dec_btn = document.querySelectorAll('.ti-product-decrease-btn');

  ti_product_page_inc_btn.forEach(button => {
      button.addEventListener('click', function(event) {
          const input = event.target.closest('td').querySelector('input[type="number"]');
          if (input) {
              let currentValue = parseInt(input.value) || 1;
              input.value = currentValue + 1; // Increment the value
          }
      });
  });

  ti_product_page_dec_btn.forEach(button => {
      button.addEventListener('click', function(event) {
          const input = event.target.closest('td').querySelector('input[type="number"]');
          if (input) {
              let currentValue = parseInt(input.value) || 1;
              if (currentValue > 1) {
                  input.value = currentValue - 1; // Decrement the value
              }
          }
      });
  });




  // ------------------counter section starts-------------------//

  $(".count-wrapper").each(function () {
    var $this = $(this);
    $this.on("inview", function (event, visible) {
      if (visible) {
        const smCounters = document.querySelectorAll('.sm-counter')
        const speed = 500;


        smCounters?.forEach( counter => {
          const animate = () => {
             const value = +counter.getAttribute('limit');
             const data = +counter.innerText;

             const time = value / speed;
            if(data < value) {
                 counter.innerText = Math.ceil(data + time);
                 setTimeout(animate, 1);
               }else{
                 counter.innerText = value;
               }

          }

          animate();
        });

      }
    });
  });





  // -----------------------counter section ends-----------------//



//   // ----------------------music section starts--------------------------//

//   const playPause = document.querySelector("#playpause");
//   const playPauseBtn = document.querySelector("#playpause-btn");
//   const audio = document.querySelector("#audio");
//   const title = document.querySelector("#title");
//   const prevBtn = document.querySelector("#prevbtn");
//   const nextBtn = document.querySelector("#nextbtn");
//   const progress = document.querySelector("#progress");
//   const progressBar = document.querySelector(".progress-bar");
//   const currTime = document.querySelector(".current-time");
//   const totalDuration = document.querySelector(".duration-time");
//   const layer = document.querySelector(".layer");
//   const volBar = document.querySelector(".bar");
//   const progressLine = document.querySelector(".progress-line");
//   const wavebox = document.querySelectorAll('.box')
//   // songs array

//   const songs = [
//     {
//       path: 'https://raw.githubusercontent.com/ustabasiibrahim/music-player/master/assets/music/1.mp3',
//       displayName: 'Yıldız Tozu',
//       artist: 'Ozbi',
//       cover: "https://images.genius.com/ee202c6f724ffd4cf61bd01a205eeb47.1000x1000x1.jpg",
//     },
//     {
//       path: 'https://raw.githubusercontent.com/ustabasiibrahim/music-player/master/assets/music/2.mp3',
//       displayName: 'You\'re Somebody Else',
//       artist: 'flora cash',
//       cover: "https://pbs.twimg.com/media/D2NZH-2U4AAL9Xs.jpg",
//     },
//     {
//       path: 'https://raw.githubusercontent.com/ustabasiibrahim/music-player/master/assets/music/3.mp3',
//       displayName: 'Powerless',
//       artist: 'Linkin Park',
//       cover: "https://images.genius.com/c5a58cdaab9f3199214f0e3c26abbd0e.1000x1000x1.jpg",
//     },
//     {
//       path: 'https://raw.githubusercontent.com/ustabasiibrahim/music-player/master/assets/music/4.mp3',
//       displayName: 'Seni Dert Etmeler',
//       artist: 'Madrigal',
//       cover: "https://www.radyomega.fm/wp-content/uploads/2020/04/MADRIGAL-600.jpg",
//     },
//     {
//       path: 'https://raw.githubusercontent.com/ustabasiibrahim/music-player/master/assets/music/5.mp3',
//       displayName: 'Ederlezi',
//       artist: 'Solomun',
//       cover: "https://m.media-amazon.com/images/I/616t0841uvL._SS500_.jpg",
//     },
//     {
//       path: 'https://raw.githubusercontent.com/saranshbhardwaj1999/audio/main/Justin_Bieber_Anyone.mp3',
//       displayName: 'Anyone',
//       artist: 'Justin Bieber',
//       cover: "http://universalmusic.at/website2016/wp-content/uploads/2021/01/jb_anyone-single-cover_hr-1024x1024.jpg",
//     },
//     {
//       path: 'https://raw.githubusercontent.com/saranshbhardwaj1999/audio/main/Justin_Bieber_Hold_On.mp3',
//       displayName: 'Hold On',
//       artist: 'Justin Bieber',
//       cover: "https://www.36vibes.com.ng/wp-content/uploads/2021/03/Justin-bieber-hold-on.jpg",
//     },
//     {
//       path: 'https://raw.githubusercontent.com/saranshbhardwaj1999/audio/main/Jon_Bellion_All_Time_Low.mp3',
//       displayName: 'All Time Low',
//       artist: 'Jon Bellion',
//       cover: "https://www.teahub.io/photos/full/251-2512846_all-time-low-jon-bellion-album-art.jpg",
//     },
//   ];

//   // deafult song index

//   let songIndex = 2;

//   // song default state

//   let isPlaying = false;

//   // song pause function


//   function changeAnimation() {
//     const box = document.querySelectorAll('.box');
//     box.forEach(item => item.style.animationIterationCount = 'infinite')
//   }
//   function stopAnimation() {
//     const box = document.querySelectorAll('.box');
//     box.forEach(item => item.style.animationIterationCount = 'unset')
//   }


//   function playSong(){
//     isPlaying = true;
//     playPauseBtn.classList.replace("fa-play","fa-pause");
//     changeAnimation()
//     audio.play();
//   }

//   // song play function



//   function pauseSong(){
//     isPlaying = false;
//     playPauseBtn.classList.replace("fa-pause","fa-play");
//     stopAnimation()
//     audio.pause();
//   }

//   // loading songs

//   function loadSong(song){
//       img.src = song.cover;
//       title.textContent = song.displayName;
//       audio.src = song.path;
//   };

//   // previous song

//   function prevSong(){
//     songIndex--;
//     if(songIndex < 0){
//       songIndex = songs.length - 1;
//     }
//     loadSong(songs[songIndex]);
//     playSong();
//   }

//   // next song

//   function nextSong(){
//     songIndex++;
//     if(songIndex > songs.length-1){
//       songIndex = 0;
//     }
//     loadSong(songs[songIndex]);
//     playSong();
//   }

//   // progress bar function

//   function updateProgress(e){
//     if (isPlaying) {
//       const { duration, currentTime } = e.target;
//       // Update progress bar width
//       const progressPercent = (currentTime / duration) * 100;
//       progress.value = progressPercent;
//       progressLine.style.width = `${progressPercent}%`;
//       if(progressPercent==100){
//         return nextSong();
//       }
//       // Calculate display for duration
//       const durationMinutes = Math.floor(duration / 60);
//       let durationSeconds = Math.floor(duration % 60);
//       if (durationSeconds < 10) {
//         durationSeconds = `0${durationSeconds}`;
//       }
//       // Delay switching duration Element to avoid NaN
//       if (durationSeconds) {
//         totalDuration.textContent = `${durationMinutes}:${durationSeconds}`;
//       }
//       // Calculate display for currentTime
//       let currentMinutes = Math.floor(currentTime / 60);
//       let currentSeconds = Math.floor(currentTime % 60);
//       if (currentSeconds < 10) {
//         currentSeconds = `0${currentSeconds}`;
//       }
//       currTime.textContent = `${currentMinutes}:${currentSeconds}`;
//     }
//   }


//   playPause?.addEventListener("click", () => (isPlaying ? pauseSong() : playSong()));
//   prevBtn?.addEventListener("click",prevSong);
//   nextBtn?.addEventListener("click",nextSong);
//   audio?.addEventListener("timeupdate", updateProgress);


  // ----------------------music section ends-----------------------------//



  // countdown

  document.addEventListener('DOMContentLoaded', function() {
    function startTimer(duration) {
        var time = duration;
        var i = 0;

        // Initial update
        var k = ((i / duration) * 100);
        var l = 100 - k;
        var c1 = document.getElementById("c1");
        var c2 = document.getElementById("c2");
        var counterText = document.getElementById("counterText");

        if (!c1 || !c2 || !counterText) {
            return;
        }

        c1.style.strokeDasharray = [l, k];
        c2.style.strokeDasharray = [k, l];
        c1.style.strokeDashoffset = l;
        counterText.innerHTML = time - i;

        var interval = setInterval(function() {
            i++;
            if (i > time) {
                clearInterval(interval);
                return;
            }
            k = ((i / duration) * 100);
            l = 100 - k;
            c1.style.strokeDasharray = [l, k];
            c2.style.strokeDasharray = [k, l];
            c1.style.strokeDashoffset = l;
            counterText.innerHTML = time - i;
        }, 1000);
    }

    // Start the timer with a duration of 25 seconds
    startTimer(25);
  });





  // --------------------------------------fixed js starts----------------------------------------//


  // gallary popup
  document.addEventListener("click", function (event) {
    if (event.target.closest("#sm-gallary-container")) {
      event.preventDefault();
      $(".sm-main-gallary")
        .magnificPopup({
          delegate: "a",
          type: "image",
          tLoading: "Loading image #%curr%...",
          mainClass: "mfp-img-mobile",
          gallery: {
            enabled: true,
          },
        })
        .magnificPopup("open");
    }
  });

  // discography gallary popup
  document.addEventListener("click", function (event) {
    if (event.target.closest("#sm-discography-gallary-container")) {
      event.preventDefault();
      $(".sm-main-gallary2")
        .magnificPopup({
          delegate: "a",
          type: "image",
          tLoading: "Loading image #%curr%...",
          mainClass: "mfp-img-mobile",
          gallery: {
            enabled: true,
          },
        })
        .magnificPopup("open");
    }
  });

  // home video mangnify popup
  document.addEventListener("click", function (event) {
    if (event.target.closest("#home-video-wrapper")) {
      event.preventDefault();
      $(".home-video-list")
        .magnificPopup({
          delegate: "a",
          type: "iframe",
          tLoading: "Loading video #%curr%...",
          mainClass: "mfp-img-mobile",
          gallery: {
            enabled: true,
          },
        })
        .magnificPopup("open");
    }
  });



  // media video magnify popup
  document.addEventListener("click", function (event) {
    if (event.target.closest("#media-video-wrapper")) {
      event.preventDefault();
      $(".media-video-list")
        .magnificPopup({
          delegate: "a",
          type: "iframe",
          tLoading: "Loading video #%curr%...",
          mainClass: "mfp-img-mobile",
          gallery: {
            enabled: true,
          },
        })
        .magnificPopup("open");
    }
  });


  // recent interviews video magnify popup
  document.addEventListener("click", function (event) {
    if (event.target.closest("#recent-interviews-main-wrapper")) {
      event.preventDefault();
      $(".recent-interview-video-list")
        .magnificPopup({
          delegate: "a",
          type: "iframe",
          tLoading: "Loading video #%curr%...",
          mainClass: "mfp-img-mobile",
          gallery: {
            enabled: true,
          },
        })
        .magnificPopup("open");
    }
  });




  // --------------------------------------fixed js starts ends----------------------------------------//

// Tarek vai fix

 // initializing nice select
 $(".contact-us-select select").niceSelect()
