
let login_button = document.getElementById('login_button');
let registration_link = document.getElementById('registration_link');
let login_form_container = document.getElementById('login_form_container');
let registration_form_container = document.getElementById('registration_form_container');

// form popup on login button
login_button.addEventListener("click", function() {
    console.log("login button clicked");
<<<<<<< HEAD
    // Hide the registration form while login form is up
=======
    // Hide the registration form if it's currently shown
>>>>>>> 74038efdde88b871abbc385c26cbf9803103032a
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

<<<<<<< HEAD
//login form validation for front end
const login_email = document.getElementById('login_email');
const login_password = document.getElementById('login_password');
const login_form = document.getElementById('login_form');
const login_error_message = document.getElementById('login_error_message');

// registration form validation for front end
login_form.addEventListener('submit', (e) => {
    console.log('Email value:', login_email.value);
    let log_messages = []
    if (login_email.value === '' || login_email.value == null) {
        log_messages.push('Email is required');
    }

    if (login_password.value === '' || login_password.value == null) {
        log_messages.push('Password is required');
    }

    if (log_messages.length > 0) {
        e.preventDefault();
        login_error_message.innerText = log_messages.join(', ')
    }
});

// variables for registration validation
const reg_email = document.getElementById('reg_email');
const reg_password = document.getElementById('reg_password');
const reg_confirm_password = document.getElementById('reg_confirm_password');
const reg_form = document.getElementById('reg_form');
const reg_error_message = document.getElementById('reg_error_message');

// registration form validation for front end
reg_form.addEventListener('submit', (e) => {
    console.log('Email value:', login_email.value);
    let messages = []
    if (reg_email.value === '' || reg_email.value == null) {
        messages.push('Email is required');
    }

    if (reg_password.value === '' || reg_password.value == null) {
        messages.push('Password is required');
    }

    if (reg_confirm_password.value === '' || reg_confirm_password.value == null) {
        messages.push('Confirm password is required');
    }

    if (reg_password.value !== reg_confirm_password.value) {
=======
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
>>>>>>> 74038efdde88b871abbc385c26cbf9803103032a
        messages.push('Passwords do not match');
    }

    if (messages.length > 0) {
        e.preventDefault();
<<<<<<< HEAD
        reg_error_message.innerText = messages.join(', ')
    }
});

close_login_form.addEventListener("click", function() {
    login_form_container.style.display = 'none';
});

close_reg_form.addEventListener("click", function() {
    registration_form_container.style.display = 'none';
});
=======
        error_message.innerText = messages.join(', ')
    }
})
>>>>>>> 74038efdde88b871abbc385c26cbf9803103032a












