// Get the login and register forms
const loginForm = document.getElementById("loginForm");
const registerForm = document.getElementById("registerForm");

// Get the login and register links
const loginLink = document.getElementById("loginLink");
const registerLink = document.getElementById("registerLink");

// Add click event listeners to the links
loginLink.addEventListener("click", showLoginForm);
registerLink.addEventListener("click", showRegisterForm);

// Function to show the login form and hide the register form
function showLoginForm(event) {
  event.preventDefault();
  loginForm.style.display = "block";
  registerForm.style.display = "none";
}

// Function to show the register form and hide the login form
function showRegisterForm(event) {
  event.preventDefault();
  registerForm.style.display = "block";
  loginForm.style.display = "none";
}

// Validate the password and confirm password fields on form submission
// registerForm.addEventListener('submit', function (event) {
//   event.preventDefault();
//   const passwordInput = document.getElementById('passwordInput');
//   const confirmPasswordInput = document.getElementById('confirmPasswordInput');

//   if (passwordInput.value !== confirmPasswordInput.value) {
//     alert("Password doesn't match");
//   } else {
//     // Submit the form if validation passes
//     registerForm.submit();
//   }
// });
