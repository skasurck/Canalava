$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

// Highlight the top nav as scrolling occurs
$('body').scrollspy({
    target: '.navbar-fixed-top'
})

// Closes the Responsive Menu on Menu Item Click
$('.navbar-collapse ul li a').click(function() {
    $('.navbar-toggle:visible').click();
});

$(function(){

       if ($(window).width() >= 720) { 
           $("header").removeClass("header1");
       }
       


});

$(function(){
     
    var index =0;
    var titulos = ["Planchadurías y despachos de ropa","Tintorerías","Lavanderías de autoservicio y por encargo","Lavanderías de blancos e industriales","Cámara Nacional de la Industria de Lavanderías"];
  setInterval(function(){
      $("#titulo").text(titulos[index]);
      
      if(index==4){
          index=0;
      }else{
          index++;
      };
  },3000);
    
});

$(function(){

       if ($(window).width() <= 720) { 
           $("iframe").attr("height","200px");
       }
       


});