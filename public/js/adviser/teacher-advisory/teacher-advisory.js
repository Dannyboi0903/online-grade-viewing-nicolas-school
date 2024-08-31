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

function updateGrade(gradingPeriod, button) {
  var row = button.parentElement.parentElement;
  var studentName = row.cells[2].innerText;
  alert('Update ' + gradingPeriod + ' grade for ' + studentName);
  // Implement the actual update logic here
}

function removeRow(button) {
  var row = button.parentElement.parentElement;
  row.remove();
  toggleArchiveButton(); // Update archive button visibility
}
