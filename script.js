const loginForm = document.getElementById('loginForm');
const usernameInput = document.getElementById('username');
const passwordInput = document.getElementById('password');
const errorMessage = document.getElementById('errorMessage');

loginForm.addEventListener('submit', (event) => {
    event.preventDefault();

    const username = usernameInput.value;
    const password = passwordInput.value;

    // Validate user and password (replace with your authentication logic)
    if (username === 'admin' && password === 'password123') {
        // Login successful (redirect to another page, etc.)
        alert('Login successful!');
        window.location.href = 'index.html'; // Replace with the URL of the destination page
    } else {
        errorMessage.textContent = 'Invalid username or password.';
    }
});
