<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>View Records</title>
    <link rel="stylesheet" href="{{ asset('css/common/common.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common/res-common.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common/dropdown.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/admin/record/record.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/admin/record/record-modal.css') }}" />
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
                <input type="text" class="search-box" placeholder="Student Name">

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

                <div class="box-container">
                    <label for="sy-start">SY:</label>
                    <input type="text" class="search-box" id="sy-start" placeholder="2023">
                    <label for="sy-end">to</label>
                    <input type="text" class="search-box" id="sy-end" placeholder="2024">
                    <button type="button" class="view-button">View</button>
                </div>
            </div>

            <!-- Start of Student Table -->
            <div class="report-container">
                <div class="data-container">
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>Student Name</th>
                                <th>Grade Level</th>
                                <th>Section</th>
                                <th>Strand</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>John C Smith</td>
                                <td>7</td>
                                <td>A</td>
                                <td>HUMSS</td>
                                <td>
                                    <button class="btn-view" onclick="openModal()">View</button>
                                </td>
                            </tr>
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <span class="close" id="closeModal">&times;</span>
                <h2>Student Information</h2>
            </div>
            <div class="modal-body">
                <h3>Personal Information</h3>
                <p><strong>LRN:</strong> 123456789012</p>
                <p><strong>Student Name:</strong> John C Smith</p>
                <p><strong>Grade Level:</strong> 7</p>
                <p><strong>Section:</strong> A</p>
                <p><strong>Strand:</strong> HUMSS</p>
                <p><strong>Adviser:</strong> Mr. Adviser</p>

                <h3>Grades</h3>
                <p class="school-year">School Year: <span>2023-2024</span></p>
                <div class="grades-table-container">
                    <table class="modal-grade-table">
                        <thead>
                            <tr>
                                <th>Subject Code</th>
                                <th>Subject Name</th>
                                <th>Subject Teacher</th>
                                <th>1st Grading</th>
                                <th>2nd Grading</th>
                                <th>3rd Grading</th>
                                <th>4th Grading</th>
                                <th>Final Grade</th>
                                <th>Remarks</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>PC-CAP1</td>
                                <td>Capstone Project and Research 1</td>
                                <td>Mr. Teacher</td>
                                <td>85</td>
                                <td>87</td>
                                <td>88</td>
                                <td>90</td>
                                <td>87.5</td>
                                <td>Passed</td>
                            </tr>
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>
                <p><strong>General Average:</strong> 87.5</p>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/admin/menu.js') }}"></script>
    <script src="{{ asset('js/admin/record/record-modal.js') }}"></script>
</body>

</html>