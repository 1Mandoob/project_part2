// Wait for the DOM content to be fully loaded
document.addEventListener('DOMContentLoaded', function() {
    // Get the questionnaire form element
    const form = document.getElementById('questionnaireForm');

    // Add event listener for form submission
    form.addEventListener('submit', function(event) {
        // Prevent default form submission
        event.preventDefault();

        // Perform custom validation
        const name = document.getElementById('name').value.trim(); // Get the value of the name input and remove leading/trailing whitespace
        const email = document.getElementById('email').value.trim(); // Get the value of the email input and remove leading/trailing whitespace
        const rating = document.querySelector('input[name="rating"]:checked'); // Get the checked rating input
        const comments = document.getElementById('comments').value.trim(); // Get the value of the comments textarea and remove leading/trailing whitespace

        // Validation for name (at least 3 characters)
        if (name.length < 3) {
            alert('Name must be at least 3 characters long.');
            return;
        }

        // Validation for email format using regular expression
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Regular expression for email validation
        if (!emailRegex.test(email)) {
            alert('Please enter a valid email address.');
            return;
        }

        // Validation for rating selection
        if (!rating) {
            alert('Please select a rating.');
            return;
        }

        // Validation for comments (at least 10 characters)
        if (comments.length < 10) {
            alert('Comments must be at least 10 characters long.');
            return;
        }

        // If all validations pass, show a success message
        alert('Form submitted successfully!');
        form.reset(); // Reset the form after submission
    });
});