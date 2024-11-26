// Handling on click event for each button, so they change color based on their clicked status
// Get all buttons
document.querySelectorAll('.button-grid .btn').forEach(button => {
  // Add click event listener
  button.addEventListener('click', () => {
    // Remove 'clicked' class from all buttons
    document.querySelectorAll('.button-grid .btn').forEach(btn => btn.classList.remove('clicked'));
    
    button.classList.add('clicked');
  });
});

window.addEventListener('DOMContentLoaded', () => {
  const currentPath = window.location.pathname; // Get the current page path
  document.querySelectorAll('.button-grid .btn').forEach(button => {
    const buttonPath = new URL(button.href).pathname; // Get the path from each button's href
    if (currentPath === buttonPath) {
      button.classList.add('clicked'); // Add 'clicked' class if paths match
    }
  });
});
  
  //End of click handling
  

  // Scroll to Top Button Functionality
  document.addEventListener("DOMContentLoaded", () => {
    const scrollToTopBtn = document.getElementById('scrollToTopBtn');
  
    // Scroll detection
    window.addEventListener('scroll', () => {
        const scrollPosition = document.documentElement.scrollTop || document.body.scrollTop;
        if (scrollPosition > 45) {
            scrollToTopBtn.style.display = 'block'; // Show button
        } else {
            scrollToTopBtn.style.display = 'none'; // Hide button
        }
    });
  
    // Smooth scroll to top
    scrollToTopBtn.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
  });
  //End of Scroll to Top Button Functionality

  // Burger menu functionality start

  document.querySelector('.burgerButton').addEventListener('click', () => {
    const navLinks = document.querySelector('.navLinks');
    navLinks.classList.toggle('active'); // Toggles the `active` class
  });
  //End of Burger menu functionality
  