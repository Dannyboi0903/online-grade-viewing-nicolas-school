function toggleArchiveButton() {
  var checkboxes = document.querySelectorAll('.select-row:checked');
  var archiveButton = document.getElementById('archive-button');
  if (checkboxes.length > 0) {
    archiveButton.style.display = 'block';
  } else {
    archiveButton.style.display = 'none';
  }
}

function toggleAllCheckboxes(source) {
  var checkboxes = document.querySelectorAll('.select-row');
  checkboxes.forEach(function (checkbox) {
    checkbox.checked = source.checked;
  });
  toggleArchiveButton();
}

document.getElementById('select-all').addEventListener('change', function () {
  toggleAllCheckboxes(this);
});

function updateGrade(button) {
  var row = button.parentElement.parentElement;
  var studentName = row.cells[2].innerText;

  document.getElementById('studentName').innerText = studentName;
  document.getElementById('studentLRN').innerText = row.cells[1].innerText;
  document.getElementById('studentGradeLevel').innerText = document.getElementById('gradeLevel1').innerText;
  document.getElementById('studentSection').innerText = document.getElementById('section1').innerText;
  document.getElementById('studentStrand').innerText = document.getElementById('strand1').innerText;
  document.getElementById('studentAdviser').innerText = 'Mr. Adviser';

  var modal = document.getElementById('updateGradeModal');
  modal.style.display = 'block';
}

function removeRow(button) {
  var row = button.parentElement.parentElement;
  row.remove();
  toggleArchiveButton(); // Update archive button visibility
}

function isNumberKey(evt) {
  var charCode = evt.which ? evt.which : evt.keyCode;
  if (charCode > 31 && (charCode < 48 || charCode > 57)) {
    return false;
  }
  return true;
}

function subjectChanged(selectElement) {
  var selectedSubject = selectElement.value;
  var row = selectElement.parentElement.parentElement;
  var teacherCell = row.cells[1];
  teacherCell.innerText = getTeacherName(selectedSubject);

  var subjects = ['Science', 'Math', 'English', 'Filipino', 'MAPEH', 'Aral Pan'];
  var selectedSubjects = Array.from(document.querySelectorAll('select'))
    .map((s) => s.value)
    .filter((v) => v !== '');

  if (selectedSubjects.length < subjects.length) {
    var newRow = document.createElement('tr');
    var subjectCell = document.createElement('td');
    var subjectSelect = document.createElement('select');
    subjectSelect.innerHTML = '<option value="" disabled selected>Select Subject</option>';
    subjects
      .filter((subject) => !selectedSubjects.includes(subject))
      .forEach((subject) => {
        var option = document.createElement('option');
        option.value = subject;
        option.innerText = subject;
        subjectSelect.appendChild(option);
      });
    subjectSelect.onchange = function () {
      subjectChanged(this);
    };
    subjectCell.appendChild(subjectSelect);

    var teacherCell = document.createElement('td');
    var gradeCells = [];
    for (let i = 0; i < 4; i++) {
      var gradeCell = document.createElement('td');
      gradeCell.contentEditable = 'true';
      gradeCell.className = 'grade-cell';
      gradeCell.onkeypress = isNumberKey;
      gradeCell.oninput = function () {
        updateGrades(gradeCell);
      };
      gradeCell.setAttribute('data-tooltip', 'Enter grade');
      gradeCells.push(gradeCell);
    }

    var finalGradeCell = document.createElement('td');
    var remarksCell = document.createElement('td');

    newRow.appendChild(subjectCell);
    newRow.appendChild(teacherCell);
    gradeCells.forEach((cell) => newRow.appendChild(cell));
    newRow.appendChild(finalGradeCell);
    newRow.appendChild(remarksCell);

    document.getElementById('gradesTableBody').appendChild(newRow);
  }
}

function getTeacherName(subject) {
  switch (subject) {
    case 'Science':
      return 'Mr. Science';
    case 'Math':
      return 'Ms. Math';
    case 'English':
      return 'Mrs. English';
    case 'Filipino':
      return 'Mr. Filipino';
    case 'MAPEH':
      return 'Ms. MAPEH';
    case 'Aral Pan':
      return 'Mr. Aral Pan';
    default:
      return '';
  }
}

document.getElementById('closeUpdateModal').onclick = function () {
  document.getElementById('updateGradeModal').style.display = 'none';
};

window.onclick = function (event) {
  if (event.target == document.getElementById('updateGradeModal')) {
    document.getElementById('updateGradeModal').style.display = 'none';
  }
};

function saveGrades() {
  // Implement save logic here
  document.getElementById('updateGradeModal').style.display = 'none';
}

function updateGrades(cell) {
  var row = cell.parentElement;
  var grades = [
    parseFloat(row.cells[2].innerText) || 0,
    parseFloat(row.cells[3].innerText) || 0,
    parseFloat(row.cells[4].innerText) || 0,
    parseFloat(row.cells[5].innerText) || 0,
  ];

  if (grades.some(grade => grade === 0)) {
    row.cells[6].innerText = ''; // Final Grade
    row.cells[7].innerText = ''; // Remarks
  } else {
    var finalGrade = grades.reduce((a, b) => a + b) / grades.length;
    row.cells[6].innerText = finalGrade.toFixed(2);
    row.cells[7].innerText = finalGrade >= 75 ? 'Passed' : 'Failed';
  }

  updateGeneralAverage();
}

function updateGeneralAverage() {
  var rows = document.querySelectorAll('#gradesTableBody tr');
  var totalFinalGrade = 0;
  var subjectCount = 0;

  rows.forEach(row => {
    var finalGrade = parseFloat(row.cells[6].innerText);
    if (!isNaN(finalGrade)) {
      totalFinalGrade += finalGrade;
      subjectCount++;
    }
  });

  var generalAverage = subjectCount > 0 ? (totalFinalGrade / subjectCount).toFixed(2) : '';
  document.getElementById('generalAverage').innerText = generalAverage;
}
