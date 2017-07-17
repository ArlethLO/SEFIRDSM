 $(document).ready(function(){
      $('.carousel.carousel-slider').carousel({fullWidth: true, indicators: true, duration: 750});  
      setInterval(function(){
      $('.carousel').carousel('next');
      }, 3000);
  });
 