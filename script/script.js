const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
    container.classList.add('right-panel-active');
});

signInButton.addEventListener('click', () => {
    container.classList.remove('right-panel-active');
});

document.addEventListener('DOMContentLoaded', function () {
    const signUpForm = document.querySelector('.sign-up-container form');

    signUpForm.addEventListener('submit', function (e) {
        e.preventDefault(); // Prevent the default form submission behavior

        // Get user input values using element IDs
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;
        const confirmPassword = document.getElementById('confirmPassword').value;

        // Create a JavaScript object to hold the user's data
        const userData = {
            name: name,
            email: email,
            password: password,
            confirmPassword: confirmPassword
        };

        // Send a POST request to your server to insert the data into the database
        fetch('signup.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(userData)
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Sign-up successful!'); // Display a success message
                // You can redirect the user to the login page or perform other actions here
            } else {
                alert('Sign-up failed. Please try again.'); // Display an error message
            }
        })
        .catch(error => console.error('Error:', error));
    });
});
