// Handling on click event for each button, so they change color based on their clicked status
// Get all buttons
document.querySelectorAll('.button-grid .btn').forEach(button => {
  // Add click event listener
  button.addEventListener('click', () => {
    // Remove 'clicked' class from all buttons
    document.querySelectorAll('.button-grid .btn').forEach(btn => btn.classList.remove('clicked'));
    
    // Add 'clicked' class to the current button
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

  //Start of scroll handling
  document.querySelectorAll('.scroll-to').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();

        // Get the title of the clicked icon
        const titleToMatch = this.getAttribute('data-title');

        // Find the corresponding section by matching the title
        const targetSection = [...document.querySelectorAll('.home_ydelser')].find(section => 
            section.getAttribute('data-title') === titleToMatch
        );

        if (targetSection) {
            // Scroll to the matching section
            window.scrollTo({
                top: targetSection.offsetTop,
                behavior: 'smooth'
            });
        }
    });
});

//End of scroll handling