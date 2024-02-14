const loading_bar = document.getElementsByClassName('loading')[0].getElementsByTagName('figure')[0];
var slideshow_slide, slideshow_progress = 0;

setInterval(() => {
    slideshow_progress++;

    if (slideshow_progress > 0) {
        if (slideshow_progress > 100) {
            slideshow_progress = 0;
            slideshow_slide++; slideshow_slide %= 3;
            loading_bar.style.width = '0%';
        } else {
            loading_bar.style.width = slideshow_progress + '%';
        }
    }
}, 75);

function toSlide(slide) {
    slide = Math.round(slide);
    slideshow_progress = -25;
    slideshow_slide = Math.min(2, Math.max(0, slide));
}