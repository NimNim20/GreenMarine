
// Handling on click event for each button, so they change color based on their cliked status
document.querySelectorAll('.button-grid .btn').forEach(button => {
    button.addEventListener('click', () => {
      // Remove 'clicked' class from all buttons
      document.querySelectorAll('.button-grid .btn').forEach(btn => btn.classList.remove('clicked'));
      
      // Add 'clicked' class to the current button
      button.classList.add('clicked');
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