var modal = document.getElementById('teacherModal');
var btnClose = document.getElementById('closeModal');

function openModal() {
  document.getElementById('modal-title').innerText = 'Add Teacher';
  document.getElementById('modal-form').reset();
  modal.style.display = 'block';
}

btnClose.onclick = function () {
  modal.style.display = 'none';
};

window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = 'none';
  }
  if (event.target == modalCreds) {
    modalCreds.style.display = 'none';
  }
};


var modalCreds = document.getElementById('teacherCredsModal');
var btnCredsClose = document.getElementById('closeCredsModal');

function openModalCreds(username, password){
  document.getElementById('modal-creds-title').innerText = 'Credentials';
  document.getElementById('modal-username').innerText = `${username}`;
  document.getElementById('modal-password').innerText = `${password}`;
  modalCreds.style.display = 'block';
}

btnCredsClose.onclick = function () {
  modalCreds.style.display = 'none';
};
