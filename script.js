const normalizePath = path => path.replace(/\/$/, ''); // Remove trailing slash
const currentPath = normalizePath(window.location.pathname);
const buttonPath = normalizePath(new URL(button.href).pathname);



// Handling on click event for each button, so they change color based on their cliked status
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


//   document.querySelectorAll('.button-grid .btn').forEach(button => {
//     button.addEventListener('click', event => {
//       event.preventDefault(); // Prevent the default anchor behavior
  
//       // Get the target section's ID from the data attribute
//       const targetId = button.getAttribute('data-target');
//       const targetElement = document.querySelector(targetId);
  
//       if (targetElement) {
//         // Scroll the section into view
//         targetElement.scrollIntoView({
//           behavior: 'smooth', // Smooth scrolling effect
//           block: 'start', // Align to the top of the section
//         });
  
//         // Optional: Highlight the clicked button
//         document.querySelectorAll('.button-grid .btn').forEach(btn => btn.classList.remove('clicked'));
//         button.classList.add('clicked');
//       }
//     });
//   });
    //End of scroll handling  