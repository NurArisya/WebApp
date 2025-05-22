// login.js

/*function togglePassword(icon) {
    const input = icon.previousElementSibling;
    const isPassword = input.type === "password";
    input.type = isPassword ? "text" : "password";
    icon.classList.toggle("fa-eye");
    icon.classList.toggle("fa-eye-slash");
}*/

document.getElementById("togglePassword").addEventListener("click", function () {
    const passwordInput = document.getElementById("password");
    const icon = this;

    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        icon.classList.remove("fa-eye");
        icon.classList.add("fa-eye-slash");
    }
    else {
        passwordInput.type = "password";
        icon.classList.remove("fa-eye-slash");
        icon.classList.add("fa-eye");
    }
});


function validateForm(event) {
    event.preventDefault();
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;
    let emailError = document.getElementById("emailError");
    let passwordError = document.getElementById("passwordError");
    let isValid = true;

    emailError.innerHTML = "";
    passwordError.innerHTML = "";

    if (!email) {
        emailError.innerHTML = "Email is required!";
        isValid = false;
    } else if (!password) {
        passwordError.innerHTML = "Passwords is required!";
        isValid = false;
    }
    if (isValid) {
        window.location.href = "dashboard.html"; // Redirect to dashboard page
        alert("You have successfully logged in!");

    }
}
