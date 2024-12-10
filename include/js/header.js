 // JavaScript to handle the dropdown functionality
 document.querySelectorAll('.dropdown-item').forEach(item => {
    item.addEventListener('click', function (e) {
      e.preventDefault(); // Prevent default link behavior

      // Get the selected language and flag from the clicked dropdown item
      var selectedLang = this.getAttribute('data-lang');
      var selectedFlagSrc = this.getAttribute('data-flag');

      // Update the button with the selected language and flag
      document.getElementById('selectedFlag').src = selectedFlagSrc;
    });
  });