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
                <button class="add-button" onclick="openModal('add')">Assign Section +</button>
                <label for="gradeLevel1">Grade Level:</label>
                <select id="gradeLevel1" class="search-box" title="Select Grade Level">
                    <option value="">Select</option>
                    @foreach ($grade_lvls as $grade_lvl)
                        <option value="{{$grade_lvl->id}}">{{$grade_lvl->grade_lvl_num}}</option>
                    @endforeach
                </select>
                <label for="section1">Section:</label>
                <select id="section1" class="search-box" title="Select Section">
                    <option value="">Select</option>
                    @foreach ($sections as $section)
                        <option value="{{$section->id}}">{{$section->section_num}}</option>
                    @endforeach
                </select>
                <label for="strand1">Strand:</label>
                <select id="strand1" class="search-box" title="Select Strand">
                    <option value="">Select</option>
                    @foreach ($strands as $strand)
                        <option value="{{$strand->id}}">{{$strand->strand_name}}</option>
                    @endforeach
                </select>
            </div>

            <!-- Start of Section Table -->
            <div class="report-container">
                <div class="data-container">
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Adviser</th>
                                <th>Grade Level</th>
                                <th>Section</th>
                                <th>Strand</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="section-table-body">
                            @foreach ($assigned_teachers as $assigned_teacher)

                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$assigned_teacher->first_name}} {{$assigned_teacher->middle_name ?? ''}}
                                        {{$assigned_teacher->last_name}}
                                    </td>
                                    <td>{{$assigned_teacher->grade_lvl->first()->grade_lvl_num}}</td>
                                    <td>{{$assigned_teacher->section->first()->section_num}}</td>
                                    <td>{{$assigned_teacher->strand->first()->strand_name}}</td>
                                    <td>
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
    <div id="sectionModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <span class="close" id="closeModal">&times;</span>
                <h2 id="modal-title">Assign Section</h2>
            </div>
            <div class="modal-body">
                <form id="modal-form" method="POST" action="{{route('admin.add_section')}}">
                    @csrf
                    <input type="hidden" id="sectionId" />
                    <div class="modal-section">
                        <label for="teacher">Teacher:</label>
                        <select id="teacher" name="teacher" required>
                            @foreach ($teachers as $teacher)
                                <option value="{{$teacher->id}}">{{$teacher->first_name}} {{$teacher->middle_name ?? ''}}
                                    {{$teacher->last_name}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="modal-section">
                        <label for="gradeLevel">Grade Level:</label>
                        <select id="gradeLevel" name="grade_level" required>
                            @foreach ($grade_lvls as $grade_lvl)
                                <option value="{{$grade_lvl->id}}">{{$grade_lvl->grade_lvl_num}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="modal-section">
                        <label for="section">Section:</label>
                        <select id="section" name="section" required>
                            @foreach ($sections as $section)
                                <option value="{{$section->id}}">{{$section->section_num}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="modal-section">
                        <label for="strand">Strand:</label>
                        <select id="strand" name="strand" required>
                            @foreach ($strands as $strand)
                                <option value="{{$strand->id}}">{{$strand->strand_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="save-button">Assign</button>
                </form>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/menu.js') }}"></script>
    <script src="{{ asset('js/admin/section/section-modal.js') }}"></script>
</body>

</html>