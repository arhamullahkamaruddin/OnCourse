<aside id="sidebar">
    <!-- Content for sidebar -->
    <div class="vh-100 overflow-hidden d-flex flex-column">
        <div class="sidebar-logo">
            <a href="#">OnCourse</a>
        </div>
        <ul class="sidebar-nav">
            @if (Auth::user()->role === 'admin')
                <li class="sidebar-header">
                    Elemen Admin
                </li>
                <li class="sidebar-item">
                    <a href="{{ route('admin.dashboard') }}" class="sidebar-link">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAaklEQVRIS2NkoDFgpLH5DKMWEAxh+gfRfyAAOYsRCEA0kPsLSLESdCpUAUwfTD2GD2huAbEuJVYd/eOAWJcRq46YOABHOrGAnEimrgXEupRYdaORjBFSo5FMbOKBqxuGqYjkMCCggeZBBADiXjAZVkgU8gAAAABJRU5ErkJggg=="
                            class="pe-2" />
                        Dashboard
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{ route('admin.manage-account') }}" class="sidebar-link">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAaklEQVRIS2NkoDFgpLH5DKMWEAxh+gfRfyAAOYsRCEA0kPsLSLESdCpUAUwfTD2GD2huAbEuJVYd/eOAWJcRq46YOABHOrGAnEimrgXEupRYdaORjBFSo5FMbOKBqxuGqYjkMCCggeZBBADiXjAZVkgU8gAAAABJRU5ErkJggg=="
                            class="pe-2" />
                        Kelola Akun
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{ route('admin.transactions') }}" class="sidebar-link">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAaklEQVRIS2NkoDFgpLH5DKMWEAxh+gfRfyAAOYsRCEA0kPsLSLESdCpUAUwfTD2GD2huAbEuJVYd/eOAWJcRq46YOABHOrGAnEimrgXEupRYdaORjBFSo5FMbOKBqxuGqYjkMCCggeZBBADiXjAZVkgU8gAAAABJRU5ErkJggg=="
                            class="pe-2" />
                        Transaksi
                    </a>
                </li>
            @elseif (Auth::user()->role === 'instructor')
                <li class="sidebar-header">
                    Elemen Instruktur
                </li>
                <li class="sidebar-item">
                    <a href="{{ route('instructor.dashboard') }}" class="sidebar-link">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAaklEQVRIS2NkoDFgpLH5DKMWEAxh+gfRfyAAOYsRCEA0kPsLSLESdCpUAUwfTD2GD2huAbEuJVYd/eOAWJcRq46YOABHOrGAnEimrgXEupRYdaORjBFSo5FMbOKBqxuGqYjkMCCggeZBBADiXjAZVkgU8gAAAABJRU5ErkJggg=="
                            class="pe-2" />
                        Dashboard
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed" data-bs-target="#posts" data-bs-toggle="collapse"
                        aria-expanded="false">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAaklEQVRIS2NkoDFgpLH5DKMWEAxh+gfRfyAAOYsRCEA0kPsLSLESdCpUAUwfTD2GD2huAbEuJVYd/eOAWJcRq46YOABHOrGAnEimrgXEupRYdaORjBFSo5FMbOKBqxuGqYjkMCCggeZBBADiXjAZVkgU8gAAAABJRU5ErkJggg=="
                            class="pe-2" />
                        Kursus
                    </a>
                    <ul id="posts" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="{{ route('instructor.my-course') }}" class="sidebar-link">Lihat Kursus</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('instructor.create-course') }}" class="sidebar-link">Buat Kursus</a>
                        </li>
                    </ul>
                </li>
            @elseif (Auth::user()->role === 'student')
                <li class="sidebar-header">
                    Elemen Siswa
                </li>
                <li class="sidebar-item">
                    <a href="{{ route('student.dashboard') }}" class="sidebar-link">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAaklEQVRIS2NkoDFgpLH5DKMWEAxh+gfRfyAAOYsRCEA0kPsLSLESdCpUAUwfTD2GD2huAbEuJVYd/eOAWJcRq46YOABHOrGAnEimrgXEupRYdaORjBFSo5FMbOKBqxuGqYjkMCCggeZBBADiXjAZVkgU8gAAAABJRU5ErkJggg=="
                            class="pe-2" />
                        Dashboard
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed" data-bs-target="#posts" data-bs-toggle="collapse"
                        aria-expanded="false">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAaklEQVRIS2NkoDFgpLH5DKMWEAxh+gfRfyAAOYsRCEA0kPsLSLESdCpUAUwfTD2GD2huAbEuJVYd/eOAWJcRq46YOABHOrGAnEimrgXEupRYdaORjBFSo5FMbOKBqxuGqYjkMCCggeZBBADiXjAZVkgU8gAAAABJRU5ErkJggg=="
                            class="pe-2" />
                        Kursus
                    </a>
                    <ul id="posts" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="{{ route('student.search-course') }}" class="sidebar-link">Lihat Kursus</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('student.my-course') }}" class="sidebar-link">Kursus Saya</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="{{ route('student.transactions') }}" class="sidebar-link">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAaklEQVRIS2NkoDFgpLH5DKMWEAxh+gfRfyAAOYsRCEA0kPsLSLESdCpUAUwfTD2GD2huAbEuJVYd/eOAWJcRq46YOABHOrGAnEimrgXEupRYdaORjBFSo5FMbOKBqxuGqYjkMCCggeZBBADiXjAZVkgU8gAAAABJRU5ErkJggg=="
                            class="pe-2" />
                        Transaksi
                    </a>
                </li>
            @endif
        </ul>
    </div>
</aside>
