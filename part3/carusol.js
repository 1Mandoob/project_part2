var slideIndex = 0;
var slides = document.getElementsByClassName("carousel_slide");


function carousel_left() {
    if (slideIndex > 0) {

        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }

        slideIndex--;
        slides[slideIndex].style.display = "block";
    }
}


function carousel_right() {

    if (slideIndex < slides.length - 1) {

        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }

        slideIndex++;
        slides[slideIndex].style.display = "block";
    }
}

setInterval(function () {

    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }


    if (slideIndex >= slides.length) {
        slideIndex = 0;
    }

    slides[slideIndex].style.display = "block";

    slideIndex++;

}, 3000);
