var loadFile = function (event) {
  var image = document.getElementById('profile-picture');
  image.src = URL.createObjectURL(event.target.files[0]);
  image.onload = function () {
    URL.revokeObjectURL(image.src); // free memory
  };
};

function toggleEditMode() {
  const isEditing = document.getElementById('update-button').innerText === 'Save';
  document.getElementById('full-name').contentEditable = !isEditing;
  document.getElementById('position').contentEditable = !isEditing;
  document.getElementById('username-display').contentEditable = !isEditing;
  document.getElementById('password-display').contentEditable = !isEditing;
  document.getElementById('upload-image').style.display = isEditing ? 'none' : 'block';
  document.getElementById('update-button').innerText = isEditing ? 'Update' : 'Save';
}
