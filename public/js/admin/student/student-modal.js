var modal = document.getElementById('studentModal');
var btnClose = document.getElementById('closeModal');
var currentRow = null;

function openModal(mode, row = null) {
  if (mode === 'add') {
    document.getElementById('modal-title').innerText = 'Add Student';
    document.getElementById('modal-form').reset();
    currentRow = null;
  } else if (mode === 'edit' && row) {
    document.getElementById('modal-title').innerText = 'Edit Student';
    currentRow = row.parentElement.parentElement;
    var cells = currentRow.getElementsByTagName('td');
    document.getElementById('lrn').value = cells[0].innerText;
    document.getElementById('firstName').value = cells[1].innerText.split(' ')[0];
    document.getElementById('middleInitial').value = cells[1].innerText.split(' ')[1].charAt(0);
    document.getElementById('lastName').value = cells[1].innerText.split(' ')[2];
    document.getElementById('gradeLevel').value = cells[2].innerText;
    document.getElementById('section').value = cells[3].innerText;
    document.getElementById('strand').value = cells[4].innerText;
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
  var lrn = document.getElementById('lrn').value;
  var firstName = document.getElementById('firstName').value;
  var middleInitial = document.getElementById('middleInitial').value;
  var lastName = document.getElementById('lastName').value;
  var gradeLevel = document.getElementById('gradeLevel').value;
  var section = document.getElementById('section').value;
  var strand = document.getElementById('strand').value;

  var fullName = `${firstName} ${middleInitial}. ${lastName}`;

  if (currentRow) {
    currentRow.cells[0].innerText = lrn;
    currentRow.cells[1].innerText = fullName;
    currentRow.cells[2].innerText = gradeLevel;
    currentRow.cells[3].innerText = section;
    currentRow.cells[4].innerText = strand;
  } else {
    var table = document.getElementById('student-table-body');
    var newRow = table.insertRow();
    newRow.innerHTML = `
                    <td>${lrn}</td>
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
