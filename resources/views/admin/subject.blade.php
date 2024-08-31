<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Subject Management</title>
    <link rel="stylesheet" href="{{ asset('css/common/common.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common/res-common.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common/dropdown.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/admin/subject/subject.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/admin/subject/subject-modal.css') }}" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="{{ asset('css/admin/modal.css') }}" />
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

        <!-- Start of Subject Navbar Menu Content -->
        <div class="main">
            <div class="box-container">
                <button class="add-button" onclick="openModal('add')">Add Subject +</button>
                <input type="text" class="search-box" placeholder="Name: John Doe Smith" />
                <input type="text" class="search-box" placeholder="Subject: English" />
            </div>

            <!-- Start of Subject Table -->
            <div class="report-container">
                <div class="data-container">
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>Subject Teacher</th>
                                <th>Subject</th>
                                <th>Grade Level</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="subject-table-body">
                            <tr>
                                <td>John D Smith</td>
                                <td>English</td>
                                <td>7</td>
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

    <!-- Modal -->
    <div id="subjectModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <span class="close" id="closeModal">&times;</span>
                <h2 id="modal-title">Subject Teacher</h2>
            </div>
            <div class="modal-body">
                <h2>Subject Teacher</h2>
                <form id="modal-form">
                    <div class="modal-section">
                        <label for="first-name">First Name:</label>
                        <input type="text" id="first-name" name="first-name" />
                    </div>
                    <div class="modal-section">
                        <label for="middle-initial">Middle Initial:</label>
                        <input type="text" id="middle-initial" name="middle-initial" />
                    </div>
                    <div class="modal-section">
                        <label for="last-name">Last Name:</label>
                        <input type="text" id="last-name" name="last-name" />
                    </div>
                    <h2>Subject</h2>
                    <div class="modal-section">
                        <label for="subject">Subject:</label>
                        <input type="text" id="subject" name="subject" />
                    </div>
                    <div class="modal-section">
                        <label for="grade-level">Grade Level:</label>
                        <select id="grade-level" name="grade-level">
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select>
                    </div>
                    <button type="button" class="save-button" onclick="saveData()">Save</button>
                </form>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/menu.js') }}"></script>
    <script src="{{ asset('js/admin/subject/subject-modal.js') }}"></script>
    <script src="{{ asset('js/admin/subject/update-modal.js') }}"></script>
</body>

</html>