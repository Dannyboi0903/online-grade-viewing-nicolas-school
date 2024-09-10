<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Teacher</title>
    <link rel="stylesheet" href="{{ asset('css/common/common.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common/res-common.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common/dropdown.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/admin/teacher/teacher.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/admin/teacher/teacher-modal.css') }}" />
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
                <button class="add-button" onclick="openModal()">Add Teacher +</button>
                <input type="text" class="search-box" placeholder="Name: John Doe Smith" />
            </div>

            <!-- Start of Section Table -->
            <div class="report-container">
                <div class="data-container">
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>Full Name</th>
                                <th>Date Created</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody id="section-table-body">
                            @foreach ($teachers as $teacher)
                                <tr>
                                    <td>
                                        {{$teacher->first_name}}
                                        {{$teacher->middle_name}}
                                        {{$teacher->last_name}}
                                    </td>
                                    <td>{{$teacher->created_at->format('F m, Y | H:i:s')}}</td>
                                    <td>
                                        <button class="btn-view"
                                            onclick="openModalCreds('{{$teacher->username}}', '{{$teacher->show_password}}')">View</button>
                                        <button class="btn-edit" onclick="editRow(this)">Update</button>
                                    </td>
                                </tr>
                            @endforeach
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Add/Edit Section -->
    <div id="teacherModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <span class="close" id="closeModal">&times;</span>
                <h2 id="modal-title">Add Section</h2>
            </div>
            <div class="modal-body">
                <form id="modal-form" method="POST" action="{{route('admin.add_teacher')}}">
                    @csrf
                    <div class="modal-section">
                        <label for="fname">First Name:</label>
                        <input type="text" id="fname" name="first_name" required />
                    </div>
                    <div class="modal-section">
                        <label for="minit">Middle Initial:</label>
                        <input type="text" id="minit" name="middle_name" />
                    </div>
                    <div class="modal-section">
                        <label for="lname">Last Name:</label>
                        <input type="text" id="lname" name="last_name" required />
                    </div>
                    <button type="submit" class="save-button">Save</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal for Showing Creds Section -->
    <div id="teacherCredsModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <span class="close" id="closeCredsModal">&times;</span>
                <h2 id="modal-creds-title">Add Section</h2>
            </div>
            <div class="modal-body">
                <div class="modal-section">
                    <h3>Username: </h3>
                    <p id="modal-username"></p>
                    <h3>Password: </h3>
                    <p id="modal-password"></p>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/menu.js') }}"></script>
    <script src="{{ asset('js/admin/teacher/teacher-modal.js') }}"></script>
</body>

</html>