<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Parent Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/parent/parent-dashboard/p-dashboard.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common/res-common.css') }}" />
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

        <div class="main">
            <div class="box-container">
                <h2>Hello</h2>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/menu.js') }}"></script>
</body>

</html>