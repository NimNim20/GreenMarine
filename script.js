document.querySelectorAll('.button-grid .btn').forEach(button => {
    button.addEventListener('click', () => {
      // Remove 'clicked' class from all buttons
      document.querySelectorAll('.button-grid .btn').forEach(btn => btn.classList.remove('clicked'));
      
      // Add 'clicked' class to the current button
      button.classList.add('clicked');
    });
  });
  