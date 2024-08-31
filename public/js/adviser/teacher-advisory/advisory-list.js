// Function to open modals
function openModal(modalType) {
  if (modalType === 'addStudent') {
    document.getElementById('addStudentModal').style.display = 'block';
  }
}

// Function to close modals
document.getElementById('closeAddStudentModal').onclick = function () {
  document.getElementById('addStudentModal').style.display = 'none';
};

// Function to suggest students
function suggestStudent(query) {
  const suggestions = document.getElementById('suggestedStudents');
  suggestions.innerHTML = '';

  if (query.length > 0) {
    const students = ['John D Smith', 'James Smith'];
    students.forEach((student) => {
      if (student.toLowerCase().includes(query.toLowerCase())) {
        const li = document.createElement('li');
        li.innerText = student;
        li.onclick = function () {
          addStudentToList(student);
        };
        suggestions.appendChild(li);
      }
    });
  }
}

// Function to add student to the list
function addStudentToList(studentName) {
  const selectedStudentsList = document.getElementById('selectedStudentsList');
  const existingNames = Array.from(selectedStudentsList.getElementsByTagName('li')).map((li) => li.childNodes[0].nodeValue.trim());
  const studentTableNames = Array.from(document.getElementById('student-table-body').getElementsByTagName('td')).map((td) => td.innerText);

  if (existingNames.includes(studentName) || studentTableNames.includes(studentName)) {
    alert('Name is already listed');
    return;
  }

  const li = document.createElement('li');
  li.innerText = studentName;
  const removeIcon = document.createElement('span');
  removeIcon.className = 'material-icons';
  removeIcon.innerText = 'remove_circle';
  removeIcon.onclick = function () {
    selectedStudentsList.removeChild(li);
  };
  li.appendChild(removeIcon);
  selectedStudentsList.appendChild(li);
}

// Function to save added students
function saveAddedStudents() {
  const selectedStudentsList = document.getElementById('selectedStudentsList');
  const studentTableBody = document.getElementById('student-table-body');

  Array.from(selectedStudentsList.getElementsByTagName('li')).forEach((li) => {
    const studentName = li.childNodes[0].nodeValue.trim();
    const tr = document.createElement('tr');
    tr.innerHTML = `
          <td><input title="input-type" type="checkbox" class="select-row" onclick="toggleArchiveButton()" /></td>
          <td>New LRN</td>
          <td>${studentName}</td>
          <td>
              <button class="btn-update" data-tooltip="Update Grade" onclick="updateGrade(this)"><span class="material-symbols-outlined">edit_note</span></button>
              <button class="btn-remove" data-tooltip="Remove Student" id="btn-remove" onclick="removeRow(this)"><span class="material-symbols-outlined">delete</span></button>
          </td>
      `;
    studentTableBody.appendChild(tr);
  });

  selectedStudentsList.innerHTML = '';
  document.getElementById('addStudentModal').style.display = 'none';
}
