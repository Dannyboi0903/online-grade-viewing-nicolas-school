var loadFile = function (event) {
  var image = document.getElementById('profile-picture');
  image.src = URL.createObjectURL(event.target.files[0]);
  image.onload = function () {
    URL.revokeObjectURL(image.src); // free memory
  };
};

function toggleEditMode() {
  const updateButton = document.getElementById('update-button');
  const isEditing = updateButton.innerText === 'Save';
  const uploadInput = document.getElementById('upload-image');
  
  if (isEditing) {
    // Save mode: hide upload input and show update button
    uploadInput.style.display = 'none';
    updateButton.innerText = 'Update';
  } else {
    // Update mode: show upload input and show save button
    uploadInput.style.display = 'block';
    updateButton.innerText = 'Save';
  }
}



function togglePasswordVisibility() {
  const passwordSpan = document.getElementById('password-display');
  const toggleButton = document.getElementById('toggle-password');

  if (passwordSpan.innerText === '********') {
    passwordSpan.innerText = 'password123'; // Replace this with the actual password logic
    toggleButton.innerText = 'Hide';
  } else {
    passwordSpan.innerText = '********';
    toggleButton.innerText = 'Show';
  }
}
