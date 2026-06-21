var carouselcount = 0;
$(document).ready(function(){
    setTimeout(() => {
        carousel()
    }, 5000);
});

function carousel() {
    var $firstimage = $('.carouselimgdiv').find('a:first')
    $firstimage.css({"margin-left": '-101vw'});
    setTimeout(() => {
        $(".carouselimgdiv").append($firstimage.css({"margin-left": '0'}));
    }, 2000);
    
    carouselcount += 1;
    setTimeout(() => {
        carouselcount -= 1;
        if(carouselcount == 0){
            carousel()
        }
    }, 5000);
}

function carouselleft() {
    var $secondimage = $('.carouselimgdiv').find('a:last')
    $(".carouselimgdiv").prepend($secondimage.css({"margin-left": '-101vw'}));
    setTimeout(() => {
        $secondimage.css({"margin-left": '0'});
    }, 1);
    carouselcount += 1;
    setTimeout(() => {
        carouselcount -= 1;
        if(carouselcount == 0){
            carousel()
        }
    }, 7000);
}

$('.carouseldiv').hover(function(){
  $('.arrow').fadeToggle()
});