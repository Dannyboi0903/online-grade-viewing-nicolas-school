<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile Management</title>
    <link rel="stylesheet" href="{{ asset('css/admin/admin-profile/admin.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/admin/admin-profile/res-admin-profile.css') }}" />
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
                <h2 class="admin-profile">Manage your Profile</h2>
            </div>

            <!-- Start of Profile Management Content -->
            <div class="report-container">
                <div class="profile-container">
                    <div class="profile-image">
                        <img src="{{ asset('img/default-profile.jpg') }}" alt="Profile Picture" id="profile-picture">
                        <input type="file" id="upload-image" accept="image/*" class="upload-input"
                            onchange="loadFile(event)" aria-label="Upload Profile Picture"
                            title="Upload Profile Picture">
                    </div>
                    <div class="profile-info">
                        <h1 contenteditable="false" id="full-name">Ola Nordmann</h1>
                        <p contenteditable="false" id="position">Academic Chairperson</p>
                        <h2>Login Credentials</h2>
                        <p>Username: <span id="username-display">olanordmann</span></p>
                        <p>Password: <span id="password-display">********</span></p>
                        <button type="button" id="update-button" onclick="toggleEditMode()">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/menu.js') }}"></script>
    <script src="{{ asset('js/admin/admin-profile/admin-profile.js') }}"></script>
</body>

</html>