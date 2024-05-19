let originalFontSize = 16; // Set your original font size here

  function toggleFontSize() {
    const body = document.querySelector('body');
    const currentFontSize = parseFloat(window.getComputedStyle(body).fontSize);

    if (currentFontSize === originalFontSize) {
      // Increase font size
      body.style.fontSize = currentFontSize + '20px'; // Adjust as needed
    } else {
      // Restore original font size
      body.style.fontSize = originalFontSize + 'px';
    }
  }