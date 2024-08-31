var modal = document.getElementById('myModal');
var btnClose = document.getElementById('closeModal');

function openModal() {
  modal.style.display = 'block';
}

btnClose.onclick = function () {
  modal.style.display = 'none';
};

window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = 'none';
  }
};
