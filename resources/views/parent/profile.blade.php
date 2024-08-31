<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Parent Profile</title>
    <link rel="stylesheet" href="{{ asset('css/common/common.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common/res-common.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/parent/parent-profile/p-profile.css') }}" />
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
                        <div class="nav-option option7">
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

        <!-- Start of Student Table -->
        <div class="main">
            <div class="box-container">
                <h2 class="admin-profile">Manage your Profile</h2>
            </div>

            <!-- Start of Student Navbar Menu Content -->
            <div class="report-container">
                <div class="profile-container">
                    <div class="profile-image">
                        <img src="{{ asset('img/default-profile.jpg') }}" alt="Profile Picture" id="profile-picture" />
                        <input type="file" id="upload-image" accept="image/*" class="upload-input" onchange="loadFile(event)" style="display: none" />
                    </div>
                    <div class="profile-info">
                        <h1 id="full-name">John Doe</h1>
                        <p id="position">Parent</p>
                        <h2>Student Information</h2>
                        <p>Student Name: John C Smith</p>
                        <p>LRN: 123456789012</p>
                        <h2>Login Credentials</h2>
                        <p>Username: <span id="username-display">johndoe</span></p>
                        <p>
                            Password: <span id="password-display">********</span>
                            <button id="toggle-password" onclick="togglePasswordVisibility()">Show</button>
                        </p>
                        <button type="button" id="update-button" onclick="toggleEditMode()">Update</button>
                        <button type="button" id="save-button" style="display: none" onclick="saveChanges()">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/menu.js') }}"></script>
    <script src="{{ asset('js/parent/parent-profile/profile.js') }}"></script>
</body>

</html>