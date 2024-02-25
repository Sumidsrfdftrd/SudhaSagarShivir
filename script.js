document.addEventListener("DOMContentLoaded", function() {
    const textElement = document.getElementById("typingText");
    const textToType = "आपका स्वागत करता है...";
    let currentIndex = 0;

    function typeText() {
        textElement.textContent = textToType.slice(0, currentIndex);
        currentIndex++;

        if (currentIndex <= textToType.length) {
            setTimeout(typeText, 200); // Adjust typing speed (milliseconds)
        }
	else{
            currentIndex = 0;
            setTimeout(typeText, 200); // Adjust typing speed (milliseconds)
            
	}
    }
         typeText();
});
