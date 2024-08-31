var modal = document.getElementById("subjectModal");
        var btnClose = document.getElementById("closeModal");
        var currentRow = null;

        function openModal(mode, row = null) {
            if (mode === 'add') {
                document.getElementById('modal-title').innerText = 'Add Subject';
                document.getElementById('modal-form').reset();
                currentRow = null;
            } else if (mode === 'edit' && row) {
                document.getElementById('modal-title').innerText = 'Edit Subject';
                currentRow = row.parentElement.parentElement;
                var cells = currentRow.getElementsByTagName('td');
                document.getElementById('first-name').value = cells[0].innerText.split(' ')[0];
                document.getElementById('middle-initial').value = cells[0].innerText.split(' ')[1].charAt(0);
                document.getElementById('last-name').value = cells[0].innerText.split(' ')[2];
                document.getElementById('subject').value = cells[1].innerText;
                document.getElementById('grade-level').value = cells[2].innerText;
            }
            modal.style.display = "block";
        }

        btnClose.onclick = function() {
            modal.style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        function saveData() {
            var firstName = document.getElementById('first-name').value;
            var middleInitial = document.getElementById('middle-initial').value;
            var lastName = document.getElementById('last-name').value;
            var subject = document.getElementById('subject').value;
            var gradeLevel = document.getElementById('grade-level').value;

            var fullName = `${firstName} ${middleInitial}. ${lastName}`;

            if (currentRow) {
                currentRow.cells[0].innerText = fullName;
                currentRow.cells[1].innerText = subject;
                currentRow.cells[2].innerText = gradeLevel;
            } else {
                var table = document.getElementById('subject-table-body');
                var newRow = table.insertRow();
                newRow.innerHTML = `
                    <td>${fullName}</td>
                    <td>${subject}</td>
                    <td>${gradeLevel}</td>
                    <td>
                        <button class="btn-view">View</button>
                        <button class="btn-edit" onclick="editRow(this)">Edit</button>
                    </td>
                `;
            }
            modal.style.display = "none";
        }

        function editRow(button) {
            openModal('edit', button);
        }