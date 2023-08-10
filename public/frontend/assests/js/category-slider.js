document.addEventListener('DOMContentLoaded', function () {
    const prevButton = document.querySelector('.prev-button');
    const nextButton = document.querySelector('.next-button');
    const carouselContainer = document.getElementById('categoryCarousel');
    const slides = document.querySelectorAll('.cs-single-slide');
    const slideWidth = slides[0].clientWidth + 30; // Add 30px for the gap between slides
    const maxSlide = slides.length - 4;
    let currentSlide = 0;
    let autoScrollInterval;

    // Function to handle sliding to the previous slide
    function slideToPrev() {
        currentSlide = Math.max(currentSlide - 1, 0);
        updateCarouselPosition();
        updateButtonState();
    }

    // Function to handle sliding to the next slide
    function slideToNext() {
        currentSlide = currentSlide + 1;
        if (currentSlide > maxSlide) {
            currentSlide = 0; // Loop back to the first slide when reaching the last slide
        }
        updateCarouselPosition();
        updateButtonState();
    }


    // Function to update the position of the carousel based on the current slide
    function updateCarouselPosition() {
        const translateXValue = -(currentSlide * slideWidth);
        carouselContainer.style.transform = `translateX(${translateXValue}px)`;
    }

    // Function to update the state of the prev and next buttons
    function updateButtonState() {
        prevButton.disabled = currentSlide === 0; // Disable prev button when on the first slide
    }

    // Attach event listeners to the previous and next buttons
    prevButton.addEventListener('click', slideToPrev);
    nextButton.addEventListener('click', slideToNext);

    // Set initial button state
    updateButtonState();

       // Function to start auto-scrolling
       function startAutoScroll() {
        autoScrollInterval = setInterval(slideToNext, 2500); // Auto scroll every 5 seconds
    }

    // Function to stop auto-scrolling
    function stopAutoScroll() {
        clearInterval(autoScrollInterval);
    }

    // Attach event listeners to the previous and next buttons
    prevButton.addEventListener('click', () => {
        slideToPrev();
        stopAutoScroll(); // Stop auto-scrolling when manually sliding
    });
    nextButton.addEventListener('click', () => {
        slideToNext();
        stopAutoScroll(); // Stop auto-scrolling when manually sliding
    });

    // Start auto-scrolling when the DOM is fully loaded
    startAutoScroll();
});