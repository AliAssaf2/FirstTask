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
