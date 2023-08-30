const loginForm = document.getElementById("loginForm");
const signupForm = document.getElementById("signupForm");
const loginToggle = document.getElementById("loginToggle");
const signupToggle = document.getElementById("signupToggle");
const forgotPasswordLink = document.getElementById("forgotPasswordLink");
const forgotPasswordModal = document.getElementById("forgotPasswordModal");
const closeModal = document.getElementById("closeModal");

loginToggle.addEventListener("click", () => {
    loginForm.classList.add("active");
    signupForm.classList.remove("active");
});

signupToggle.addEventListener("click", () => {
    signupForm.classList.add("active");
    loginForm.classList.remove("active");
});

forgotPasswordLink.addEventListener("click", () => {
    forgotPasswordModal.style.display = "block";
});

closeModal.addEventListener("click", () => {
    forgotPasswordModal.style.display = "none";
});

window.addEventListener("click", (event) => {
    if (event.target === forgotPasswordModal) {
        forgotPasswordModal.style.display = "none";
    }
});

// Handle form submissions (placeholders, no actual functionality)
loginForm.addEventListener("submit", (event) => {
    event.preventDefault();
    alert("Login form submitted");
});

signupForm.addEventListener("submit", (event) => {
    event.preventDefault();
    alert("Signup form submitted");
});

forgotPasswordModal.addEventListener("submit", (event) => {
    event.preventDefault();
    alert("Password reset request submitted");
    forgotPasswordModal.style.display = "none";
});

