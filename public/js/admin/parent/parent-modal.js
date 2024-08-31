var parentModal = document.getElementById('parentModal');
var viewModal = document.getElementById('viewModal');
var closeParentModalBtn = document.getElementById('closeModal');
var closeViewModalBtn = document.getElementById('closeViewModal');
var currentRow = null;

function openModal(mode, row = null) {
  if (mode === 'add') {
    document.getElementById('modal-title').innerText = 'Add Parent';
    document.getElementById('modal-form').reset();
    currentRow = null;
    parentModal.style.display = 'block';
  } else if (mode === 'edit' && row) {
    document.getElementById('modal-title').innerText = 'Edit Parent';
    currentRow = row.parentElement.parentElement;
    var cells = currentRow.getElementsByTagName('td');
    var fullName = cells[0].innerText.split(' ');
    document.getElementById('fname').value = fullName[0];
    document.getElementById('minit').value = fullName.length > 2 ? fullName[1].charAt(0) : '';
    document.getElementById('lname').value = fullName.length > 2 ? fullName[2] : fullName[1];
    document.getElementById('studentName').value = cells[1].innerText;
    document.getElementById('username').value = 'NBBNHS_' + fullName.join('');
    document.getElementById('password').value = '123456';
    parentModal.style.display = 'block';
  }
}

function viewRow(button) {
  var row = button.parentElement.parentElement;
  var cells = row.getElementsByTagName('td');
  var fullName = cells[0].innerText.split(' ');
  document.getElementById('viewFname').innerText = fullName[0];
  document.getElementById('viewMinit').innerText = fullName.length > 2 ? fullName[1].charAt(0) : '';
  document.getElementById('viewLname').innerText = fullName.length > 2 ? fullName[2] : fullName[1];
  document.getElementById('viewUsername').innerText = 'NBBNHS_' + fullName.join('');
  document.getElementById('viewPassword').innerText = '123456';
  document.getElementById('viewStudentName').innerText = cells[1].innerText;
  viewModal.style.display = 'block';
}

closeParentModalBtn.onclick = function () {
  parentModal.style.display = 'none';
};

closeViewModalBtn.onclick = function () {
  viewModal.style.display = 'none';
};

window.onclick = function (event) {
  if (event.target == parentModal) {
    parentModal.style.display = 'none';
  }
  if (event.target == viewModal) {
    viewModal.style.display = 'none';
  }
};

function saveData() {
  var firstName = document.getElementById('fname').value;
  var middleInitial = document.getElementById('minit').value;
  var lastName = document.getElementById('lname').value;
  var studentName = document.getElementById('studentName').value;

  var fullName = `${firstName} ${middleInitial ? middleInitial + '. ' : ''}${lastName}`;

  if (currentRow) {
    // Update existing row
    currentRow.cells[0].innerText = fullName;
    currentRow.cells[1].innerText = studentName;
  }
  parentModal.style.display = 'none';
}

function editRow(button) {
  openModal('edit', button);
}
