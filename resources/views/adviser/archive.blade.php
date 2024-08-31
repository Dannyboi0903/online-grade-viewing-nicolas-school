<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>View Archive</title>
    <link rel="stylesheet" href="{{ asset('css/common/common.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common/res-common.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common/dropdown.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/adviser/teacher-archive/t-archive.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/adviser/teacher-archive/record-modal.css') }}" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
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
        <!-- End of NAVBAR -->

        <!-- Start of Student Navbar Menu Content -->
        <div class="main">
            <div class="box-container">
                <input type="text" class="search-box" placeholder="Student Name" />
                <div class="box-container">
                    <label for="sy-start">SY:</label>
                    <input type="text" class="search-box" id="sy-start" placeholder="2023" />
                    <label for="sy-end">to</label>
                    <input type="text" class="search-box" id="sy-end" placeholder="2024" />
                    <button type="button" class="view-button" onclick="openModal()">View</button>
                </div>
            </div>
            <!-- Start of Student Table -->
            <div class="report-container">
                <div class="data-container">
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>Student Name</th>
                                <th>School Year</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>John C Smith</td>
                                <td>2023-2024</td>
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
                <p style="text-align:center;"><strong>School Year:</strong> 2023-2024</p>
                <div class="table-responsive">
                    <table class="modal-grade-table">
                        <thead>
                            <tr>
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
                                <td>Capstone Project and Research 1</td>
                                <td>Mr. Teacher</td>
                                <td>85</td>
                                <td>87</td>
                                <td>88</td>
                                <td>90</td>
                                <td>87.5</td>
                                <td>Passed</td>
                            </tr>
                            <tr>
                                <td>Science</td>
                                <td>Ms. Science</td>
                                <td>89</td>
                                <td>90</td>
                                <td>92</td>
                                <td>91</td>
                                <td>90.5</td>
                                <td>Passed</td>
                            </tr>
                            <tr>
                                <td>Math</td>
                                <td>Mr. Math</td>
                                <td>85</td>
                                <td>86</td>
                                <td>87</td>
                                <td>88</td>
                                <td>86.5</td>
                                <td>Passed</td>
                            </tr>
                            <tr>
                                <td>English</td>
                                <td>Mrs. English</td>
                                <td>88</td>
                                <td>89</td>
                                <td>90</td>
                                <td>91</td>
                                <td>89.5</td>
                                <td>Passed</td>
                            </tr>
                            <tr>
                                <td>Filipino</td>
                                <td>Ms. Filipino</td>
                                <td>87</td>
                                <td>86</td>
                                <td>88</td>
                                <td>89</td>
                                <td>87.5</td>
                                <td>Passed</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p><strong>General Average:</strong> 88.3</p>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/menu.js') }}"></script>
    <script src="{{ asset('js/adviser/teacher-archive/t-archive.js') }}"></script>
</body>

</html>