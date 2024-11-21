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
        e.preventDefault(); // Prevent default behavior

        // Get the title of the clicked icon
        const titleToMatch = this.querySelector('.icon-title').textContent.trim(); // Grab title from <p> tag

        // Find the corresponding title element within home_ydelser-title
        const targetTitle = [...document.querySelectorAll('.home_ydelser-title')].find(titleElement => 
            titleElement.textContent.trim() === titleToMatch // Match text content
        );

        if (targetTitle) {
            // Find the closest section (i.e., .home_ydelser) that contains the target title
            const targetSection = targetTitle.closest('.home_ydelser'); 

            // Scroll to the section's top position, adjusted by an optional offset
            window.scrollTo({
                top: targetSection.offsetTop - 100, // Adjust scroll position (e.g., for a fixed header)
                behavior: 'smooth'
            });
        }
    });
});





//End of scroll handling