<div class="navcontainer">
    <nav class="nav">
        <div class="nav-upper-options">
            <a href="{{ route('admin.dashboard') }}" class="nav-link">
                <div class="nav-option option1">
                    <span class="material-symbols-outlined"> space_dashboard </span>
                    <h3>Dashboard</h3>
                </div>
            </a>

            <a href="{{ route('admin.student') }}" class="nav-link">
                <div class="nav-option option2">
                    <span class="material-symbols-outlined"> school </span>
                    <h3>Students</h3>
                </div>
            </a>

            <a href="{{ route('admin.teacher') }}" class="nav-link">
                <div class="nav-option option3">
                    <span class="material-symbols-outlined"> history_edu </span>
                    <h3>Teacher</h3>
                </div>
            </a>

            <a href="{{ route('admin.section') }}" class="nav-link">
                <div class="nav-option option4">
                    <span class="material-symbols-outlined"> nest_multi_room </span>
                    <h3>Sections</h3>
                </div>
            </a>

            <a href="{{ route('admin.subject') }}" class="nav-link">
                <div class="nav-option option5">
                    <span class="material-symbols-outlined"> menu_book </span>
                    <h3>Subjects</h3>
                </div>
            </a>

            <a href="{{ route('admin.parent') }}" class="nav-link">
                <div class="nav-option option6">
                    <span class="material-symbols-outlined"> supervisor_account </span>
                    <h3>Parents</h3>
                </div>
            </a>

            <a href="{{ route('admin.record') }}" class="nav-link">
                <div class="nav-option option7">
                    <span class="material-symbols-outlined"> folder_open </span>
                    <h3>Records</h3>
                </div>
            </a>

            <a href="{{ route('admin.profile') }}" class="nav-link">
                <div class="nav-option option8">
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