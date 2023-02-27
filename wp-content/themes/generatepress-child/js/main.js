document.addEventListener("DOMContentLoaded", () => {
    currentSlideID = 1;
    sliderElement = document.getElementById('slider');
    totalSlides = sliderElement.childElementCount;

    showSlide(); // llamada inicial para mostrar la primera diapositiva

    function next() {
        if (totalSlides > currentSlideID) {
            currentSlideID++;
        } else { // Esto para bucle
            currentSlideID = 1; // Esto para bucle
        } // Esto para bucle
        showSlide();
    }
    const nextButton = document.getElementById('nextButton');
    nextButton.addEventListener('click', next);

    function prev() {
        if (currentSlideID > 1) {
            currentSlideID--;
        }
        else { // Esto para bucle
            currentSlideID = totalSlides; // Esto para bucle
        } // Esto para bucle
        showSlide();
    }
    const prevButton = document.getElementById("prevButton");
    prevButton.addEventListener('click', prev);

    function showSlide() {
        slides = document.getElementById('slider').getElementsByTagName('li')
        for (let index = 0; index < totalSlides; index++) {
            const element = slides[index];
            if (currentSlideID === index + 1) {
                element.classList.remove('hidden')
            } else {
                element.classList.add('hidden')
            }
        }
    }
});
