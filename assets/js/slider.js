const scsSliderOptions = {
    auto: false,
    infiniteLoop: true,
    minSlides: 1,
    maxSlides: 1,
    slideWidth: 306,
    moveSlides: 1,
    pager: false,
    useCSS: true,
    responsive: true,
    nextText: '',
    prevText: '',
    wrapperClass: 'scs-slider-wrapper',
};
const oneSlide = {
    minSlides: 1,
    maxSlides: 1,
    slideWidth: 306,
    moveSlides: 1,
};
const twoSlides = {
    minSlides: 1,
    maxSlides: 2,
    slideWidth: 306,
};
const threeSlides = {
    minSlides: 1,
    maxSlides: 3,
    slideWidth: 306,
};

let slider;
if ($(document).width() > 680 && $(document).width() <= 1200) {
    slider = $('.scs-slider').bxSlider(twoSlides);
}
else if ($(document).width() <= 680) {
    slider = $('.scs-slider').bxSlider(oneSlide);
}
else {
    slider = $('.scs-slider').bxSlider({
        ...scsSliderOptions,
        ...threeSlides
    });
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