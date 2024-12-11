  // Get the mobile menu and toggle button
  const mobileMenu = document.getElementById('mobile-menu');
  const menuToggleButton = document.getElementById('menu-toggle');
  const menuIcon = menuToggleButton.querySelector('svg:first-of-type');  // Menu icon (hamburger)
  const closeIcon = menuToggleButton.querySelector('svg:last-of-type');  // Close icon (X)

  // Function to toggle the menu visibility
  menuToggleButton.addEventListener('click', function() {
    // Toggle the hidden class to show/hide the menu
    mobileMenu.classList.toggle('hidden');
    
    // Toggle between the hamburger and close icon
    menuIcon.classList.toggle('hidden');
    closeIcon.classList.toggle('hidden');
  });