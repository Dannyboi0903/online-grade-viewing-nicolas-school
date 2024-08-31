<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>View Grade</title>
    <link rel="stylesheet" href="{{ asset('css/common/common.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common/res-common.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common/dropdown.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/parent/parent-grade/p-grade.css') }}" />
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
        <div class="navcontainer">
            <nav class="nav">
                <div class="nav-upper-options">
                    <a href="{{ route('parent.dashboard') }}" class="nav-link">
                        <div class="nav-option option1">
                            <span class="material-symbols-outlined"> space_dashboard </span>
                            <h3>Dashboard</h3>
                        </div>
                    </a>

                    <a href="{{ route('parent.grade') }}" class="nav-link">
                        <div class="nav-option option3">
                            <span class="material-symbols-outlined"> nest_multi_room </span>
                            <h3>Grade</h3>
                        </div>
                    </a>

                    <a href="{{ route('parent.profile') }}" class="nav-link">
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

                <div class="box-container">
                    <label for="sy-start">SY:</label>
                    <input type="text" class="search-box" id="sy-start" placeholder="2023" />
                    <label for="sy-end">to</label>
                    <input type="text" class="search-box" id="sy-end" placeholder="2024" />
                    <button type="button" class="view-button" onclick="viewGrades()">View</button>
                </div>
            </div>

            <!-- Start of Student Table -->

            <div class="report-container">
                <div class="data-container">
                    <div class="student-info">
                        <h2>Student Information</h2>
                        <p>LRN: 123456789012</p>
                        <p>Student Name: John C Smith</p>
                        <p>Grade Level: 7</p>
                        <p>Section: A</p>
                        <p>Strand: HUMSS</p>
                        <p>Adviser: Mr. Adviser</p>
                        <h2>Grades</h2>
                        <p class="school-year">School Year: 2023-2024</p>
                        <table class="grades-table">
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
                        <p>General Average: 88.3</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/menu.js') }}"></script>
</body>

</html>