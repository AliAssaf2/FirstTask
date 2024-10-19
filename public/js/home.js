document.addEventListener('DOMContentLoaded', (event) => {
    const sentences = [
        "A Full-stack Development Company",
        "Consultation",
        "UI UX"
    ];
    let index = 0;
    const carouselText = document.getElementById('carousel-text');

    function changeText() {
        carouselText.textContent = sentences[index];
        index = (index + 1) % sentences.length;
    }

    changeText(); // Initial call to set the first sentence
    setInterval(changeText, 3000); // Change text every 3 seconds
});

document.addEventListener('DOMContentLoaded', (event) => {
    let currentPosition = 0;
    const carouselWrapper = document.getElementById("carouselWrapper");
    const totalCards = document.querySelectorAll(".card").length;
    const visibleCards = 4; // Number of visible cards
    const cardWidth = 100 / visibleCards; // Calculate percentage width per card

    // Move carousel to the left (previous)
    function moveLeft() {
        if (currentPosition > 0) {
            currentPosition--;
        } else {
            currentPosition = totalCards - visibleCards; // Loop to last set of cards
        }
        updateCarouselPosition();
    }

    // Move carousel to the right (next)
    function moveRight() {
        if (currentPosition < totalCards - visibleCards) {
            currentPosition++;
        } else {
            currentPosition = 0; // Loop back to the start
        }
        updateCarouselPosition();
    }

    // Update carousel position based on current position
    function updateCarouselPosition() {
        carouselWrapper.style.transform = `translateX(-${currentPosition * cardWidth}%)`;
    }

    // Attach event listeners to the buttons
    document.querySelector('.carousel-control.left').addEventListener('click', moveLeft);
    document.querySelector('.carousel-control.right').addEventListener('click', moveRight);
});
