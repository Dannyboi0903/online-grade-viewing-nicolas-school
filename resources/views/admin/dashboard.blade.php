<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/admin/dashboard/dashboard.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common/res-common.css') }}" />
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

        <div class="main">
            <div class="box-container">
                <div class="box box1">
                    <div class="text">
                        <h2 class="topic-heading">60.5k</h2>
                        <h2 class="topic">Grade 7</h2>
                    </div>

                    <span class="material-symbols-outlined" aria-label="menu icon" class="dashboard-icon"> school
                    </span>
                </div>

                <div class="box box2">
                    <div class="text">
                        <h2 class="topic-heading">150</h2>
                        <h2 class="topic">Grade 8</h2>
                    </div>
                    <span class="material-symbols-outlined" aria-label="menu icon" class="dashboard-icon"> school
                    </span>
                </div>

                <div class="box box3">
                    <div class="text">
                        <h2 class="topic-heading">320</h2>
                        <h2 class="topic">Grade 9</h2>
                    </div>
                    <span class="material-symbols-outlined" aria-label="menu icon" class="dashboard-icon"> school
                    </span>
                </div>

                <div class="box box4">
                    <div class="text">
                        <h2 class="topic-heading">70</h2>
                        <h2 class="topic">Grade 10</h2>
                    </div>
                    <span class="material-symbols-outlined" aria-label="menu icon" class="dashboard-icon"> school
                    </span>
                </div>

                <div class="box box4">
                    <div class="text">
                        <h2 class="topic-heading">70</h2>
                        <h2 class="topic">Grade 11</h2>
                    </div>
                    <span class="material-symbols-outlined" aria-label="menu icon" class="dashboard-icon"> school
                    </span>
                </div>

                <div class="box box4">
                    <div class="text">
                        <h2 class="topic-heading">70</h2>
                        <h2 class="topic">Grade 12</h2>
                    </div>
                    <span class="material-symbols-outlined" aria-label="menu icon" class="dashboard-icon"> school
                    </span>
                </div>

                <div class="box box4">
                    <div class="text">
                        <h2 class="topic-heading">70</h2>
                        <h2 class="topic">Student Total</h2>
                    </div>
                    <span class="material-symbols-outlined" aria-label="menu icon" class="dashboard-icon"> school
                    </span>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/menu.js') }}"></script>
</body>

</html>