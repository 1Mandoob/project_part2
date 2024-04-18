document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('questionnaireForm');

    // Add event listener for form submission
    form.addEventListener('submit', function(event) {
        // Prevent default form submission
        event.preventDefault();

        // Perform custom validation
        const name = document.getElementById('name').value.trim();
        const email = document.getElementById('email').value.trim();
        const rating = document.querySelector('input[name="rating"]:checked');
        const comments = document.getElementById('comments').value.trim();

        // Validation for name (at least 3 characters)
        if (name.length < 3) {
            alert('Name must be at least 3 characters long.');
            return;
        }

        // Validation for email format
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
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

        // If all validations pass, submit the form
        alert('Form submitted successfully!');
        form.reset(); // Reset the form after submission
    });
});