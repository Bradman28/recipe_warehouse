function registerForm () {
    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;

    if (name && email && username && password) {
        window.location.href = "confirmation.php";
    } else {
        alert("Please fill in all fields before submitting.")
    }
}
