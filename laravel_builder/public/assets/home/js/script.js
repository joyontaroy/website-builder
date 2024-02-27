$('ducument').ready(function(){

  // $('.toggle-bar').click(function(){
  //    $('.nav-menu').toggleClass('left');
  //  });
  //  Offcanves Menu
  $('.has-menu').click(function(){
     $('.droup-menu').toggleClass('off-show');
   });
    // Nice Select
    $('.nice-control').niceSelect();
    // 
    $('.user-slider').owlCarousel({
            loop:true,
            autoplay:false,
            margin:10,
            nav:true,
                navText:['<i class="fa-solid fa-chevron-left"></i>','<i class="fa-solid fa-chevron-right"></i>'],
            dots:false,
            responsive:{
              0:{
                items:1
              },
              600:{
                items:1
              },
              1000:{
                items:1
              }
            }
        });




    // Pricing Range
    $("#slider-range").slider({
        range: true,
        orientation: "horizontal",
        min: 0,
        max: 10000,
        values: [0, 10000],
        step: 100,

      slide: function (event, ui) {
        if (ui.values[0] == ui.values[1]) {
          return false;
        }
        
        $("#min_price").val(ui.values[0]);
        $("#max_price").val(ui.values[1]);
      }
    });

      // Progress Bar 
      $('#bar1').barfiller();

      $('.gSearch-icon').click(function(){
        $('.gSearch-show').toggleClass('active'); 
      });


});
// Video Player
const player = new Plyr('#player');