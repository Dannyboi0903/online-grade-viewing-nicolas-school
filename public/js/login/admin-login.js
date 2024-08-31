document.addEventListener("DOMContentLoaded", function () {
    const loginButton = document.getElementById("loginButton");
    const usernameInput = document.getElementById("username");
    const passwordInput = document.getElementById("password");
    const errorDiv = document.getElementById("error");

    function clearInputs() {
        usernameInput.value = "";
        passwordInput.value = "";
    }

    function showError(message) {
        errorDiv.textContent = message;
        errorDiv.style.display = "block";
    }

    function hideError() {
        errorDiv.textContent = "";
        errorDiv.style.display = "none";
    }

    function login() {
        const username = usernameInput.value.trim();
        const password = passwordInput.value.trim();

        if (!username || !password) {
            showError("Both fields are required.");
            return;
        }

        // Example of incorrect username or password
        if (username !== "admin" || password !== "password") {
            showError("Incorrect username or password.");
            clearInputs(); // Clear inputs if credentials are incorrect
            return;
        }

        // Reset error message and clear inputs if login is successful
        hideError();
        clearInputs();
    }

    // Handle login button click
    loginButton.addEventListener("click", login);

    // Handle form submission with Enter key
    document.addEventListener("keydown", function (event) {
        if (event.key === "Enter") {
            event.preventDefault(); // Prevent form submission
            login();
        }
    });

    // Clear error message and retain input values when focusing on inputs
    [usernameInput, passwordInput].forEach(function (input) {
        input.addEventListener("focus", function () {
            if (errorDiv.style.display === "block") {
                // Only clear error if it's a field required error
                if (errorDiv.textContent === "Both fields are required.") {
                    return; // Retain input values if error is about required fields
                }
            }
            hideError();
        });
    });
});
