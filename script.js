let manu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .nav');
manu.onclick = () =>{
    manu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
};
manu.onscroll = () =>{
    manu.classList.remove('fa-times');
    navbar.classList.remove('active');
};
var swiper = new Swiper(".home-slider", {
    loop:true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
    var swiper = new Swiper(".reveiw-slider", {
    loop:true,
 spaceBetween: 20,
 autoHeight:true,
grabCursor:true,
navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },

          breakpoints: {
        640: {
          slidesPerView: 1,

        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },

    }});
 
    
    var swiper = new Swiper(".reveiw-slider", {
   
    });
    
    let lodemore = document.querySelector(".package .load_more .discover");
    let currentItem = 3;
    let image = document.querySelectorAll(".package .box_countiner .box .image")
    lodemore.onclick =() =>{
      let boxes = document.querySelectorAll('.package .box_countiner .box');
      
      for(var i=currentItem; i < currentItem + 3; i++){
        if (boxes[i]) { 
            boxes[i].style.display = 'block'; 

        }
      }
      
      currentItem += 3;
      
      if(currentItem >= boxes.length){
     
         lodemore.style.display = 'none';
      }
    }

