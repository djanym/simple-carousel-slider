const oneSlide = {
    auto: true,
    infiniteLoop: true,
    minSlides: 1,
    maxSlides: 1,
    slideWidth: 306,
    moveSlides: 1,
    pager: false,
    useCSS: true,
    responsive: true,
    nextSelector: '.featured-companies__slider--next',
    prevSelector: '.featured-companies__slider--prev',
    nextText: '',
    prevText: ''
};
const twoSlides = {
    auto: true,
    infiniteLoop: true,
    minSlides: 1,
    maxSlides: 2,
    slideWidth: 306,
    moveSlides: 1,
    pager: false,
    useCSS: true,
    responsive: true,
    nextSelector: '.featured-companies__slider--next',
    prevSelector: '.featured-companies__slider--prev',
    nextText: '',
    prevText: ''
};
const threeSlides = {
    auto: true,
    infiniteLoop: true,
    minSlides: 1,
    maxSlides: 3,
    slideWidth: 306,
    moveSlides: 1,
    pager: false,
    useCSS: true,
    responsive: true,
    nextSelector: '.featured-companies__slider--next',
    prevSelector: '.featured-companies__slider--prev',
    nextText: '',
    prevText: ''
};

let slider;
if ($(document).width() > 680 && $(document).width() <= 1200) {
    slider = $('.featured-companies__slider__js').bxSlider(twoSlides);
}
else if ($(document).width() <= 680) {
    slider = $('.featured-companies__slider__js').bxSlider(oneSlide);
}
else {
    slider = $('.featured-companies__slider__js').bxSlider(threeSlides);
}

$(window).on('resize orientationchange', function() {
    if ($(document).width() > 680 && $(document).width() <= 1200) {
        slider.destroySlider();
        slider.reloadSlider(twoSlides);
    }
    if($(document).width() <= 680) {
        slider.destroySlider();
        slider.reloadSlider(oneSlide);
    }
    if ($(document).width() > 1200){
        slider.destroySlider();
        slider.reloadSlider(threeSlides);
    }
});