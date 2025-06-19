function showSlide(index) {
    if (index >= slides.length) {
        slideIndex = 0;
    } else if (index < 0) {
        slideIndex = slides.length - 1;
    }

    slides.forEach(slide => {
        slide.classList.remove("displaySlide");
    });

    slides[slideIndex].classList.add("displaySlide");
}

function prevSlide() {
    clearInterval(intervalID);
    slideIndex--;
    showSlide(slideIndex);
}

function nextSlide() {
    slideIndex++;
    showSlide(slideIndex);
}
