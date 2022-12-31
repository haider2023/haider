
let menu = document.querySelector('#menu-btn');
let navbar= document.querySelector('.header .navbar');

menu.onclick = () => {
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

window.onscroll = () => {
 menu.classList.remove('fa-times');
    navbar.classList.remove('active');
};


var swiper = new Swiper(".home-slider", {
    loop:true,
    navigation: {
        
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
 
  var swiper = new Swiper(".reviews-slider", {
    
    grapCursor:true,
    loop:true,
    autoHeight:false,
    spaceBetween:30,
    
    
    breakpoints: {
      0: {
        slidesPerView: 1,
        
      },
      700: {
        slidesPerView: 3,
       
      },
      1000: {
        slidesPerView: 4,
    
      },
    },
    },
  );

  let LoadMoreBtn =document.querySelector('.package .load-more .btn');
  let currentItem =3 ;

  LoadMoreBtn.onclick = () =>{
    let boxes = [...document.querySelectorAll('.package .box-container .box')];
    for(var i=currentItem; i<currentItem+3;i++){
      boxes[i].style.display ='inline-block';
    };
    currentItem+=3;
    if(currentItem>=boxes.length){
      LoadMoreBtn.style.display='none';
    }
  }