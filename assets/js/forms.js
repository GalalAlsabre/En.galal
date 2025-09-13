// /assets/js/forms.js

document.addEventListener('DOMContentLoaded', () => {
    const contactForm = document.getElementById('contact-form');
    const successMessage = document.getElementById('success-message');

    if (contactForm) {
        contactForm.addEventListener('submit', function (event) {
            // 1. Prevent the default browser submission
            event.preventDefault();

            let isValid = true;
            
            // 2. Clear previous errors
            const requiredFields = contactForm.querySelectorAll('[required]');
            requiredFields.forEach(field => {
                field.classList.remove('form-error');
            });

            // 3. Validate each required field
            requiredFields.forEach(field => {
                if (field.value.trim() === '') {
                    isValid = false;
                    field.classList.add('form-error');
                }
            });

            // 4. If all fields are valid, show the success message
            if (isValid) {
                // In a real project, you would send data to a server here.
                // For this static demo, we just hide the form and show the message.
                contactForm.style.display = 'none';
                successMessage.style.display = 'block';
                // Optional: Scroll to the top of the message
                successMessage.scrollIntoView({ behavior: 'smooth' });
            }
        });
    }
});