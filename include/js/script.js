document.addEventListener('DOMContentLoaded', function () {
  const counters = document.querySelectorAll('.counter2');
  const options = {
    root: null,
    threshold: 0.5,
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        startCounter(entry.target);
      } else {
        resetCounter(entry.target);
      }
    });
  }, options);

  function startCounter(counter) {
    const target = +counter.getAttribute('data-target');
    const increment = target / 100;
    let current = 0;
    const unit = counter.getAttribute('data-unit') || '';
    const format = counter.getAttribute('data-format') || '';

    function updateCounter() {
      if (current < target) {
        current += increment;
        if (format === 'K') {
          counter.innerText = `${(current / 1000).toFixed(1)}K+`;
        } else if (format === 'M') {
          counter.innerText = `${(current / 1000000).toFixed(2)}M+`;
        } else if (unit === '%') {
          counter.innerText = `${current.toFixed(1)}%`;
        } else if (unit === '$') {
          counter.innerText = `$${(current / 1000000).toFixed(2)}M+`;
        } else if (format === 'plus') {
          counter.innerText = `${Math.ceil(current)}+`;
        } else {
          counter.innerText = Math.ceil(current);
        }
        setTimeout(updateCounter, 20);
      } else {
        if (format === 'K') {
          counter.innerText = `${(target / 1000).toFixed(1)}K+`;
        } else if (format === 'M') {
          counter.innerText = `${(target / 1000000).toFixed(2)}M+`;
        } else if (unit === '%') {
          counter.innerText = `${target}%`;
        } else if (unit === '$') {
          counter.innerText = `$${(target / 1000000).toFixed(2)}M+`;
        } else if (format === 'plus') {
          counter.innerText = `${target}+`;
        } else {
          counter.innerText = target;
        }
      }
    }

    updateCounter();
  }

  function resetCounter(counter) {
    const unit = counter.getAttribute('data-unit') || '';
    if (unit === '%') {
      counter.innerText = '0%';
    } else if (unit === '$') {
      counter.innerText = '$0';
    } else {
      counter.innerText = '0';
    }
  }

  counters.forEach((counter) => observer.observe(counter));
});

    const swiper = new Swiper('.card-wrapper', {
        loop: false,  // We won't use native looping.
      
        // Pagination Configuration
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
      
        // Handle Events to Reset to First Slide on Last Slide
        on: {
          slideChange: function () {
            const { activeIndex, slides } = this;
            
            // If the user reaches the last slide, reset to the first slide
            if (activeIndex === slides.length - 1) {
              setTimeout(() => {
                this.slideTo(0);  // Navigate back to the first slide
              }, 500);  // Add a small delay for smooth transition
            }
          },
        },
      });
      
      const buttons = document.querySelectorAll('.question button');

      buttons.forEach(button => {
        button.addEventListener('click', () => {
          const faq = button.nextElementSibling; // Target the <p> element
          const icon = button.querySelector('.d-arrow'); // Target the chevron icon
      
          // Close all other open FAQs and remove active color
          document.querySelectorAll('.question p.show').forEach(openFaq => {
            if (openFaq !== faq) {
              openFaq.classList.remove('show');
              openFaq.previousElementSibling.querySelector('.d-arrow')?.classList.remove('rotate');
              openFaq.previousElementSibling.classList.remove('active'); // Remove active color
            }
          });
      
          // Toggle the clicked FAQ and icon
          faq.classList.toggle('show');
          icon.classList.toggle('rotate');
          icon.classList.toggle('active-arrow');
          button.classList.toggle('active'); // Add/Remove active color
        });
      });
      

      // JavaScript to handle the dropdown functionality
document.querySelectorAll('.dropdown-item2').forEach(item => {
  item.addEventListener('click', function (e) {
      e.preventDefault(); // Prevent default link behavior

      // Get the selected method from the clicked dropdown item
      var selectedMethod = this.textContent.trim();

      // Update the button with the selected method
      document.getElementById('selectedLanguage2').textContent = selectedMethod;
  });
});

document.querySelectorAll('.dropdown-item3').forEach(item => {
  item.addEventListener('click', function (e) {
      e.preventDefault(); // Prevent default link behavior

      // Get the selected method from the clicked dropdown item
      var selectedMethod = this.textContent.trim();

      // Update the button with the selected method
      document.getElementById('selectedLanguage3').textContent = selectedMethod;
  });
});

      
      
      
      
    
      
      