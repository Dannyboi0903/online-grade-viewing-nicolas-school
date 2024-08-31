<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Advisory Management</title>
    <link rel="stylesheet" href="{{ asset('css/common/common.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common/res-common.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common/dropdown.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/adviser/teacher-advisory/teacher-advisory.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/adviser/teacher-advisory/teacher-modal.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/adviser/teacher-advisory/advisory-list.css') }}" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="icon" href="{{ asset('img/dashboard-img/438239506_1017519057043495_6289348737565874152_n.jpg') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <!-- Header Part -->
    <header>
        <div class="logosec">
            <img src="{{ asset('img/dashboard-img/438239506_1017519057043495_6289348737565874152_n.jpg') }}" class="nbbnhs-logo" alt="school-logo" />
            <span class="material-symbols-outlined icn menuicn" id="menuicn" aria-label="menu icon">menu</span>
        </div>
        <div class="school">
            <h3 class="school-name">Nicolas B. Barreras National High School</h3>
            <p class="school-system">Automated Enrollment Process with Online Grade Viewing System</p>
        </div>
    </header>
    <div class="main-container">
        <div class="navcontainer">
            <nav class="nav">
                <div class="nav-upper-options">
                    <a href="{{ route('adviser.dashboard') }}" class="nav-link">
                        <div class="nav-option option1">
                            <span class="material-symbols-outlined"> space_dashboard </span>
                            <h3>Dashboard</h3>
                        </div>
                    </a>
                    <a href="{{ route('adviser.advisory') }}" class="nav-link">
                        <div class="nav-option option3">
                            <span class="material-symbols-outlined"> nest_multi_room </span>
                            <h3>Advisory</h3>
                        </div>
                    </a>
                    <a href="{{ route('adviser.archive') }}" class="nav-link">
                        <div class="nav-option option6">
                            <span class="material-symbols-outlined"> folder_open </span>
                            <h3>Archive</h3>
                        </div>
                    </a>
                    <a href="{{ route('adviser.profile') }}" class="nav-link">
                        <div class="nav-option logout">
                            <span class="material-symbols-outlined"> account_circle </span>
                            <h3>Profile</h3>
                        </div>
                    </a>
                    <div class="nav-option logout">
                        <span class="material-symbols-outlined"> logout </span>
                        <h3>Logout</h3>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Start of Student Navbar Menu Content -->
        <div class="main">
            <div class="box-container">
                <button class="add-button" onclick="openModal('addStudent')">Add Student +</button>
                <input type="text" class="search-box" placeholder="Name: John D Smith" />
                <div class="fixed-info">
                    <label for="gradeLevel">Grade Level: </label>
                    <span id="gradeLevel1">11</span>
                </div>
                <div class="fixed-info">
                    <label for="section">Section: </label>
                    <span id="section1">A</span>
                </div>
                <div class="fixed-info">
                    <label for="strand">Strand: </label>
                    <span id="strand1">HUMSS</span>
                </div>
                <button id="archive-button" class="archive-button" style="display: none">Archive</button>
            </div>
            <!-- Start of Student Table -->
            <div class="report-container">
                <div class="data-container">
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th><input title="input-type" type="checkbox" id="select-all" onclick="toggleAllCheckboxes(this)" /></th>
                                <th>Student LRN</th>
                                <th>Name</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="student-table-body">
                            <tr>
                                <td><input title="input-type" type="checkbox" class="select-row" onclick="toggleArchiveButton()" /></td>
                                <td>43816HT6JG67</td>
                                <td>John D Smith</td>
                                <td>
                                    <button class="btn-update" data-tooltip="Update Grade" onclick="updateGrade(this)"><span class="material-symbols-outlined">edit_note</span></button>
                                    <button class="btn-remove" data-tooltip="Remove Student" id="btn-remove" onclick="removeRow(this)"><span class="material-symbols-outlined">delete</span></button>
                                </td>
                            </tr>
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal for Update Grades -->
    <div id="updateGradeModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <span class="close" id="closeUpdateModal">&times;</span>
                <h2>Update Grades</h2>
            </div>
            <div class="modal-body">
                <div class="student-info">
                    <p>LRN: <span id="studentLRN"></span></p>
                    <p>Student Name: <span id="studentName"></span></p>
                    <p>Grade Level: <span id="studentGradeLevel"></span></p>
                    <p>Section: <span id="studentSection"></span></p>
                    <p>Strand: <span id="studentStrand"></span></p>
                    <p>Adviser: <span id="studentAdviser"></span></p>
                </div>
                <div class="grades-table-container">
                    <table class="grades-table">
                        <thead>
                            <tr>
                                <th>Subject</th>
                                <th>Teacher</th>
                                <th>1st Grading</th>
                                <th>2nd Grading</th>
                                <th>3rd Grading</th>
                                <th>4th Grading</th>
                                <th>Final Grade</th>
                                <th>Remarks</th>
                            </tr>
                        </thead>
                        <p class="school-year">School Year: <span>2023-2024</span></p>
                        <tbody id="gradesTableBody">
                            <tr>
                                <td>
                                    <select title="subject-selection" onchange="subjectChanged(this)">
                                        <option value="" disabled selected>Select Subject</option>
                                        <option value="Science">Science</option>
                                        <option value="Math">Math</option>
                                        <option value="English">English</option>
                                        <option value="Filipino">Filipino</option>
                                        <option value="MAPEH">MAPEH</option>
                                        <option value="Aral Pan">Aral Pan</option>
                                    </select>
                                </td>
                                <td></td>
                                <td contenteditable="true" class="grade-cell" oninput="updateGrades(this)" onkeypress="return isNumberKey(event)" data-tooltip="Enter grade"></td>
                                <td contenteditable="true" class="grade-cell" oninput="updateGrades(this)" onkeypress="return isNumberKey(event)" data-tooltip="Enter grade"></td>
                                <td contenteditable="true" class="grade-cell" oninput="updateGrades(this)" onkeypress="return isNumberKey(event)" data-tooltip="Enter grade"></td>
                                <td contenteditable="true" class="grade-cell" oninput="updateGrades(this)" onkeypress="return isNumberKey(event)" data-tooltip="Enter grade"></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="general-average-container">
                    <p>General Average: <span id="generalAverage"></span></p>
                </div>
                <button class="save-button" onclick="saveGrades()">Save</button>
            </div>
        </div>
    </div>

    <!-- Modal for Adding Students -->
    <div id="addStudentModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <span class="close" id="closeAddStudentModal">&times;</span>
                <h2>Add Students</h2>
            </div>
            <div class="modal-body">
                <div class="school-year-input">
                    <label for="schoolYearFrom">School Year From:</label>
                    <input type="text" id="schoolYearFrom" placeholder="2023">
                    <label for="schoolYearTo">To:</label>
                    <input type="text" id="schoolYearTo" placeholder="2024">
                </div>
                <div class="student-search">
                    <input type="text" id="studentSearchInput" placeholder="Search for a student" oninput="suggestStudent(this.value)">
                    <div id="suggestedStudents" class="suggested-students">
                        <!-- Suggestions will appear here -->
                    </div>
                </div>
                <div class="selected-students">
                    <h3>Selected Students:</h3>
                    <ul id="selectedStudentsList">
                        <!-- Selected students will appear here -->
                    </ul>
                </div>
                <button class="save-button" onclick="saveAddedStudents()">Save</button>
            </div>
        </div>
    </div>

    <!-- <script src="{{ asset('js/menu.js') }}"></script> -->
    <script src="{{ asset('js/adviser/teacher-advisory/teacher-advisory.js') }}"></script>
    <script src="{{ asset('js/adviser/teacher-advisory/teacher-modal.js') }}"></script>
    <script src="{{ asset('js/adviser/teacher-advisory/advisory-list.js') }}"></script>
    <script src="{{ asset('js/adviser/teacher-advisory/btn.js') }}"></script>
</body>

</html>