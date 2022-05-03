//To make the text in bottom span 
/*setInterval (BlinkIt, 500);
  var color = "#FCC7BF";

  function BlinkIt () {
    var blink = document.getElementById ("blink");
    color = (color == "black")? "#FCC7BF" : "black";
    blink.style.color = color;
  }*/

  let sliderSection = document.querySelectorAll(".slider-section");
  let sliderSectionLast = sliderSection[sliderSection.length-1];
  
  const btnLeft = document.querySelector("#btn-left");
  const btnRight = document.querySelector("#btn-right");
  
  slider.insertAdjacentElement('afterbegin',sliderSectionLast);
  
  function Next(){
      let sliderSectionFirst = document.querySelectorAll(".slider-section")[0];
      slider.style.marginLeft = "-200%";
      slider.style.transition = "none";
      setTimeout(function(){
          slider.style.transition = "none";
          slider.insertAdjacentElement('beforeend', sliderSectionFirst);
          slider.style.marginLeft = "-100%";
      },300);
  }
  
  function Prev(){
      let sliderSection = document.querySelectorAll(".slider-section");
      let sliderSectionLast = sliderSection[sliderSection.length-1];
      slider.style.marginLeft = "0";
      slider.style.transition = "all 0.5s";
      setTimeout(function(){
          slider.style.transition = "none";
          slider.insertAdjacentElement('afterbegin', sliderSectionLast);
          slider.style.marginLeft = "-100%";
      },300);
  }
  
  btnRight.addEventListener('click', function(){
      Next();
  });
  
  btnLeft.addEventListener('click', function(){
      Prev();
  });
  
  //Automatic slider//
  setInterval(function(){
      Next();
  },6000);
  
  //Function to show de menu
  function show(n) {
      document.getElementById("submenu"+n).style.display="block"
      }
  
  //Function to hide the menu    
  function hide(n) {
      document.getElementById("submenu"+n).style.display="none"
      }
  
      /*document.querySelector(".menu-btn").addEventListener("click", () => {
          document.querySelector(".nav-menu-sec").classList.toggle("show");
        });*/
        
        //ScrollReveal().reveal('.showcase');
        /*ScrollReveal().reveal('.news-cards', { delay: 500 });
        ScrollReveal().reveal('.cards-banner-one', { delay: 500 });
        ScrollReveal().reveal('.cards-banner-two', { delay: 500 });*/
        
  
      
    
  
  