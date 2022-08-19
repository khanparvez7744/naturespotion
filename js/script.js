if($(window).width()< '767'){
   $('.nmrbody p.stretch').removeClass('w-50');
   $('.nmrbody .nmrSec4 p').removeClass('mt-10');
   $('.nmrbody .nmrSec4 p').addClass('mt-5');
//    $('#recipTxtBtn input').addClass('mt-5');

}


$(document).ready(function(){
    // start owl carousel
    $('.owl-carousel').owlCarousel({
       items: 4,
       margin:50,
       loop:true,
       navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
       nav:true,
       dots: false,
       autoplay:true,
          responsive:{
              0:{
                  items:1
              },
              600:{
                  items:3
              },
              1000:{
                  items:4
              }
          }
    });
    // end owl carousel
    
    });



    // start recipe 
    $('#allRecipe .recipeRow').addClass('d-none');
    $('#allRecipe #breadRecipe').removeClass('d-none');
    $('#saladClick').click(function(){
        $('#allRecipe .recipeRow').addClass('d-none');
        $('#allRecipe #saladRecipe').removeClass('d-none');
    });
    $('#barClick').click(function(){
        $('#allRecipe .recipeRow').addClass('d-none');
        $('#allRecipe #barRecipe').removeClass('d-none');
    });
    $('#muffinClick').click(function(){
        $('#allRecipe .recipeRow').addClass('d-none');
        $('#allRecipe #muffinRecipe').removeClass('d-none');
    });
    $('#peanutClick').click(function(){
        $('#allRecipe .recipeRow').addClass('d-none');
        $('#allRecipe #peanutRecipe').removeClass('d-none');
    });
    $('#breadClick').click(function(){
        $('#allRecipe .recipeRow').addClass('d-none');
        $('#allRecipe #breadRecipe').removeClass('d-none');
    });
    // end recipe 


// start home page
$('#gm1000').mouseover(function(){
    $('#allHonePro .col-lg-4 img').attr('width','400').attr('height','400');
    $('#allHonePro .col-lg-4 #Pro1000').attr('width','600').attr('height','550');
});
$('#gm1000').mouseleave(function(){
    $('#allHonePro .col-lg-4 img').attr('width','400').attr('height','400');
});
$('#gm500').mouseover(function(){
    $('#allHonePro .col-lg-4 img').attr('width','400').attr('height','400');
    $('#allHonePro .col-lg-4 #Pro500').attr('width','600').attr('height','550');
});
$('#gm500').mouseleave(function(){
    $('#allHonePro .col-lg-4 img').attr('width','400').attr('height','400');
});
$('#gm250').mouseover(function(){
    $('#allHonePro .col-lg-4 img').attr('width','400').attr('height','400');
    $('#allHonePro .col-lg-4 #Pro250').attr('width','600').attr('height','550');
   
});
$('#gm250').mouseleave(function(){
    $('#allHonePro .col-lg-4 img').attr('width','400').attr('height','400');
});
// end home page

//show honey information
function showinf(){
    // $('#honeyinfo').show(1000);
    $('#honeyinfo').toggle(1000);
}


// start recipe
// $('#liqRecipe').click(function(){
//     $('#breadClick').addClass('d-none');
//     $('#saladClick').addClass('d-none');
//     $('#barClick').addClass('d-none');
//     $('#muffinClick').addClass('d-none');
//     $('#peanutClick').removeClass('d-none');
// });

// $('#SolRecipe').click(function(){
//     $('#breadClick').removeClass('d-none');
//     $('#saladClick').removeClass('d-none');
//     $('#barClick').removeClass('d-none');
//     $('#muffinClick').removeClass('d-none');
//     $('#peanutClick').addClass('d-none');
// });



// end recipe