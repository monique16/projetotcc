jQuery(document).ready(function ($) {
    //FIXED HEADER
    window.onscroll = function () {
      if (window.pageYOffset > 140) {
        $("#header").addClass("active");
      } else {
        $("#header").removeClass("active");
      }
    };



    //ISOTOPE
    let btns = $("#servicos .button-group button");
  
    btns.click(function (e) {
      $("#servicos .button-group button").removeClass("active");
      e.target.classList.add("active");
  
      let selector = $(e.target).attr("data-filter");
      $("#servicos .grid").isotope({
        filter: selector,
      });
    });
  
    $(window).on("load", function () {
      $("#servicos .grid").isotope({
        filter: "*",
      });
    });

  //MAGNIFY
  $(".grid .popup-link").magnificPopup({
    type: "image",
    gallery: {
      enabled: true,
      tPrev: "Anterior",
      tNext: "Próxima",
      tCounter: "%curr% de %total%",
    }

  });
 
  

$('.slider-principal').slick({
  dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  adaptiveHeight: true
});

})

// RECADO
function novoEvento() {
  var novoEvento = document.getElementById('novoEvento');
  novoEvento.classList.remove('d-none');
}

// CRONOGRAMA
