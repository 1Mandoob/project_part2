var slideIndex = 0;
var slides = document.getElementsByClassName("carousel_slide");


// display the next picture from the left
function carousel_left() {
    if (slideIndex > 0) {

        // hide all the picutres
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }

        slideIndex--;
        slides[slideIndex].style.display = "block";
    }
}



// display the next picture from the right
function carousel_right() {

    if (slideIndex < slides.length - 1) {

        // hide all the picutres
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }

        slideIndex++;
        slides[slideIndex].style.display = "block";
    }
}

//channing and displaying the text every 3 seconds 
setInterval(function () {

    // hide all the picutres
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    // show the current one
    if (slideIndex >= slides.length) {
        slideIndex = 0;
    }

    slides[slideIndex].style.display = "block";

    slideIndex++;

}, 3000);
