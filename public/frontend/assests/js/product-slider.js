document.addEventListener('DOMContentLoaded', function () {
    const prevButtonProduct = document.querySelector('.prev-button-product');
    const nextButtonProduct = document.querySelector('.next-button-product');
    const productCarouselContainer = document.getElementById('productCarousel');
    const productSlides = document.querySelectorAll('.ps-single-slide');
    const viewportWidth = document.documentElement.clientWidth;

    // Check if it's a mobile device
    const isMobileDevicePS = viewportWidth <= 992;
    
    // Adjust productSlideWidth and maxProductSlide based on device type
    const productSlideWidth = isMobileDevicePS ? productSlides[0].clientWidth + 80 : productSlides[0].clientWidth + 30;
    const maxProductSlide = isMobileDevicePS ? productSlides.length - 2 : productSlides.length - 4;
    
    let currentProductSlide = 0;
    let autoScrollProductInterval;

    // Function to handle sliding to the previous slide
    function slideToPrevProduct() {
        currentProductSlide = Math.max(currentProductSlide - 1, 0);
        updateProductCarouselPosition();
        updateProductButtonState();
    }

    // Function to handle sliding to the next slide
    function slideToNextProduct() {
        currentProductSlide = currentProductSlide + 1;
        if (currentProductSlide > maxProductSlide) {
            currentProductSlide = 0; // Loop back to the first slide when reaching the last slide
        }
        updateProductCarouselPosition();
        updateProductButtonState();
    }

    // Function to update the position of the carousel based on the current slide
    function updateProductCarouselPosition() {
        const translateXValue = -(currentProductSlide * productSlideWidth);
        productCarouselContainer.style.transform = `translateX(${translateXValue}px)`;
    }

    // Function to update the state of the prev and next buttons
    function updateProductButtonState() {
        prevButtonProduct.disabled = currentProductSlide === 0; // Disable prev button when on the first slide
        nextButtonProduct.disabled = currentProductSlide === maxProductSlide; // Disable next button when on the last visible slide
    }

    // Function to start auto-scrolling
    function startAutoScrollProduct() {
        autoScrollProductInterval = setInterval(slideToNextProduct, 5000); // Auto scroll every 2.5 seconds
    }

    // Function to stop auto-scrolling
    function stopAutoScrollProduct() {
        clearInterval(autoScrollProductInterval);
    }

    // Attach event listeners to the previous and next buttons
    prevButtonProduct.addEventListener('click', () => {
        slideToPrevProduct();
        stopAutoScrollProduct(); // Stop auto-scrolling when manually sliding
    });
    nextButtonProduct.addEventListener('click', () => {
        slideToNextProduct();
        stopAutoScrollProduct(); // Stop auto-scrolling when manually sliding
    });

    // Start auto-scrolling when the DOM is fully loaded
    startAutoScrollProduct();
});