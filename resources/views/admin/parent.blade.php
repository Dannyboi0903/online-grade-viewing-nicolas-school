<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Parent Management</title>
    <link rel="stylesheet" href="{{ asset('css/common/common.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common/res-common.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/admin/parent/parent.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/admin/parent/parent-modal.css') }}" />
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

        <!-- Start of Parent Navbar Menu Content -->
        <div class="main">
            <div class="box-container">
                <button class="add-button" onclick="openModal('add')">Add Account +</button>
                <input type="text" class="search-box" placeholder="Parent Name" />
                <input type="text" class="search-box" placeholder="Student Name" />
            </div>

            <!-- Start of Parent Table -->
            <div class="report-container">
                <div class="data-container">
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>Parent</th>
                                <th>Student Name</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="parent-table-body">
                            <tr>
                                <td>John C Smith</td>
                                <td>James D Smith</td>
                                <td>
                                    <button class="btn-view" onclick="viewRow(this)">View</button>
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

    <!-- Modal for Add/Edit Parent -->
    <div id="parentModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <span class="close" id="closeModal">&times;</span>
                <h2 id="modal-title">Add Parent</h2>
            </div>
            <div class="modal-body">
                <form id="modal-form">
                    <input type="hidden" id="parentId" />
                    <h3>Parent Information</h3>
                    <div class="modal-section">
                        <label for="fname">First Name:</label>
                        <input type="text" id="fname" name="fname" required />
                    </div>
                    <div class="modal-section">
                        <label for="minit">Middle Initial:</label>
                        <input type="text" id="minit" name="minit" />
                    </div>
                    <div class="modal-section">
                        <label for="lname">Last Name:</label>
                        <input type="text" id="lname" name="lname" required />
                    </div>
                    <h3>Login Credentials</h3>
                    <div class="modal-section">
                        <label for="username">Username:</label>
                        <input type="text" id="username" name="username" required />
                    </div>
                    <div class="modal-section">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" required />
                    </div>
                    <h3>Link Student</h3>
                    <div class="modal-section">
                        <label for="studentName">Student Name:</label>
                        <input type="text" id="studentName" name="studentName" />
                    </div>
                    <button type="button" class="save-button" onclick="saveData()">Save</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal for Viewing Parent -->
    <div id="viewModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <span class="close" id="closeViewModal">&times;</span>
                <h2 id="view-modal-title">View Parent</h2>
            </div>
            <div class="modal-body">
                <h3>Parent Information</h3>
                <div class="modal-section">
                    <label>First Name:</label>
                    <p id="viewFname"></p>
                </div>
                <div class="modal-section">
                    <label>Middle Initial:</label>
                    <p id="viewMinit"></p>
                </div>
                <div class="modal-section">
                    <label>Last Name:</label>
                    <p id="viewLname"></p>
                </div>
                <h3>Login Credentials</h3>
                <div class="modal-section">
                    <label>Username:</label>
                    <p id="viewUsername"></p>
                </div>
                <div class="modal-section">
                    <label>Password:</label>
                    <p id="viewPassword"></p>
                </div>
                <h3>Link Student</h3>
                <div class="modal-section">
                    <label>Student Name:</label>
                    <p id="viewStudentName"></p>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/menu.js') }}"></script>
    <script src="{{ asset('js/admin/parent/parent-modal.js') }}"></script>
</body>

</html>