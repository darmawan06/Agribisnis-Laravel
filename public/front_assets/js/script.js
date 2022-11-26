$('.navbar-logo').on('click',()=>{
  $('.navbar-responsive').toggleClass('d-none')
  $('.navbar-responsive').toggleClass('d-flex')
})


$('.testimoni-list').slick({
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    prevArrow: $(''),
    nextArrow: $('.testimoni-btn')
});



$('.dapro-list').slick({
    infinite: true,
    speed: 300,
    dots:true,
    centerMode: true,
    slidesToShow: 1,
    variableWidth: true,
    variableHeight: true,
    prevArrow: $(''),
    nextArrow: $('.dapro-btn')
});


