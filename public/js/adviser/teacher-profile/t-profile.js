// function toggleEditMode() {
//   const updateButton = document.getElementById('update-button');
//   const uploadInput = document.getElementById('upload-image');
//   let saveButton = document.getElementById('save-button');

//   if (updateButton.innerText === 'Update') {
//     uploadInput.style.display = 'block';
//     updateButton.style.display = 'none';

//     if (!saveButton) {
//       saveButton = document.createElement('button');
//       saveButton.type = 'button';
//       saveButton.id = 'save-button';
//       saveButton.innerText = 'Save';
//       saveButton.onclick = saveChanges;
//       updateButton.parentNode.insertBefore(saveButton, updateButton.nextSibling);
//     } else {
//       saveButton.style.display = 'block';
//     }
//   } else {
//     saveChanges();
//   }
// }

// function saveChanges() {
//   const saveButton = document.getElementById('save-button');
//   const updateButton = document.getElementById('update-button');
//   const uploadInput = document.getElementById('upload-image');

//   // Hide the save button and the upload input, show the update button
//   saveButton.style.display = 'none';
//   uploadInput.style.display = 'none';
//   updateButton.style.display = 'block';
//   updateButton.innerText = 'Update';
// }

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
