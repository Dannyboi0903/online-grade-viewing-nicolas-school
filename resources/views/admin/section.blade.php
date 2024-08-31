<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Section Management</title>
    <link rel="stylesheet" href="{{ asset('css/common/common.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common/res-common.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common/dropdown.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/admin/section/section.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/admin/section/section-modal.css') }}" />
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

        <!-- Start of Section Navbar Menu Content -->
        <div class="main">
            <div class="box-container">
                <button class="add-button" onclick="openModal('add')">Add Section +</button>
                <label for="gradeLevel1">Grade Level:</label>
                <select id="gradeLevel1" class="search-box" title="Select Grade Level">
                    <option value="">Select</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>
                <label for="section1">Section:</label>
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
                <label for="strand1">Strand:</label>
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

            <!-- Start of Section Table -->
            <div class="report-container">
                <div class="data-container">
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>Adviser</th>
                                <th>Grade Level</th>
                                <th>Section</th>
                                <th>Strand</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="section-table-body">
                            <tr>
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

    <!-- Modal for Add/Edit Section -->
    <div id="sectionModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <span class="close" id="closeModal">&times;</span>
                <h2 id="modal-title">Add Section</h2>
            </div>
            <div class="modal-body">
                <form id="modal-form">
                    <input type="hidden" id="sectionId" />
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
    <script src="{{ asset('js/admin/section/section-modal.js') }}"></script>
</body>

</html>