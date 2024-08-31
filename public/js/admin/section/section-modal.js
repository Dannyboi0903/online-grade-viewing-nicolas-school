var modal = document.getElementById('sectionModal');
var btnClose = document.getElementById('closeModal');
var currentRow = null;

function openModal(mode, row = null) {
  if (mode === 'add') {
    document.getElementById('modal-title').innerText = 'Add Section';
    document.getElementById('modal-form').reset();
    currentRow = null;
  } else if (mode === 'edit' && row) {
    document.getElementById('modal-title').innerText = 'Edit Section';
    currentRow = row.parentElement.parentElement;
    var cells = currentRow.getElementsByTagName('td');
    document.getElementById('fname').value = cells[0].innerText.split(' ')[0];
    document.getElementById('minit').value = cells[0].innerText.split(' ')[1].charAt(0);
    document.getElementById('lname').value = cells[0].innerText.split(' ')[2];
    document.getElementById('gradeLevel').value = cells[1].innerText;
    document.getElementById('section').value = cells[2].innerText;
    document.getElementById('strand').value = cells[3].innerText;
  }
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

function saveData() {
  var fname = document.getElementById('fname').value;
  var minit = document.getElementById('minit').value;
  var lname = document.getElementById('lname').value;
  var gradeLevel = document.getElementById('gradeLevel').value;
  var section = document.getElementById('section').value;
  var strand = document.getElementById('strand').value;

  var fullName = `${fname} ${minit}. ${lname}`;

  if (currentRow) {
    currentRow.cells[0].innerText = fullName;
    currentRow.cells[1].innerText = gradeLevel;
    currentRow.cells[2].innerText = section;
    currentRow.cells[3].innerText = strand;
  } else {
    var table = document.getElementById('section-table-body');
    var newRow = table.insertRow();
    newRow.innerHTML = `
                    <td>${fullName}</td>
                    <td>${gradeLevel}</td>
                    <td>${section}</td>
                    <td>${strand}</td>
                    <td>
                        <button class="btn-edit" onclick="editRow(this)">Update</button>
                    </td>
                `;
  }
  modal.style.display = 'none';
}

function editRow(button) {
  openModal('edit', button);
}
