<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Student Management</title>
    <link rel="stylesheet" href="{{ asset('css/common/common.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common/res-common.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common/dropdown.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/admin/student/student.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/admin/student/student-modal.css') }}" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <!-- Header Part -->
    <header>
        <div class="logosec">
            <img src="{{ asset('img/dashboard-img/438239506_1017519057043495_6289348737565874152_n.jpg') }}"
                class="nbbnhs-logo" alt="school-logo" />
            <span class="material-symbols-outlined icn menuicn" id="menuicn" aria-label="menu icon">menu</span>
        </div>
        <div class="school">
            <h3 class="school-name">Nicolas B. Barreras National High School</h3>
            <p class="school-system">Automated Enrollment Process with Online Grade Viewing System</p>
        </div>
    </header>

    <div class="main-container">
        @include('admin.layout.navbar')

        <!-- Start of Student Navbar Menu Content -->
        <div class="main">
            <div class="box-container">
                <button class="add-button" onclick="openModal('add')">Register Student +</button>
                <input type="text" class="search-box" placeholder="Name: John D Smith" />
                <label for="gradeLevel">Grade Level:</label>
                <select id="gradeLevel1" class="search-box" title="Select gradeLevel">
                    <option value="">Select</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>
                <label for="section">Section:</label>
                <select id="section1" class="search-box" title="Select Section">
                    <option value="">Select</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
                <label for="strand">Strand:</label>
                <select id="strand1" class="search-box" title="Select Strand">
                    <option value="">Select</option>
                    <option value="ABM">ABM</option>
                    <option value="STEM">STEM</option>
                    <option value="HUMSS">HUMSS</option>
                    <option value="GAS">GAS</option>
                    <option value="TVL">TVL</option>
                    <option value="ICT">ICT</option>
                </select>
            </div>

            <!-- Start of Student Table -->
            <div class="report-container">
                <div class="data-container">
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>Student LRN</th>
                                <th>Name</th>
                                <th>Grade Level</th>
                                <th>Section</th>
                                <th>Strand</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="student-table-body">
                            <tr>
                                <td>43816HT6JG67</td>
                                <td>John D Smith</td>
                                <td>11</td>
                                <td>1</td>
                                <td>HUMSS</td>
                                <td>
                                    <button class="btn-edit" onclick="editRow(this)">Update</button>
                                </td>
                            </tr>
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Add/Edit Student -->
    <div id="studentModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <span class="close" id="closeModal">&times;</span>
                <h2 id="modal-title">Add Student</h2>
            </div>
            <div class="modal-body">
                <form id="modal-form">
                    <input type="hidden" id="studentId" />
                    <div class="modal-section">
                        <label for="lrn">LRN:</label>
                        <input type="text" id="lrn" name="lrn" required />
                    </div>
                    <div class="modal-section">
                        <label for="firstName">First Name:</label>
                        <input type="text" id="firstName" name="firstName" required />
                    </div>
                    <div class="modal-section">
                        <label for="middleInitial">Middle Name:</label>
                        <input type="text" id="middleInitial" name="middleInitial" />
                    </div>
                    <div class="modal-section">
                        <label for="lastName">Last Name:</label>
                        <input type="text" id="lastName" name="lastName" required />
                    </div>
                    <div class="modal-section">
                        <label for="gradeLevel">Grade Level:</label>
                        <select id="gradeLevel" name="gradeLevel" required>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select>
                    </div>
                    <div class="modal-section">
                        <label for="section">Section:</label>
                        <select id="section" name="section" required>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </div>
                    <div class="modal-section">
                        <label for="strand">Strand:</label>
                        <select id="strand" name="strand" required>
                            <option value="ABM">ABM</option>
                            <option value="STEM">STEM</option>
                            <option value="HUMSS">HUMSS</option>
                            <option value="GAS">GAS</option>
                            <option value="TVL">TVL</option>
                            <option value="ICT">ICT</option>
                        </select>
                    </div>
                    <button type="button" class="save-button" onclick="saveData()">Save</button>
                </form>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/menu.js') }}"></script>
    <script src="{{ asset('js/admin/student/student-modal.js') }}"></script>
</body>

</html>