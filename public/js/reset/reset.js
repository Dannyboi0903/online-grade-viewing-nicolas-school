const passwordInput = document.getElementById('new-password');
      const confirmPasswordInput = document.getElementById('confirm-password');
      const resetButton = document.getElementById('reset-password');
      const passwordError = document.getElementById('password-error');
      const togglePasswordIcons = document.querySelectorAll('.toggle-password');

      const lengthCheck = document.getElementById('length-check');
      const lowercaseCheck = document.getElementById('lowercase-check');
      const uppercaseCheck = document.getElementById('uppercase-check');
      const numberCheck = document.getElementById('number-check');
      const specialCheck = document.getElementById('special-check');

      function validatePassword() {
        const password = passwordInput.value;
        const confirmPassword = confirmPasswordInput.value;

        // Password Requirements
        const lengthValid = password.length >= 8;
        const lowercaseValid = /[a-z]/.test(password);
        const uppercaseValid = /[A-Z]/.test(password);
        const numberValid = /[0-9]/.test(password);
        const specialValid = /[!@#$%^&*]/.test(password);

        // Update UI
        lengthCheck.classList.toggle('invalid', !lengthValid);
        lowercaseCheck.classList.toggle('invalid', !lowercaseValid);
        uppercaseCheck.classList.toggle('invalid', !uppercaseValid);
        numberCheck.classList.toggle('invalid', !numberValid);
        specialCheck.classList.toggle('invalid', !specialValid);

        // Password Match
        if (password && confirmPassword && password !== confirmPassword) {
          confirmPasswordInput.classList.add('is-invalid');
          passwordError.style.display = 'block';
        } else {
          confirmPasswordInput.classList.remove('is-invalid');
          passwordError.style.display = 'none';
        }

        return lengthValid && lowercaseValid && uppercaseValid && numberValid && specialValid;
      }

      togglePasswordIcons.forEach((icon) => {
        icon.addEventListener('click', function () {
          const input = this.previousElementSibling;
          const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
          input.setAttribute('type', type);
          this.querySelector('i').classList.toggle('bi-eye');
          this.querySelector('i').classList.toggle('bi-eye-slash-fill');
        });
      });

      passwordInput.addEventListener('input', validatePassword);
      confirmPasswordInput.addEventListener('input', validatePassword);

      resetButton.addEventListener('click', function (e) {
        e.preventDefault();
        if (validatePassword() && passwordInput.value === confirmPasswordInput.value) {
          alert('Password successfully changed!');
          // Add logic to handle password reset
        }
      });