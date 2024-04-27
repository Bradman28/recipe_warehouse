
let login_button = document.getElementById('login_button');
let registration_link = document.getElementById('registration_link');
let login_form_container = document.getElementById('login_form_container');
let registration_form_container = document.getElementById('registration_form_container');

// form popup on login button
login_button.addEventListener("click", function() {
    console.log("login button clicked");
    // Hide the registration form if it's currently shown
    registration_form_container.style.display = 'none';
    // Toggle the 'show' class to display/hide the login form container
    login_form_container.classList.toggle("show");
});

// toggles to registration form when link is clicked
registration_link.addEventListener("click", function(event) {
    console.log("registration link clicked");
    // Hide the login form if it's currently shown
    login_form_container.style.display = 'none';
    // Show the registration form
    registration_form_container.style.display = 'block';
    // Prevent the default behavior of the anchor tag (preventing page navigation)
    event.preventDefault();
});

// closes form with X button in top right corner
let close_login_form = document.getElementById('close_login_form');

close_login_form.addEventListener("click", function() {
    login_form_container.style.display = 'none';
});

// closes form with X button in top right corner
let close_reg_form = document.getElementById('close_reg_form');

close_reg_form.addEventListener("click", function() {
    registration_form_container.style.display = 'none';
});

const email = document.getElementById('reg_email');
const password = document.getElementById('reg_password');
const confirm_password = document.getElementById('reg_confirm_password');
const form = document.getElementById('reg_form');
const error_message = document.getElementById('reg_error-message');


form.addEventListener('submit', (e) => {
    console.log('Email value:', email.value);
    let messages = []
    if (email.value === '' || email.value == null) {
        messages.push('Email is required');
    }

    if (password.value === '' || password.value == null) {
        messages.push('Password is required');
    }

    if (confirm_password.value === '' || confirm_password.value == null) {
        messages.push('Confirm password is required');
    }

    if (password.value !== confirm_password.value) {
        messages.push('Passwords do not match');
    }

    if (messages.length > 0) {
        e.preventDefault();
        error_message.innerText = messages.join(', ')
    }
})












