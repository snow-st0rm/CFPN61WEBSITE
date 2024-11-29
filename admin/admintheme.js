document.addEventListener('DOMContentLoaded', function () {
    const toggleButton = document.getElementById('toggle-dark-mode');
    const themeStylesheet = document.getElementById('theme-stylesheet');

    toggleButton.addEventListener('click', function () {
        const currentTheme = themeStylesheet.getAttribute('href');
        console.log('Current Theme:', currentTheme);  // Debugging

        // Toggle between light and dark mode
        if (currentTheme.includes('lightmode.css')) {
            themeStylesheet.setAttribute('href', 'darkmode.css');
            console.log('Switched to Dark Mode');  // Debugging
        } else {
            themeStylesheet.setAttribute('href', 'lightmode.css');
            console.log('Switched to Light Mode');  // Debugging
        }
    });
}); 
